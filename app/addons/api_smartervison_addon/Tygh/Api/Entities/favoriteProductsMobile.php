<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

class FavoriteProductsMobile extends AEntity
{
    public function index($id = '', $params = array())
    {   

        list($token, $expiry_time) = fn_get_user_auth_token($params['user_id']);

        if($params['token'] == $token){
            $data = [];
        
            if(isset($params['user_id'])){

                $fields_favorite_product = [
                    "id" => "?:user_session_products.item_id as id",
                    "product_id" => "?:user_session_products.product_id as product_id",
                    "user_id" => "?:user_session_products.user_id as user_id",
                ];
        
                $from_favorite_product = [
                    "?:user_session_products"
                ];
        
                $where_favorite_product = [
                    "?:user_session_products.user_id = " . $params["user_id"],
                    "?:user_session_products.type= 'W'",
                ];

                if(isset($params['filter']) == 'is_favorite'){
                    $product_id = $params['product_id'];
                    array_push($where_favorite_product,"?:user_session_products.product_id = $product_id");
                }
        
                $data_favorite_product = db_get_array('SELECT ' . implode(', ', $fields_favorite_product) . ' FROM ' . implode(',',$from_favorite_product) . ' Where ' . implode(' AND ', $where_favorite_product));

                for($i=0;$i<count($data_favorite_product);$i++){

                    $data_favorite_product[$i]["id"] = 1;

                    $data_favorite_product[$i]["product_id"] = (int)$data_favorite_product[$i]["product_id"];

                    $data_favorite_product[$i]["user_id"] = (int)$data_favorite_product[$i]["user_id"];

                    $data_favorite_product[$i]["custom_fields"] = array();

                    $data_favorite_product[$i]["options"] = array();

                    $product_id = $data_favorite_product[$i]["product_id"];

                    $data_favorite_product[$i]["product"] = $this->getProduct($product_id);

                }
                
            }
        
            if(isset($params['filter']) == 'is_favorite'){

                if(count($data_favorite_product) >0){
                    $data=[
                        "id"=> $data_favorite_product[0]['id'],
                        "product_id"=> $data_favorite_product[0]['product_id'],
                        "user_id"=> $data_favorite_product[0]['user_id'],
                        "custom_fields"=> [],
                        "options"=> [],
                    ];
                }
                else{
                    $data = null;
                }

                return array(
                    'status' => Response::STATUS_OK,
                    'data' =>  array(
                        'success' => true,
                        'data' => $data,
                        'message'=> 'Favorites retrieved successfully',
                    ),
                );
            }
            else{
                return array(
                    'status' => Response::STATUS_OK,
                    'data' =>  array(
                        'success' => true,
                        'data' => $data_favorite_product,
                        'message'=> 'Favorites retrieved successfully',
                    ),
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
        $pageURL = "";

        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];

        $parts = parse_url($pageURL);

        parse_str($parts['query'], $query);

        $product_id = (int)$query['product_id'];

        $param_token = (String)$query['token'];

        list($token, $expiry_time) = fn_get_user_auth_token($id);

        if($param_token == $token){

            db_query('DELETE FROM ?:user_session_products WHERE ?:user_session_products.product_id ='.$product_id.' AND ?:user_session_products.user_id ='. $id .' AND ?:user_session_products.type = "W"');
            
            return array(
                'status' => Response::STATUS_CREATED,
                'data' => [
                    "success" => true,
                    "data" => [
                        "id"=> 111000,
                        "product_id"=> $product_id,
                        "user_id"=> $id,
                        "created_at"=> "2021-05-19 03:09:36",
                        "updated_at"=> "2021-05-19 03:09:36",
                        "custom_fields"=> [],
                        "options"=> [],
                    ],
                    "message" => "Deleted successfully",
                ]
            );
        }
        else{

            return array(
                'status' => Response::STATUS_METHOD_NOT_ALLOWED,
                'data' => [],
            );

        }

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

    public function privileges()
    {
        return array(
            'index'  => true,
            'create' => true,
            'update' => true,
            'delete' => true,
        );
    }

    public function getProduct($id){

        $data_product = [];

        $product_id = $id;
        
        $product_image = fn_get_image_pairs($product_id, 'product', 'M',true,true, 'en');

        $product_link_image = $product_image["detailed"]["http_image_path"];


        $fields_product = [
            "id" => "?:products.product_id as id",
            "name" => "?:product_descriptions.product as name",
            "price" => "?:products.list_price as price",
            "discount_price" => "?:product_prices.price as discount_price",
            "description" => "?:product_descriptions.full_description as description",
            "market_id" => "?:products.company_id as market_id",
            "category_id" => "?:products_categories.category_id as category_id",
        ];

        $from_product = [
            '?:products',
            '?:product_descriptions',
            '?:product_prices',
            '?:products_categories',
        ];
        $where_product = [
            '?:products.product_id = ' . $product_id,
            '?:products.product_id = ?:product_descriptions.product_id',
            '?:products.product_id = ?:product_prices.product_id',
            '?:products.product_id = ?:products_categories.product_id'
        ];

        $data_product = db_get_array('SELECT ' . implode(', ', $fields_product) . ' FROM ' . implode(',',$from_product) . ' Where ' . implode(' AND ', $where_product));

        $fields_vendor = [
            "id" => "?:companies.company_id as id",
            "name" => "?:companies.company as name",
            "description" => "?:company_descriptions.company_description as description",
        ];

        $from_vendor = [
            '?:companies',
            '?:company_descriptions',
            '?:products'
        ];
        $where_vendor = [
            '?:companies.company_id = ?:company_descriptions.company_id',
            '?:products.company_id = ?:companies.company_id',
            '?:products.product_id = ' . $product_id,
        ];

        $data_vendor = db_get_array('SELECT ' . implode(', ', $fields_vendor) . ' FROM ' . implode(',',$from_vendor) . ' Where ' . implode(' AND ', $where_vendor));

        return  $data_product = [
            "id"=> (int)$data_product[0]['id'],
            "name"=> $data_product[0]['name'],
            "price"=> (float)$data_product[0]['price'],
            "discount_price"=> (float)$data_product[0]['discount_price'],
            "description"=> $data_product[0]['description'],
            "capacity"=> 76.75,
            "package_items_count"=> 1,
            "unit"=> "m",
            "featured"=> false,
            "deliverable"=> false,
            "market_id"=> (int)$data_product[0]['market_id'],
            "category_id"=> (int)$data_product[0]['category_id'],
            "custom_fields"=> [],
            "has_media"=> true,
            "market"=> [
                "id"=> (int)$data_vendor[0]['id'],
                "name"=> $data_vendor[0]['name'],
                "description"=> $data_vendor[0]['description'],
            ],
            'media' => [
                0=> [
                        "id"=> 159,
                        "model_type"=> "App\Models\Product",
                        "model_id"=> 1,
                        "collection_name"=> "image",
                        "name"=> "products (27)",
                        "file_name"=> "products-(27).jpg",
                        "mime_type"=> "image/jpeg",
                        "disk"=> "public",
                        "size"=> 160146,
                        "manipulations"=> [],
                        "custom_properties"=> [
                            "uuid"=> "e4c6da64-de84-4ad2-9815-dd5e8d0d868b",
                            "generated_conversions"=> [
                                "thumb"=> true,
                                "icon"=> true
                                ]    
                            ],
                        "responsive_images"=> [],
                        "order_column"=> 157,
                        "created_at"=> "2020-04-15 14:24:18",
                        "updated_at"=> "2020-04-15 14:24:18",
                        "url"=> $product_link_image,
                        "thumb"=> $product_link_image,
                        "icon"=> $product_link_image,
                        "formated_size"=> "116.9 KB"
                    ]
            ]
            
        ];
    }
}
?>