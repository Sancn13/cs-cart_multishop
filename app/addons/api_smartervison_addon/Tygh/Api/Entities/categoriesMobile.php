<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

class CategoriesMobile extends AEntity
{
    public function index($id = '', $params = array())
    {   
        
        $fields = [
            'id' => '?:categories.category_id as id',
            'name' => '?:category_descriptions.category as name',
        ];
        $from = [
            '?:categories',
            '?:category_descriptions',
            '?:products_categories',
        ];
        $where = [
            '?:categories.category_id = ?:products_categories.category_id',
            '?:categories.category_id = ?:category_descriptions.category_id',
        ];

        if(isset($params['company_id'])){
            array_push($from,'?:products');
            array_push($where,'?:products.product_id = ?:products_categories.product_id');
            array_push($where,'?:products.company_id = '.$params['company_id']);
        }


        $data = db_get_array('SELECT ' . implode(', ', $fields) . ' FROM ' . implode(',',$from) . ' Where ' . implode(' AND ', $where) . " Group by ?:categories.category_id");

        for($i = 0; $i< count($data);$i++){
            $category_image_M = fn_get_image_pairs($data[$i]["id"], 'category', 'M',true,true, 'en');
            if(count($category_image_M) >0){
                $image = $category_image_M["detailed"]["http_image_path"];
            }
            else{
                $image = null;
            }
            $data[$i]['description'] = "";
            $data[$i]['created_at'] = "2021-04-02 02:25:42";
            $data[$i]['updated_at'] = "2021-04-02 02:25:42";
            $data[$i]['custom_fields'] = [];
            $data[$i]['has_media'] = false;
            if($image != null ){
                $data[$i]['media'] = [
                    0=>[
                        "id"=> $i,
                        "model_type"=> "App\Models\Category",
                        "model_id"=> 1,
                        "collection_name"=> "image",
                        "name"=> "drug",
                        "file_name"=> "drug.svg",
                        "mime_type"=> "image/svg+xml",
                        "disk"=> "public",
                        "size"=> 3396,
                        "manipulations"=> [],
                        "custom_properties" =>[
                            "uuid"=> "16b9d934-339a-4fc4-9c57-2a34a91e1baa"
                        ],
                        "responsive_images"=> [],
                        "order_column"=> 68,
                        "created_at"=> "2020-04-15 14:20:31",
                        "updated_at"=> "2020-04-15 14:20:31",
                        "url"=> $image,
                        "thumb"=> $image,
                        "icon"=> $image,
                        "formated_size"=> "3.3 KB"
                    ]
                ];
            }
            else{
                $data[$i]['media'] = [];
            }
        }

        return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'data' => $data,
                'category_image' => $category_image_M,
                'message'=> 'Categories retrieved successfully',
            ),
        );   

        
    }

    public function create($params)
    {
        return array(
            'status' => Response::STATUS_CREATED,
            'data' => array()
        );
    }

    public function update($id, $params)
    {
        return array(
            'status' => Response::STATUS_OK,
            'data' => array()
        );
    }

    public function delete($id)
    {
        return array(
            'status' => Response::STATUS_NO_CONTENT,
        );
    }

    public function privilegesCustomer()
    {
        return array(
            'index'  => true,
            'create' => true,
            'update' => false,
            'delete' => false,
        );
    }

    public function privileges()
    {
        return array(
            'index'  => true,
            'create' => true,
            'update' => false,
            'delete' => false,
        );
    }
}
?>