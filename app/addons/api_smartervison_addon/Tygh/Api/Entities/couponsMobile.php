<?php
namespace Tygh\Api\Entities;

use Tygh\Providers\StorefrontProvider;
use Tygh\Api\AEntity;
use Tygh\Api\Response;
use Tygh\Registry;

class CouponsMobile extends AEntity
{
    public function index($id = '', $params = array())
    {   

        $data = [
            "id"=> 1,
            "code"=> $params['coupon_code'],
            "discount"=> 20,
            "discount_type"=> "percent",
            "description"=> null,
            "expires_at"=> "2021-06-05 00:00:00",
            "enabled"=> true,
            "created_at"=> "2021-05-30 00:42:45",
            "updated_at"=> "2021-05-31 09:23:26",
            "custom_fields"=> [],
            "discountables"=> [
                0=>[
                    "id"=> 16,
                    "coupon_id"=> 1,
                    "discountable_type"=> "App\Models\Market",
                    "discountable_id"=> 1
                ]
            ],
            "price_product" => [],
        ];

        $product_info = db_get_array('SELECT ?:order_details.price as price_product,?:order_details.product_id FROM ?:order_details WHERE ?:order_details.order_id = '. $params['order_id']);

        $total = db_get_array('SELECT ?:orders.total FROM ?:orders WHERE ?:orders.order_id = '. $params['order_id']);
        $data["total"] = (double)$total[0]["total"];
        for($i=0;$i<count($product_info);$i++){
            $data["price_product"][$i] = [
                "product_id" => $product_info[$i]["product_id"],
                "price_product" => (double)$product_info[$i]["price_product"],
            ];
        }

        fn_delete_order($params['order_id']);

        return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'data' => array($data),
                'message'=> 'Coupons retrieved successfully',
            ),
        );

    }

    public function create($params)
    {

      return array(
          'status' => Response::STATUS_OK,
          'data' =>  array(
              'success' => 'o-ok',
              'message'=> 'Market retrieved successfully',
          ),
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

    public function getOrder($order_id){

      $fields = [
        'id' => '?:order_details.item_id as id',
        'price' => '?:order_details.price',
        'product_id' => '?:order_details.product_id',
        'order_id' => '?:order_details.order_id',
        'quantity' => '?:order_details.amount as quantity',
        'subtotal_discount' => '?:orders.subtotal_discount',
      ];
      $from = [
        '?:order_details',
        '?:orders'
      ];
      $where = [
        '?:order_details.order_id =' . $order_id,
        '?:orders.order_id = ?:order_details.order_id',
      ];

      $data_order_product = db_get_array('SELECT ' . implode(', ', $fields) . ' FROM ' . implode(',',$from) . ' Where ' . implode(' AND ', $where));

      for($i =0;$i<count($data_order_product);$i++){
        $data_order_product[$i]['id'] = (int)$data_order_product[$i]['id'];
        $data_order_product[$i]['price'] = (double)$data_order_product[$i]['price'];
        $data_order_product[$i]['product_id'] = (int)$data_order_product[$i]['product_id'];
        $data_order_product[$i]['order_id'] = (int)$data_order_product[$i]['order_id'];
        $data_order_product[$i]['quantity'] = (int)$data_order_product[$i]['quantity'];
        $data_order_product[$i]['created_at'] = "2021-05-23 07:47:10";
        $data_order_product[$i]['updated_at'] = "2021-05-23 07:47:10";
        $data_order_product[$i]['product'] = $this->getProduct($data_order_product[$i]['product_id']);
      }

      return $data_order_product;
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

  private function mergeOrderData($cart, $params)
  {
      //Unsafe fields, were processed separately.
      $unsafe_fields = array('products', 'user_data', 'product_groups', 'chosen_shipping');

      $params = array_diff_key($params, array_flip($unsafe_fields));
      $cart = array_merge($cart, $params);

      return $cart;
  }

  /**
   * Provides company identifier of a storefront.
   *
   * @return int Company ID
   */
  protected function getCompanyId()
  {
      if (!empty($this->parent['company_id'])) {
          $company_id = $this->parent['company_id'];
      } elseif (Registry::get('runtime.simple_ultimate')) {
          $company_id = Registry::get('runtime.forced_company_id');
      } else {
          $company_id = Registry::get('runtime.company_id');
      }

      return $company_id;
  }

  /**
   * Checks whether users are shared between storefronts.
   *
   * @return bool
   */
  protected function areUsersShared()
  {
      return fn_allowed_for('ULTIMATE') && Registry::get('settings.Stores.share_users') == 'Y';
  }

  /**
   * Checks whether user belongs to a company.
   *
   * @param int $company_id Company identifier of a user
   *
   * @return bool
   */
  protected function checkUserCompanyRelation($company_id)
  {
      return fn_allowed_for('MULTIVENDOR') || !$this->getCompanyId() || $company_id == $this->getCompanyId();
  }

  /**
   * Checks if an API request will lead to order status update only.
   *
   * @param array $params
   *
   * @return bool
   */
  protected function isStatusUpdateRequest(array $params)
  {
      $is_status_param_present = isset($params['status']);
      $are_update_params_present = false;

      foreach ($params as $param_name => $value) {
          if (!in_array($param_name, $this->status_update_parameters)) {
              $are_update_params_present = true;
              break;
          }
      }

      return $is_status_param_present
          && !$are_update_params_present;
  }

  /**
   * Gets order data
   *
   * @param int $order_id Order identifier
   *
   * @return array
   */
  protected function getOrderData($order_id)
  {
      $order_data = fn_get_order_info($order_id, false, false);

      //The processor_params removed by security reason.
      unset($order_data['payment_method']['processor_params']);

      return $order_data;
  }
}
?>