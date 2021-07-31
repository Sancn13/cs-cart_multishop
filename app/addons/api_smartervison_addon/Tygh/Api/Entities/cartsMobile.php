<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;
use Tygh\Common\OperationResult;
use Tygh\Registry;
use Tygh\Enum\ProductFeatures;
use Tygh\Tygh;

class CartsMobile extends AEntity
{
    public function index($id = '', $params = array())
    {   

        $data = [];

        if($params['filter'] == 'cart'){
            $fields = [

                'user_id' => '?:user_session_products.user_id as user_id',
                'product_id' => '?:user_session_products.product_id as product_id',
                'quantity' => '?:user_session_products.amount as quantity',
                'id' => '?:user_session_products.item_id as id',
                'extra' => '?:user_session_products.extra as extra',
            ];
            $from = [
                '?:user_session_products',
            ];
            $where = [
                '?:user_session_products.user_id =' . $params['id']
            ];
    
            $data = db_get_array('SELECT ' . implode(', ', $fields) . ' FROM ' . implode(',',$from) . ' Where ' . implode(' AND ', $where));
    
            for($i = 0; $i< count($data);$i++){
                $data[$i]['product'] = $this->getProduct($data[$i]['product_id']);
                $data[$i]['quantity'] = (int)$data[$i]['quantity'];
                $options = unserialize($data[$i]['extra']);
                $group_id = array_keys($options['product_options']);
                for($j = 0; $j<count($options['product_options']);$j++){
                    $id_options = (String)$options['product_options'][array_keys($options['product_options'])[$j]];
                    $name_options = db_get_array('SELECT variant_name as name FROM ?:product_option_variants_descriptions WHERE ?:product_option_variants_descriptions.variant_id =' . $id_options);
                    $data[$i]['options'][$j] = [
                        "id" => $id_options,
                        "option_group_id" => (String)array_keys($options['product_options'])[$j],
                        "name" => $name_options[0]["name"],
                    ];
                };
            }

        }
        else if($params['filter'] == 'count'){
            $count = db_get_array('SELECT COUNT(?:user_session_products.product_id) as amount FROM ?:user_session_products WHERE ?:user_session_products.user_id =' . $params['id']);
            
            $data = (int)$count[0]['amount'];

        }

        return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'data' => $data,
                'message'=> 'Cart retrieved successfully',
            ),
        );   

        
    }

    public function create($params)
    {
        $user_id = $params['user_id'];

        $product_id = $params['product_id'];

        $product_info = db_get_array('SELECT ?:product_prices.price FROM ?:product_prices WHERE ?:product_prices.product_id = '.$params['product_id']);

        $type = '';

        if(isset($params['type']) == 'wish_list'){

            $type = 'W';

            $amount = 1;
        }
        else{
            
            $type = 'C';

            $amount = $params['quantity'];
        }

        $ip = fn_get_ip();

        $ip_address = fn_ip_to_db($ip['host']);

        $price = (float)$product_info[0]['price'] * $amount;

        if (!empty($product_id)) {
            $dataExtra = fn_get_product_data($product_id, $this->auth, "en", '', true, true, true, false, false, false, false);

            if (empty($dataExtra)) {
                $status = Response::STATUS_NOT_FOUND;
            } else {
                $dataExtra['selected_options'] = $this->safeGet($params, 'selected_options', []);
                $products = $this->getProductsAdditionalData(array($dataExtra), $params);
                $dataExtra = reset($products);
            }

        } else {
            $items_per_page = $this->safeGet($params, 'items_per_page', Registry::get('settings.Appearance.admin_elements_per_page'));
            list($products, $search) = fn_get_products($params, $items_per_page, "en");

            $products = $this->getProductsAdditionalData($products, $params);

            $dataExtra = array(
                'products' => array_values($products),
                'params'   => $search,
            );
        }

        $extra = str_replace('"',"'",serialize($dataExtra));

        $item_id = fn_generate_cart_id($product_id, $extra, $only_selectable = false);

        $timestamp = time();

        $product_data = [
            'user_id'    => $user_id,
            'timestamp'  => $timestamp,
            'type'       => $type,
            'user_type'  => 'R',
            'item_id'    => $item_id,
            'item_type'  => 'P',
            'product_id' => $product_id,
            'amount'     => $amount,
            'price'      => $price,
            'extra'      => serialize($dataExtra),
            'session_id' => '0',
            'ip_address' => $ip_address,
            'order_id'   => 0,
        ];

        $db = Tygh::$app['db'];
        $db->replaceInto('user_session_products', $product_data);

        // $data=[
        //     'quantity' => $params['quantity'],
        //     'product_id' => $params['product_id'],
        //     'user_id' => $params['user_id'],
        //     'id' => $item_id,
        //     'extra' => $extra,
        //     'created_at' => $timestamp,
        //     'updated_at' => $timestamp,
        //     'custom_fields' => array(),
        // ];

        $data= [
            "product_id"=> $params['product_id'],
            "user_id"=> $params['user_id'],
            "updated_at"=> "2021-05-19 03:11:07",
            "created_at"=> "2021-05-19 03:11:07",
            "id"=> $item_id,
            "custom_fields"=> [],
            "options"=> [],
        ];
        
        if($params['type'] = 'wish_list'){

            return array(
                'status' => Response::STATUS_CREATED,
                'data' => [
                    "success" => true,
                    "data" => $data,
                    "message" => "Count retrieved successfully",
                ]
            );
        }
        else{
            return array(
                'status' => Response::STATUS_CREATED,
                'data' => [
                    "success" => true,
                    "data" => true,
                    "message" => "Count retrieved successfully",
                ]
            );
        }

    }

    public function update($id, $params)
    {    

        db_query('UPDATE ?:user_session_products SET ?:user_session_products.amount ='.$params['quantity'].' WHERE ?:user_session_products.user_id ='.$id .' AND ?:user_session_products.product_id='.$params['product_id'].' AND ?:user_session_products.item_id='.$params['id']);



        $data = [
            "id"=> $params['id'],
            "product_id"=> $params['product_id'],
            "user_id"=> $id,
            "quantity"=> $params['quantity'],
            "created_at"=> "2021-05-18 08:41:16",
            "updated_at"=> "2021-05-18 08:43:56",
            "custom_fields"=> [],
        ];

        return array(
            'status' => Response::STATUS_CREATED,
            'data' => [
                "success" => true,
                "data" => $data,
                "message" => "Updated successfully",
            ]
        );
    }

    public function delete($id)
    {
        $pageURL = "";

        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"] . $_SERVER["REQUEST_URI"];

        $parts = parse_url($pageURL);

        parse_str($parts['query'], $query);

        $product_id = (int)$query['product_id'];

        db_query('DELETE FROM ?:user_session_products WHERE ?:user_session_products.product_id ='.$product_id.' AND ?:user_session_products.user_id ='. $id);


        return array(
            'status' => Response::STATUS_CREATED,
            'data' => [
                "success" => true,
                "data" => true,
                "message" => "Deleted successfully",
            ]
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
            "taxt_ids" => "?:products.tax_ids as tax_ids",
        ];

        $from_product = [
            '?:products',
            '?:product_descriptions',
            '?:product_prices',
            '?:products_categories',
            '?:taxes',
        ];

        if($product_id >0){
            $where_product = [
                '?:products.product_id = ' . $product_id,
                '?:products.product_id = ?:product_descriptions.product_id',
                '?:products.product_id = ?:product_prices.product_id',
                '?:products.product_id = ?:products_categories.product_id',
                //'?:products.tax_ids = ?:taxes.tax_id', 
            ];

            $other_rand = [];
        }
        else{
            $where_product = [
                '?:products.product_id = ?:product_descriptions.product_id',
                '?:products.product_id = ?:product_prices.product_id',
                '?:products.product_id = ?:products_categories.product_id',
                //'?:products.tax_id = ?:taxes.tax_id', 
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

        $tax = $this->calculateTax();
        
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
            "deliverable"=> true,
            "market_id"=> (int)$data_product[0]['market_id'],
            "category_id"=> (int)$data_product[0]['category_id'],
            "custom_fields"=> [],
            "has_media"=> true,
            "market"=> [
                "id"=> (int)$data_vendor[0]['id'],
                "name"=> $data_vendor[0]['name'],
                "description"=> $data_vendor[0]['description'],
                "delivery_range" => $this->getDeliveryRange($data_vendor[0]['id']),
                "available_for_delivery" => true,
                "latitude" => (double)$data_vendor[0]['latitude'],
                "longitude" => (double)$data_vendor[0]['longitude'],
                //"delivery_fee"=> 2.15,
                "default_tax"=> $tax,
                "closed"=> false,
                "active"=> true,
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

    public function calculateTax(){

        $tax = 0;
    
        $data_tax = db_get_array('SELECT ?:tax_rates.rate_value as rate,?:taxes.status, ?:tax_rates.rate_type as type, ?:taxes.price_includes_tax as includes FROM ?:taxes,?:tax_rates WHERE ?:taxes.tax_id = ?:tax_rates.tax_id AND ?:tax_rates.destination_id = 1');
    
        for($i=0;$i<count($data_tax);$i++){
          if($data_tax[$i]['includes'] == 'N' && $data_tax[$i]['status'] == 'A'){
            $tax += $data_tax[$i]['rate'];
          }
        }
    
        return round($tax,2);
      }

    protected function getProductsAdditionalData($products, $params)
    {
        $params['get_options'] = $this->safeGet($params, 'get_options', false);
        $params['get_features'] = $this->safeGet($params, 'get_features', true);
        $params['get_detailed'] = $this->safeGet($params, 'get_detailed', true);
        $params['get_icon'] = $this->safeGet($params, 'get_icon', true);
        $params['get_additional'] = $this->safeGet($params, 'get_additional', true);
        $params['detailed_params'] = $this->safeGet($params, 'detailed_params', false);
        $params['get_discounts'] = true;
        $params['features_display_on'] = 'A';

        fn_gather_additional_products_data($products, $params);

        return $products;
    }

    public function getDeliveryRange($vendor_id){
        $delivery_range = db_get_row('SELECT ?:profile_fields_data.value as delivery_range FROM ?:profile_fields,?:profile_fields_data WHERE ?:profile_fields.field_id = ?:profile_fields_data.field_id AND ?:profile_fields.field_name = "delivery_range" AND ?:profile_fields_data.object_type = "S" AND ?:profile_fields_data.object_id=' . $vendor_id);

        $data = (double)$delivery_range['delivery_range'];

        return $data;
    }
}
?>