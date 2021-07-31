<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;
use Tygh\Api\Entities\Market;

class ReportsMobile extends AEntity
{
    public function index($id = '', $params = array())
    {

        $lastday = date('Y-m-d 23:59:59');

        $firstday = date('Y-m-d 00:00:00', strtotime(" -". $params['days'] ." days"));

        $data = [];

        if($params['report'] == 'product'){
            $order_id = db_get_array('SELECT ?:orders.order_id FROM ?:orders WHERE ?:orders.timestamp BETWEEN UNIX_TIMESTAMP("'. $firstday .'") AND UNIX_TIMESTAMP("'. $lastday .'")');
        
            $order_id_str = "";

            for($i=0;$i<count($order_id);$i++){
                if((count($order_id) - $i) == 1){
                    $order_id_str = $order_id_str . $order_id[$i]['order_id'];
                }
                else{
                    $order_id_str = $order_id_str . $order_id[$i]['order_id'] . ',';
                }
            }

            $product_id = db_get_array('SELECT ?:order_details.product_id, SUM(?:order_details.amount) as amount FROM ?:order_details WHERE ?:order_details.order_id IN (' .$order_id_str.') group by ?:order_details.product_id ORDER BY amount DESC LIMIT 6');

            $data = [];

            for($i=0;$i<count($product_id);$i++){
                $data[$i] = $this->getProduct($product_id[$i]["product_id"]);
            }

        }
        else if($params['report'] == 'market'){
            $company_id = db_get_array('SELECT ?:orders.company_id,COUNT(?:orders.order_id) AS amount_order FROM ?:orders WHERE ?:orders.timestamp BETWEEN UNIX_TIMESTAMP("'. $firstday .'") AND UNIX_TIMESTAMP("'. $lastday .'") GROUP BY ?:orders.company_id ORDER BY amount_order DESC LIMIT 6');
            for($i=0;$i<count($company_id);$i++){
                $data[$i] = (new Market)->getMarket($company_id[$i]['company_id'])[0];
            }
        }

        return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'timeline' => $firstday . '-' . $lastday,
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
            'create' => false,
            'update' => false,
            'delete' => false,
        );
    }

    public function privileges()
    {
        return array(
            'index'  => true,
            'create' => false,
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
  
        $tax = $this->calculateTax();
        
        return  $data_product = [
            "id"=> (int)$data_product[0]['id'],
            "name"=> $data_product[0]['name'],
            "price"=> (double)$data_product[0]['price'],
            "discount_price"=> (double)$data_product[0]['discount_price'],
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
                "default_tax" => $tax
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
}
?>