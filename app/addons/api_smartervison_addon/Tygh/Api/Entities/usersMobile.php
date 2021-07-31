<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

class UsersMobile extends AEntity
{
    public function index($id = '', $params = array())
    {
            $id_driver_str = '';
        
            $user_type = db_get_row('SELECT ?:users.user_type,?:users.company_id FROM ?:users WHERE ?:users.user_id =' . $params['user_id']);

            $url_image = 'http://10.0.3.2/cscshop/var/custom_files/profile_fields/U/';
            $fields = [
                'id'    => '?:users.user_id as id',
                'user_login' => '?:users.user_login',
                'is_root'    => '?:users.is_root',
                'timestamp'  => '?:users.timestamp',
                'user_type'  => '?:users.user_type',
                'status'     => '?:users.status',
                'firstname'  => '?:users.firstname',
                'lastname'   => '?:users.lastname',
                'email'      => '?:users.email',
                'company'    => '?:users.company',
                'company_id' => '?:users.company_id',
                'phone'      => '?:users.phone',
                'last_login' => '?:users.last_login',
                'address'    => '?:user_profiles.s_address',
                'b_firstname'=> '?:user_profiles.b_firstname',
                'b_lastname' => '?:user_profiles.b_lastname',
                'user_type' => '?:users.user_type',
                'company_id' => '?:users.company_id',
            ];

            $from = [
                '?:users',
                '?:user_profiles',
            ];

            $where = [
                '?:users.user_id = ?:user_profiles.user_id',
            ];

            if($params['search_type'] == 'user_id'){
                array_push($where,'?:users.user_id = '.$params["user_id"]);
            }
            else if($params['search_type'] == 'driver_market'){

                $id_driver = db_get_array("SELECT ?:users.user_id as id FROM ?:profile_fields_data,?:users,?:profile_fields WHERE ?:profile_fields_data.object_id = ?:users.user_id AND ?:profile_fields_data.object_type = 'U' AND ?:users.company_id = {$user_type['company_id']} AND ?:profile_fields.field_name = 'is_driver' AND ?:profile_fields.field_id = ?:profile_fields_data.field_id AND ?:profile_fields_data.value = 'Y'");
                for($i=0;$i<count($id_driver);$i++){
                    $id_driver_str = $id_driver_str . $id_driver[$i]['id'] . ',';
                }
                $id_driver_str = substr($id_driver_str, 0, -1);
                if(count($id_driver) == 1){
                    array_push($where,"?:users.user_id = $id_driver_str ");
                }
                else if(count($id_driver) > 1){
                    array_push($where,"?:users.user_id IN ($id_driver_str) ");
                }
                else{
                    array_push($where,"?:users.user_id = 0 ");
                }
            }

            $data = db_get_array('SELECT ' . implode(', ', $fields) . ' FROM ' . implode(',',$from) . ' WHERE ' . implode(' AND ', $where));
           
            for($i=0;$i<count($data);$i++){
                $image = db_get_array('SELECT' . ' ?:profile_fields_data.value FROM ?:profile_fields_data,?:profile_fields WHERE ?:profile_fields_data.object_id ='.$data[$i]["id"].' AND ?:profile_fields_data.field_id = ?:profile_fields.field_id AND ?:profile_fields.field_name = "p_avatar" ' );
                $bio = db_get_array('SELECT' . ' ?:profile_fields_data.value FROM ?:profile_fields_data,?:profile_fields WHERE ?:profile_fields_data.object_id ='.$data[$i]["id"].' AND ?:profile_fields_data.field_id = ?:profile_fields.field_id AND ?:profile_fields.field_name = "b_bio" ' );
                if($params['search_type'] == 'user_id'){
                    $data[$i]["api_token"] = $params["token"];
                }
                if(count($bio) >0){
                    $data[$i]["bio"] = implode($bio[0]) ;
                }
                else{
                    $data[$i]["bio"] = "";
                }
        
                $data[$i]["avatar"] = "https://i.imgur.com/4BmBmRt.png";
                $data[$i]["custom_fields"]["phone"]["view"] = $data[$i]["phone"];
                $data[$i]["custom_fields"]["bio"]["view"] = $data[$i]["bio"];
                $data[$i]["custom_fields"]["address"]["view"] = $data[$i]["s_address"];
            }

        list($token, $expiry_time) = fn_get_user_auth_token($params['user_id']);

        if($params['token'] == $token){

            if($params['app'] == 'owner'){
                if($user_type['user_type'] == "V" && $params['search_type'] == 'user_id'){
                    return array(
                        'status' => Response::STATUS_OK,
                        'data' => $data[0],
                    );

                }
                else if($user_type['user_type'] == "V" && $params['search_type'] == 'driver_market'){
                    return array(
                        'status' => Response::STATUS_OK,
                        'data' => [
                            'success'=>true,
                            'data' => $data,
                            'sql' => $id_driver_str,
                            "message"=> "Drivers retrieved successfully"
                        ],
                    );
                }
                else{
                    return array(
                        'status' => Response::STATUS_FORBIDDEN,
                        'data' => [],
                    );
                }
            }
            else if($params['app'] == 'driver'){
                $is_driver = db_get_row('SELECT' . ' ?:profile_fields_data.value FROM ?:profile_fields_data,?:profile_fields WHERE ?:profile_fields_data.object_id ='.$params['user_id'].' AND ?:profile_fields_data.field_id = ?:profile_fields.field_id AND ?:profile_fields.field_name = "is_driver" ' );
                if($is_driver !=null){
                    if($is_driver['value'] == 'Y'){
                        return array(
                            'status' => Response::STATUS_OK,
                            'data' => $data[0],
                        );
                    }
                    else{
                        return array(
                            'status' => Response::STATUS_FORBIDDEN,
                            'data' => [],
                        ); 
                    }
                }
                else{
                    return array(
                        'status' => Response::STATUS_FORBIDDEN,
                        'data' => [],
                    ); 
                }

            }
            else if($params['app'] == 'market'){
                return array(
                    'status' => Response::STATUS_OK,
                    'data' => $data[0],
                );
            }
            else{
                return array(
                    'status' => Response::STATUS_FORBIDDEN,
                    'data' => [],
                );
            }
        }
        else{
            return array(
                'status' => Response::STATUS_METHOD_NOT_ALLOWED,
                'data' => [],
            );
        }
    }

