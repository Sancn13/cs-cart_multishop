<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

class SearchMobile extends AEntity
{
    public function index($id = '', $params = array())
    {   
        $data = [];

        if(isset($params['product'])){

            if($params['product']!= null){

                db_query('ALTER TABLE ?:product_descriptions ADD FULLTEXT(product);');

                $fields_product_id = [
                    "product_id" => "?:product_descriptions.product_id"
                ];
    
                $product_id_arr = db_get_array('SELECT '. implode(', ', $fields_product_id) .' FROM ?:product_descriptions Where MATCH(?:product_descriptions.product) 
                AGAINST("'. $params['product'] . '" IN NATURAL LANGUAGE MODE) ORDER BY ?:product_descriptions.product_id');
    
                for($i=0;$i<count($product_id_arr);$i++){
                    $data[$i] = $this->getProduct($product_id_arr[$i]["product_id"]);
                }
                
                db_query('ALTER TABLE ?:product_descriptions DROP INDEX product');
            }
            else{

                $fields_product_rand = [
                    "id" => "?:products.product_id as id",
                    "name" => "?:product_descriptions.product as name",
                    "price" => "?:products.list_price as price",
                    "discount_price" => "?:product_prices.price as discount_price",
                    "description" => "?:product_descriptions.full_description as description",
                    "market_id" => "?:products.company_id as market_id",
                    "category_id" => "?:products_categories.category_id as category_id",
                ];
        
                $from_product_rand = [
                    '?:products',
                    '?:product_descriptions',
                    '?:product_prices',
                    '?:products_categories',
                ];
        
                $where_product_rand = [
                    '?:products.product_id = ?:product_descriptions.product_id',
                    '?:products.product_id = ?:product_prices.product_id',
                    '?:products.product_id = ?:products_categories.product_id',
                ];
        
                $other_rand = [
                    'ORDER BY RAND() LIMIT 5;'
                ];
    
                $data_product_rand = db_get_array('SELECT ' . implode(', ', $fields_product_rand) . ' FROM ' . implode(',',$from_product_rand) . ' Where ' . implode(' AND ', $where_product_rand). ' ' . implode(' AND ', $other_rand));
    
                for($i=0;$i<count($data_product_rand);$i++){
                    $product_image = fn_get_image_pairs((int)$data_product_rand[$i]["id"], 'product', 'M',true,true, 'en');

                    $product_link_image = $product_image["detailed"]["http_image_path"];


                    $data_product_rand[$i]["id"] = (int)$data_product_rand[$i]["id"];
                    $data_product_rand[$i]["price"] = (int)$data_product_rand[$i]["price"];
                    $data_product_rand[$i]["discount_price"] = (int)$data_product_rand[$i]["discount_price"];
                    $data_product_rand[$i]["featured"] = true;
                    $data_product_rand[$i]["package_items_count"] = 2;
                    $data_product_rand[$i]["unit"] = "m";
                    $data_product_rand[$i]["deliverable"] = true;
                    $data_product_rand[$i]["has_media"] = true;
                    $data_product_rand[$i]["media"] = [
                        0=> [
                                "id"=> 84,
                                "model_type"=> "App\Models\Product",
                                "model_id"=> 33,
                                "collection_name"=> "image",
                                "name"=> "products (27)",
                                "file_name"=> "products-(27).jpg",
                                "mime_type"=> "image/jpeg",
                                "disk"=> "public",
                                "size"=> 122497,
                                "manipulations"=> [],
                                "custom_properties"=> [
                                    "uuid"=> "e4c6da64-de84-4ad2-9815-dd5e8d0d868b",
                                    "generated_conversions"=> [
                                        "thumb"=> true,
                                        "icon"=> true
                                        ]    
                                    ],
                                "responsive_images"=> [],
                                "order_column"=> 84,
                                "created_at"=> "2020-04-15 14:24:18",
                                "updated_at"=> "2020-04-15 14:24:18",
                                "url"=> $product_link_image,
                                "thumb"=> $product_link_image,
                                "icon"=> $product_link_image,
                                "formated_size"=> "119.6 KB"
                            ]
                    ];
                }
    
                $data = $data_product_rand;
            }
        }
        else if(isset($params['market'])){

            if($params['market'] != null){

                //db_query('ALTER TABLE ?:companies ADD FULLTEXT(company);');

                $fields_market_id = [
                    "company_id" => "?:companies.company_id"
                ];
    
                $data_market_id_arr = db_get_array('SELECT '. implode(', ', $fields_market_id) .' FROM ?:companies Where company like "%'.$params["market"].'%" ORDER BY RAND() LIMIT 5;');

                //db_query('ALTER TABLE ?:companies DROP INDEX company');

                for($i=0;$i<count($data_market_id_arr);$i++){
                    $data[$i] = $this->getMarket($data_market_id_arr[$i]['company_id']);
                }

            }
            else{
                $fields_market_id = [
                    "company_id" => "?:companies.company_id"
                ];
    
                $data_market_id_arr = db_get_array('SELECT '. implode(', ', $fields_market_id) .' FROM ?:companies ORDER BY ?:companies.company ');

                //db_query('ALTER TABLE ?:companies DROP INDEX company');

                for($i=0;$i<count($data_market_id_arr);$i++){
                    $data[$i] = $this->getMarket($data_market_id_arr[$i]['company_id']);
                }
            }
        }
 
          return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'data' => $data,
                'message'=> 'Products retrieved successfully',
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

        if($product_id >0){
            $where_product = [
                '?:products.product_id = ' . $product_id,
                '?:products.product_id = ?:product_descriptions.product_id',
                '?:products.product_id = ?:product_prices.product_id',
                '?:products.product_id = ?:products_categories.product_id'
            ];

            $other_rand = [];
        }
        else{
            $where_product = [
                '?:products.product_id = ?:product_descriptions.product_id',
                '?:products.product_id = ?:product_prices.product_id',
                '?:products.product_id = ?:products_categories.product_id'
            ];

            $other_rand = [
                'ORDER BY RAND() LIMIT 5;'
            ];

        }

        $data_product = db_get_array('SELECT ' . implode(', ', $fields_product) . ' FROM ' . implode(',',$from_product) . ' Where ' . implode(' AND ', $where_product). ' ' . implode(' AND ', $other_rand));

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

    public function getMarket($id){
        $data = [];

        $fields_market = [
            'name' => '?:companies.company as name',
            'description' => '?:company_descriptions.company_description as description'
        ];

        $from_market = [
            '?:companies',
            '?:company_descriptions'
        ];

        $where_market = [
            '?:companies.company_id = ' . $id,
            '?:companies.status = "A"' 
        ];

        $data_market = db_get_array('SELECT ' . implode(', ', $fields_market) . ' FROM ' . implode(',',$from_market) . ' Where ' . implode(' AND ', $where_market));

        $fields_image = [
            "image"=>"?:images.image_path as image"
        ];

        $from_inage = [
            '?:logos',
            '?:images_links',
            '?:images',
        ];

        $where_image = [
            '?:logos.company_id = '.$id,
            '?:logos.logo_id = ?:images_links.object_id',
            '?:images.image_id = ?:images_links.image_id',
            '?:images_links.object_type = "logos"',
            '?:logos.type = "theme"',
        ];

        $data_image = db_get_array('SELECT ' . implode(', ', $fields_image) . ' FROM ' . implode(',',$from_inage) . ' Where ' . implode(' AND ', $where_image));
        
        $data = [
             "id"=> $id,
             "name"=> $data_market[0]['name'],
             "description"=> $data_market[0]['description'],
             //"address"=> "392 Giovanny PineGorczanybury, CO 13600-6178",
             // "latitude"=> "52.51840",
             // "longitude"=> "13.40767",
             // "phone"=> "674-873-6439 x071",
             // "mobile"=> "+1 (705) 564-1321",
             //"information"=> "Eos nam est rerum magnam sunt. Animi id fuga architecto praesentium unde corporis. Magnam sit accusamus quis rerum soluta.",
             // "admin_commission"=> 45.72,
             // "delivery_fee"=> 3.85,
             // "delivery_range"=> 95.02,
             // "default_tax"=> 7.08,
             // "closed"=> false,
             // "available_for_delivery"=> true,
             // "created_at"=> "2020-04-12 16:50:58",
             // "updated_at"=> "2020-04-15 17:06:19",
             // "active"=> true,
             // "custom_fields"=> [],
             "has_media"=> true,
             "rate"=> "3.0",
             "media" => [
                0=> [
                        "id"=> 2,
                        "model_type"=> "App\Models\Market",
                        "model_id"=> 1,
                        "collection_name"=> "image",
                        "name"=> "markets (14)",
                        "file_name"=> "markets-(14).jpg",
                        "mime_type"=> "image/jpeg",
                        "disk"=> "public",
                        "size"=> 95339,
                        "manipulations"=> [],
                        "custom_properties"=> [
                            "uuid"=> "1e3b7bb7-fd30-4269-adcc-83d83b15d93f",
                            "generated_conversions"=> [
                                "thumb"=> true,
                                "icon"=> true
                                ]    
                            ],
                        "responsive_images"=> [],
                        "order_column"=> 2,
                        // "created_at"=> "2020-04-15 14:24:18",
                        // "updated_at"=> "2020-04-15 14:24:18",
                        "url"=> 'http://192.168.56.1/cscmultiShop/images/logos/1/' . $data_image[0]["image"],
                        "thumb"=> 'http://192.168.56.1/cscmultiShop/images/logos/1/' . $data_image[0]["image"],
                        "icon"=> 'http://192.168.56.1/cscmultiShop/images/logos/1/' . $data_image[0]["image"],
                        "formated_size"=> "93.1 KB"
                    ]
                ]
         ];

        return $data;

    }
}
?>