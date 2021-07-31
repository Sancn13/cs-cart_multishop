<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;
use Tygh\Api\Entities\CartsMobile;

class ProductsMobile extends AEntity
{
    public function index($id = '', $params = array())
    {   
        $data = [];

        $tax = (new CartsMobile) -> calculateTax();
        
        if(isset($params['product_id'])){

            $product_id = $params['product_id'];

            $fields_comment = [
                "id" => '?:discussion_posts.post_id as id',
                "review" => '?:discussion_messages.message as review',
                "rate" => '?:discussion_rating.rating_value as rate',
                "user_id" => '?:discussion_posts.user_id as user_id',
                "product_id" => '?:discussion.object_id as product_id',
            ];
    
            $from_comment = [
                '?:discussion',
                '?:discussion_messages',
                '?:discussion_rating',
                '?:discussion_posts',
            ];
            $where_comment = [
                '?:discussion.thread_id = ?:discussion_messages.thread_id',
                '?:discussion.thread_id = ?:discussion_rating.thread_id',
                '?:discussion.thread_id = ?:discussion_posts.thread_id',
                '?:discussion_posts.post_id = ?:discussion_messages.post_id',
                '?:discussion_posts.post_id = ?:discussion_rating.post_id',
                '?:discussion.object_id = ' . $product_id,
                '?:discussion.object_type = "P"',
    
            ];
    
            $data_comment = db_get_array('SELECT ' . implode(', ', $fields_comment) . ' FROM ' . implode(',',$from_comment) . ' Where ' . implode(' AND ', $where_comment));
    
            for($i=0;$i<count($data_comment);$i++){
                $data_comment[$i]['has_media'] = false;
                $data_comment[$i]['user'] = [
                    "id"=> 4,
                    "name"=> "Robert E. Brock",
                    "email"=> "client1@demo.com",
                    "custom_fields" => array(),
                    "has_media"=> false,
                    "media"=> [],
                ];
            }
    
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
                "latitude" => "?:vendor_locations.lat as latitude",
                "longitude" => "?:vendor_locations.lng as longitude",
            ];
    
            $from_vendor = [
                '?:companies',
                '?:company_descriptions',
                '?:products',
                '?:vendor_locations'
            ];
            $where_vendor = [
                '?:companies.company_id = ?:company_descriptions.company_id',
                '?:products.company_id = ?:companies.company_id',
                '?:products.product_id = ' . $product_id,
                '?:companies.company_id = ?:vendor_locations.company_id',
            ];
    
            $data_vendor = db_get_array('SELECT ' . implode(', ', $fields_vendor) . ' FROM ' . implode(',',$from_vendor) . ' Where ' . implode(' AND ', $where_vendor));
    
            $fields_vendor = [
                "id" => "?:companies.company_id as id",
                "name" => "?:companies.company as name",
                "description" => "?:company_descriptions.company_description as description",
                "latitude" => "?:vendor_locations.lat as latitude",
                "longitude" => "?:vendor_locations.lng as longitude",
            ];
    
            $from_vendor = [
                '?:companies',
                '?:company_descriptions',
                '?:products',
                '?:vendor_locations'
            ];
            $where_vendor = [
                '?:companies.company_id = ?:company_descriptions.company_id',
                '?:products.company_id = ?:companies.company_id',
                '?:products.product_id = ' . $product_id,
                '?:companies.company_id = ?:vendor_locations.company_id',
            ];
    
            $data_vendor = db_get_array('SELECT ' . implode(', ', $fields_vendor) . ' FROM ' . implode(',',$from_vendor) . ' Where ' . implode(' AND ', $where_vendor));
    
            $fields_category = [
                'id' => '?:products_categories.category_id as id',
                 'name' => '?:category_descriptions.category as name',
             ];
     
            $from_category = [
                '?:products_categories',
                '?:category_descriptions',
            ];
            $where_category = [
                '?:products_categories.product_id = ' . $product_id,
                '?:products_categories.category_id = ?:category_descriptions.category_id'
            ];
    
            $data_category = db_get_array('SELECT ' . implode(', ', $fields_category) . ' FROM ' . implode(',',$from_category) . ' Where ' . implode(' AND ', $where_category));

            $fields_option = [
               'id' => '?:product_option_variants.variant_id as id',
               'name' => '?:product_option_variants_descriptions.variant_name as name',
               'description' => '?:product_options_descriptions.option_name as description',
               'product_id' => '?:product_global_option_links.product_id as product_id',
               'option_group_id' => '?:product_options.option_id as option_group_id',
            ];
    
            $from_option = [
                '?:product_global_option_links',
                '?:product_options',
                '?:product_options_descriptions',
                '?:product_option_variants',
                '?:product_option_variants_descriptions',
            ];
            $where_option = [
                '?:product_global_option_links.product_id = ' . $product_id,
                '?:product_global_option_links.option_id = ?:product_options.option_id',
                '?:product_options.option_id = ?:product_options_descriptions.option_id',
                '?:product_options.option_id = ?:product_option_variants.option_id',
                '?:product_option_variants.variant_id = ?:product_option_variants_descriptions.variant_id',
            ];
    
            $data_option = db_get_array('SELECT ' . implode(', ', $fields_option) . ' FROM ' . implode(',',$from_option) . ' Where ' . implode(' AND ', $where_option));
             
    
            for($i=0;$i<count($data_option);$i++){
                $data_option[$i]['price'] = (float)$data_product[0]['discount_price'];
                $data_option[$i]['custom_fields'] = [];
                $data_option[$i]['has_media'] = false;
                $data_option[$i]['media'] = [];
                $data_option[$i]['checked'] = false;
            }
    
            $fields_option_group = [
                'id' => '?:product_options.option_id as id',
                'name' => '?:product_options_descriptions.option_name as name',
             ];
     
             $from_option_group = [
                 '?:product_global_option_links',
                 '?:product_options',
                 '?:product_options_descriptions',
             ];
             $where_option_group = [
                 '?:product_global_option_links.product_id = ' . $product_id,
                 '?:product_global_option_links.option_id = ?:product_options.option_id',
                 '?:product_options.option_id = ?:product_options_descriptions.option_id',
             ];
     
             $data_option_group = db_get_array('SELECT ' . implode(', ', $fields_option_group) . ' FROM ' . implode(',',$from_option_group) . ' Where ' . implode(' AND ', $where_option_group));
            
            for($i=0;$i<count($data_option_group);$i++){
                $data_option_group[$i]['pivot'] = [
                    "product_id" => $params['product_id'],
                    "option_group_id" => (int)$data_option_group[$i]['id'],
                ];
            }

            if($product_id){

                $image = [];

                $product_image_M = fn_get_image_pairs($product_id, 'product', 'M',true,true, 'en');
    
                $product_image_A = array_values(fn_get_image_pairs($product_id, 'product','A',true,true, 'en'));
    
                $product_link_image = $product_image_M["detailed"]["http_image_path"];
    
                array_push($image,$product_image_M["detailed"]["http_image_path"]);
    
                
    
                for($i=0;$i<count($product_image_A);$i++){
                    array_push($image,$product_image_A[$i]["detailed"]["http_image_path"]);
                }
    
                $media = [];
                
                for($i=0;$i<count($image);$i++){
                    $media[$i]["id"] = $i;
                    $media[$i]["model_type"] = "App\Models\Product";
                    $media[$i]["model_id"] = 33;
                    $media[$i]["collection_name"] = "image";
                    $media[$i]["name"] = $data_product[0]['name'];
                    $media[$i]["file_name"] = "products-" . $data_product[0]['name'] .".jpg";
                    $media[$i]["mime_type"] = "image/jpeg";
                    $media[$i]["disk"] = "public";
                    $media[$i]["size"] = 122497;
                    $media[$i]["manipulations"] = [];
                    $media[$i]["custom_properties"] = [
                        "uuid"=> "e4c6da64-de84-4ad2-9815-dd5e8d0d868b",
                        "generated_conversions"=> [
                            "thumb"=> true,
                            "icon"=> true
                        ]    
                    ];
                    $media[$i]["responsive_images"] = [];
                    $media[$i]["order_column"] = 84;
                    $media[$i]["url"] = $image[$i];
                    $media[$i]["thumb"] = $image[$i];
                    $media[$i]["icon"] = $image[$i];
                    $media[$i]["formated_size"] = "119.6 KB";
    
                }

                $data = [
                    "id"=> $data_product[0]['id'],
                    "name"=> $data_product[0]['name'],
                    "price"=> (float)$data_product[0]['price'],
                    "discount_price"=> (float)$data_product[0]['discount_price'],
                    "description"=> $data_product[0]['description'],
                    //"capacity"=> 76.75,
                    "package_items_count"=> 1,
                    //"unit"=> "m",
                    "featured"=> true,
                    "deliverable"=> true,
                    "market_id"=> (int)$data_product[0]['market_id'],
                    "category_id"=> (int)$data_product[0]['category_id'],
                    "custom_fields"=> [],
                    "has_media"=> true,
                    "market"=> [
                        "id"=> (int)$data_vendor[0]['id'],
                        "name"=> $data_vendor[0]['name'],
                        "description"=> $data_vendor[0]['description'],
                        "delivery_range" => 15,
                        "available_for_delivery" => true,
                        "latitude" => (double)$data_vendor[0]['latitude'],
                        "longitude" => (double)$data_vendor[0]['longitude'],
                        //"delivery_fee"=> 2.15,
                        "default_tax"=> $tax ,
                        "closed"=> false,
                        "active"=> true,
                    ],
                    "category"=> [
                        "id"=> $data_category[0]['id'],
                        "name"=> $data_category[0]['name'],
                        "description"=> "",
                    ],
                    "options"=> $data_option,
                    'option_groups' => $data_option_group,
                    "product_reviews"=> $data_comment,
                    'media' => $media
                ];
                   
            }
        }
        else if(isset($params['order_by'])){
                $marketId = $params['marketId'];
                $fields_product_rand = [
                    "id" => "?:products.product_id as id",
                    "name" => "?:product_descriptions.product as name",
                    "price" => "?:products.list_price as price",
                    "discount_price" => "?:product_prices.price as discount_price",
                    "description" => "?:product_descriptions.full_description as description",
                    "market_id" => "?:products.company_id as market_id",
                    "category_id" => "?:products_categories.category_id as category_id",
                    "timestamp" => "?:products.timestamp",
                    "updated_timestamp" => "?:products.updated_timestamp",
                    "name_company" => "?:companies.company as name_company",
                    "latitude" => "?:vendor_locations.lat as latitude", 
                    "longitude" => "?:vendor_locations.lng as longitude", 
                ];
        
                $from_product_rand = [
                    '?:products',
                    '?:product_descriptions',
                    '?:product_prices',
                    '?:products_categories',
                    '?:companies',
                    '?:vendor_locations',
                ];
        
                $where_product_rand = [
                    '?:products.product_id = ?:product_descriptions.product_id',
                    '?:products.product_id = ?:product_prices.product_id',
                    '?:products.product_id = ?:products_categories.product_id',
                    '?:products.company_id = ?:companies.company_id',
                    '?:companies.company_id = ?:vendor_locations.company_id',
                    '?:products.company_id = '.$marketId
                ];

                $order_by = [];

                if($params['order_by'] == 'random'){
                    array_push($order_by,'ORDER BY RAND() LIMIT 5;');
                }
                else if($params['order_by'] == 'new'){
                    array_push($order_by,'ORDER BY ?:product_prices.price DESC LIMIT 5;');
                }
                else if($params['order_by'] == 'all'){
                    array_push($order_by,'ORDER BY RAND()');
                }
    
                $data_product_rand = db_get_array('SELECT ' . implode(', ', $fields_product_rand) . ' FROM ' . implode(',',$from_product_rand) . ' Where ' . implode(' AND ', $where_product_rand). ' ' . implode(' AND ', $order_by));
    
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
                                "created_at"=> date('Y-m-d H:i:s', (int)$data_product_rand[$i]["timestamp"]),
                                "updated_at" => date('Y-m-d H:i:s', (int)$data_product_rand[$i]["updated_timestamp"]),
                                "url"=> $product_link_image,
                                "thumb"=> $product_link_image,
                                "icon"=> $product_link_image,
                                "formated_size"=> "119.6 KB"
                            ]
                    ];
                    $data_product_rand[$i]["market"] = [
                        "id"=> $marketId,
                        "name"=>  $data_product_rand[$i]["name_company"],
                        "delivery_range" => 99999,
                        "available_for_delivery" => true,
                        "latitude" => (double)$data_product_rand[$i]["latitude"],
                        "longitude" => (double)$data_product_rand[$i]["longitude"],
                        //"delivery_fee"=> 2.15,
                        "default_tax"=> $tax,
                        "closed"=> false,
                        "active"=> true,
                    ];
                }
    
                $data = $data_product_rand;
                // $data = [
                //     0=>[
                //         "id"=> 6,
                //         "name"=> "Steak",
                //         "price"=> 39.52,
                //         "discount_price"=> 35.39,
                //         "description"=> "Commodi qui laboriosam dolor recusandae maiores vitae est. Commodi odio et accusamus enim unde.",
                //         "capacity"=> 76.75,
                //         "package_items_count"=> 2,
                //         "unit"=> "m",
                //         "featured"=> true,
                //         "deliverable"=> true,
                //         "market_id"=> 1,
                //         "category_id"=> 1,
                //         "created_at"=> "2021-04-02 02:25:42",
                //         "updated_at"=> "2021-04-02 02:25:42",
                //         "custom_fields"=> [],
                //         "has_media"=> false,
                //         "market"=> [
                //             "id"=> 1,
                //             "name"=> "Mall Maggio, Bosco and Stroman",
                //             "delivery_fee"=> 5.84,
                //             "address"=> "9114 Rigoberto Ranch Suite 761 North Brenden, CT 65365",
                //             "phone"=> "+1-276-725-1910",
                //             "default_tax"=> 23.38,
                //             "custom_fields"=> [],
                //             "has_media"=> false,
                //             "rate"=> "2.0",
                //             "media"=> [],
                //         ],
                //     ]
                // ];

        }
        else if(isset($params['categoryId'])){

            $category_id = $params['categoryId'];

            if($category_id){

                $compare = "";

                if(isset($params['listCate']) == 'yes' ){
                    $compare = "in";
                }
                else{
                    $compare = "=";
                }

                $fields_product_category = [
                    "id" => "?:products.product_id as id",
                    "name" => "?:product_descriptions.product as name",
                    "price" => "?:products.list_price as price",
                    "discount_price" => "?:product_prices.price as discount_price",
                    "description" => "?:product_descriptions.full_description as description",
                    "market_id" => "?:products.company_id as market_id",
                    "category_id" => "?:products_categories.category_id as category_id",
                ];
        
                $from_product_category = [
                    '?:products',
                    '?:product_descriptions',
                    '?:product_prices',
                    '?:products_categories',
                ];
        
                $where_product_category = [
                    '?:products.product_id = ?:product_descriptions.product_id',
                    '?:products.product_id = ?:product_prices.product_id',
                    '?:products.product_id = ?:products_categories.product_id',
                    '?:products_categories.category_id '.$compare.' ('.$category_id.')',
                    
                ];

                if(isset($params['companyId'])){
                    $id_company = $params['companyId'];
                    array_push($where_product_category,"?:products.company_id = $id_company");
                }
        
    
                $data_product_category = db_get_array('SELECT ' . implode(', ', $fields_product_category) . ' FROM ' . implode(',',$from_product_category) . ' Where ' . implode(' AND ', $where_product_category));
    
                for($i=0;$i<count($data_product_category);$i++){
                    $product_image = fn_get_image_pairs((int)$data_product_category[$i]["id"], 'product', 'M',true,true, 'en');

                    $product_link_image = $product_image["detailed"]["http_image_path"];

                    $data_product_category[$i]["id"] = (int)$data_product_category[$i]["id"];
                    $data_product_category[$i]["price"] = (int)$data_product_category[$i]["price"];
                    $data_product_category[$i]["discount_price"] = (int)$data_product_category[$i]["discount_price"];
                    $data_product_category[$i]["featured"] = true;
                    $data_product_category[$i]["package_items_count"] = 2;
                    $data_product_category[$i]["unit"] = "m";
                    $data_product_category[$i]["deliverable"] = true;
                    $data_product_category[$i]["has_media"] = true;
                    $data_product_category[$i]["market"] = [
                        "id"=> 1,
                        "name"=> "Market Leffler, Bernier and Glover",
                        "description"=> "Ducimus delectus autem magnam dolorem nobis. Aliquid molestias sapiente impedit et iusto dolores.",
                        "address"=> "5970 Jack Garden Apt. 789 East Deltaport, MA 00826",
                        "latitude"=> 39.383276,
                        "longitude"=> 8.818711,
                        "phone"=> "1-801-640-7258",
                        "mobile"=> "+1.341.693.4948",
                        "information"=> "Eos quasi illum velit assumenda dolorem rerum ex ut. Non eum nobis quae maxime voluptatem qui. Vitae sed fugiat voluptas iusto.",
                        "admin_commission"=> 17.6,
                        //"delivery_fee"=> 2.15,
                        "delivery_range"=> 99999,
                        "default_tax"=> $tax,
                        "closed"=> false,
                        "active"=> true,
                        "available_for_delivery"=> true,
                        "created_at"=> "2021-04-02 02:25:42",
                        "updated_at"=> "2021-04-02 02:25:42",
                        "custom_fields"=> [],
                        "has_media"=> false,
                        "rate"=> "2.0",
                    ];
                    $data_product_category[$i]["media"] = [
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
    
                $data = $data_product_category;

            }

        }
 
          return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'data' => $data,
                'message'=> 'Slide retrieved successfully',
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