    public function create($params)
    {
        
        $status = Response::STATUS_BAD_REQUEST;
        $data = array();
        $valid_params = true;

        $auth = $this->auth;

        //$params = $this->filterUserData($params);

        $user_id = 0;
        $params["password"] = md5($params["password"]);

        if (empty($params['email'])) {
            $data['message'] = __('api_required_field', array(
                '[field]' => 'email'
            ));
            $valid_params = false;
        }

        $params['user_type'] = 'c';

        $params['company_id'] = 0;

        // if (empty($params['user_type'])) {
        //     $data['message'] = __('api_required_field', array(
        //         '[field]' => 'user_type'
        //     ));
        //     $valid_params = false;
        // }

        // if (!isset($params['company_id'])) {
        //     $data['message'] = __('api_required_field', array(
        //         '[field]' => 'company_id'
        //     ));
        //     $valid_params = false;
        // }

        if (!isset($params['company_id'])) {
            $data['message'] = __('api_required_field', array(
                '[field]' => 'password'
            ));
            $valid_params = false;
        }



        if ($valid_params) {
            list($user_id, $profile_id) = fn_update_user($user_id, $params, $auth, false, false);

            if ($user_id) {
                $status = Response::STATUS_CREATED;
                $data = array(
                    'success' => 'true',
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
        list($token, $expiry_time) = fn_get_user_auth_token($id);

        if($params['token'] == $token){
            $data = array();
            $result = 'update failed';
            $status = Response::STATUS_BAD_REQUEST;

            if(count($params) == 7){
                db_query('UPDATE ?:users SET 
                lastname = "' .$params['lastname']. '",
                firstname = "' .$params['firstname']. '",
                email = "' .$params['email']. '",
                phone = "' .$params['phone']. '" 
                WHERE ?:users.user_id ='. $id);
                db_query('UPDATE ?:user_profiles SET s_address = "' .$params['address']. '" WHERE ?:user_profiles.user_id ='. $id);
                db_query('UPDATE ?:profile_fields_data SET value = "' .$params['description']. '" WHERE ?:profile_fields_data.object_id ='. $id.' AND ?:profile_fields_data.field_id = 52');
                $status = Response::STATUS_OK;
                $result = 'update successful';
            }

            return array(
                'status' => $status,
                'data' => array(
                    'result' => $result
                ),
            );
        }
        else{
            return array(
                'status' => Response::STATUS_METHOD_NOT_ALLOWED,
                'data' => [],
            );
        }

    }

    public function delete($id)
    {
        return array(
            'status' => Response::STATUS_NO_CONTENT,
        );
    }

    public function privileges()
    {
        return array(
            'index'  => true,
            'create' => true,
            'update' => true,
            'delete' => false,
        );
    }

    public function privilegesCustomer()
    {
        return array(
            'index'  => true,
            'create' => true,
            'update' => true,
            'delete' => false,
        );
    }
}
?>