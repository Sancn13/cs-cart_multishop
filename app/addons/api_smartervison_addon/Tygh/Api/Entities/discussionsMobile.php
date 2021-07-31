<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;
use Tygh\Registry;

class DiscussionsMobile extends AEntity
{
    public function index($id = 0, $params = array())
    {
        if (fn_allowed_for('MULTIVENDOR') && $this->auth['user_type'] == 'V' && $this->getParentName() != 'products') {
            return array(
                'status' => Response::STATUS_FORBIDDEN
            );
        }

        $data = array();

        if ($this->getParentName() == 'products') {
            $parent_product = $this->getParentData();
            $params['object_id'] = $parent_product['product_id'];
            $params['object_type'] = 'P';
            unset($params['thread_id']);
        }

        if (!empty($id)) {
            $data = $this->getPost($id, $params);

            if ($data) {
                $status = Response::STATUS_OK;
            } else {
                $status = Response::STATUS_NOT_FOUND;
            }

        } else {
            $items_per_page = $this->safeGet(
                $params, 'items_per_page', Registry::get('settings.Appearance.admin_elements_per_page')
            );
            list($discussions, $search) = fn_get_discussions($params, $items_per_page);

            $data = array(
                'discussions' => array_values($discussions),
                'params' => $search
            );
            $status = Response::STATUS_OK;
        }

        $data_reviews = [];

        for($i=0;$i<count($data['discussions']);$i++){
            $object_reviews = "";
            if($data['discussions'][$i]['object_type'] == 'P'){
                $data_name_product = db_get_array('SELECT ?:product_descriptions.product FROM ?:product_descriptions WHERE ?:product_descriptions.product_id ='.$data['discussions'][$i]['object_id']);
                $object_reviews = ' Review the product ' . $data_name_product[0]["product"];
            }
            else if($data['discussions'][$i]['object_type'] == 'M'){
                $data_name_company = db_get_array('SELECT ?:companies.company FROM ?:companies WHERE ?:companies.company_id ='.$data['discussions'][$i]['object_id']);
                $object_reviews = ' Review the vendor ' . $data_name_company[0]["company"];
            }
            $data_reviews[$i]['id'] = (int)$data['discussions'][$i]['thread_id'];
            $data_reviews[$i]['review'] = $data['discussions'][$i]['message'];
            $data_reviews[$i]['rate'] = (double)$data['discussions'][$i]['rating_value'];
            $data_reviews[$i]['user_id'] = (int)$data['discussions'][$i]['user_id'];
            $data_reviews[$i]['created_at'] = date('Y-m-d H:i:s', (int)$data["discussions"][$i]['timestamp']);
            $data_reviews[$i]["updated_at"] = date('Y-m-d H:i:s', (int)$data["discussions"][$i]['timestamp']);
            $data_reviews[$i]["custom_fields"] = [];
            $data_reviews[$i]["user"] = [
                "id"=> (int)$data['discussions'][$i]['user_id'],
                "name"=> $data['discussions'][$i]['name'],
                "custom_fields" => [
                    "bio" => [
                        "value" => $object_reviews,
                        "view" => $object_reviews,
                        "name" => 'bio',
                    ]
                ]
            ];
        }



        return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'data' => $data_reviews,
                'message'=> 'Market retrieved successfully',
            ),
        );   
    }

    public function create($params)
    {
        if (fn_allowed_for('MULTIVENDOR') && $this->auth['user_type'] == 'V') {
            if ($this->getParentName() != 'products') {
                return array(
                    'status' => Response::STATUS_FORBIDDEN
                );
            }
            unset($params['rating_value']);
        }

        $data = array();
        $status = Response::STATUS_BAD_REQUEST;

        if ($this->getParentName() == 'products') {
            $parent_product = $this->getParentData();
            $params['object_id'] = $parent_product['product_id'];
            $params['object_type'] = 'P';
            unset($params['thread_id']);
        }

        $valid_params = true;
        if (empty($params['thread_id'])) {
            foreach (array('object_type', 'object_id', 'name') as $field) {
                if (!isset($params[$field])) {
                    $data['message'] = __('api_required_field', array('[field]' => $field));
                    $valid_params = false;
                    break;
                }
            }
        }

        if ($valid_params && empty($params['rating_value']) && empty($params['message'])) {
            $show_field = 'rating_value/message';
            if (fn_allowed_for('MULTIVENDOR') && $this->auth['user_type'] == 'V') {
                $show_field = 'message';
            }
            $data['message'] = __('api_required_field', array('[field]' => $show_field));
            $valid_params = false;
        }

        if ($valid_params) {
            $send_notifications = $this->safeGet($params, 'send_notifications', true);
            $post_id = fn_add_discussion_post($params, $send_notifications);

            if ($post_id) {
                $status = Response::STATUS_CREATED;
                $data = array(
                    'post_id' => $post_id,
                );
            }
        }

        return array(
            'status' => $status,
            'data' => $data
        );
    }

    public function update($id, $params)
    {
        if (fn_allowed_for('MULTIVENDOR') && $this->auth['user_type'] == 'V') {
            return array(
                'status' => Response::STATUS_FORBIDDEN
            );
        }

        $data = array();
        $status = Response::STATUS_BAD_REQUEST;

        if ($this->getParentName() == 'products') {
            $parent_product = $this->getParentData();
            $params['object_id'] = $parent_product['product_id'];
            $params['object_type'] = 'P';
        }

        if ($this->getPost($id, $params)) {
            $posts = array(
                $id => $params
            );

            if (fn_update_discussion_posts($posts)) {
                $status = Response::STATUS_OK;
                $data = array(
                    'post_id' => $id
                );
            }
        }

        return array(
            'status' => $status,
            'data' => $data
        );
    }

    public function delete($id)
    {
        if (fn_allowed_for('MULTIVENDOR') && $this->auth['user_type'] == 'V') {
            return array(
                'status' => Response::STATUS_FORBIDDEN
            );
        }

        $status = Response::STATUS_NOT_FOUND;
        $data = array();
        $params = array();

        if ($this->getParentName() == 'products') {
            $parent_product = $this->getParentData();
            $params['object_id'] = $parent_product['product_id'];
            $params['object_type'] = 'P';
        }

        if ($this->getPost($id, $params)) {
            fn_discussion_delete_post($id);
            $status = Response::STATUS_NO_CONTENT;
        }

        return array(
            'status' => $status,
            'data' => $data
        );
    }

    public function privileges()
    {
        return array(
            'index'  => true,
            'create' => true,
            'update' => true,
            'delete' => true,
        );
    }

    public function privilegesCustomer()
    {
        return array(
            'index'  => true,
            'create' => true,
            'update' => true,
            'delete' => true,
        );
    }

    protected function getPost($post_id, $params = array())
    {
        list($discussions) = fn_get_discussions(array('post_id' => $post_id));
        if (!$discussions) {
            return false;
        }

        $discussion = reset($discussions);

        if (
            !empty($params['object_type']) && $params['object_type'] != $discussion['object_type']
            || !empty($params['object_id']) && $params['object_id'] != $discussion['object_id']
        ) {
            return false;
        }

        return $discussion;
    }

}
