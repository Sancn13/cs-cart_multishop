<?php
namespace Tygh\Api\Entities;

use Tygh\Providers\StorefrontProvider;
use Tygh\Api\AEntity;
use Tygh\Api\Response;
use Tygh\Registry;

class OrdersMobile extends AEntity
{
    public function index($id = '', $params = array())
    {   
      
        list($token, $expiry_time) = fn_get_user_auth_token($params['user_id']);

        if($params['token'] == $token){
            $select = 0;
            $fields = [
                'user_id'=>'?:orders.user_id',
                'id' =>'?:orders.order_id as id',
                'order_status_id' => '?:statuses.status_id as order_status_id',
                'status_descriptions' => '?:status_descriptions.description as status_descriptions',
                'firstname' => '?:users.firstname',
                'lastname' => '?:users.lastname',
                'phone' => '?:users.phone',
                'email' => '?:users.email',
                'timestamp' => '?:orders.timestamp',
                'delivery_fee' => '?:orders.shipping_cost as delivery_fee',
                'total' => '?:orders.total',
                'subtotal' => '?:orders.subtotal',
                'subtotal_discount' => '?:orders.subtotal_discount',
                'payment_id' => '?:orders.payment_id',
                'payment' => '?:payment_descriptions.payment',
                'payment_description' => '?:payment_descriptions.description as payment_description',
                'hint' => '?:orders.notes as hint'
            ];
            $from = [
                '?:orders',
                '?:statuses',
                '?:status_descriptions',
                '?:users',
                '?:payment_descriptions',
            ];
            $where = [
                '?:statuses.status = ?:orders.status',
                '?:statuses.status_id = ?:status_descriptions.status_id',
                '?:users.user_id = ?:orders.user_id',
                '?:statuses.type = "O"',
                '?:orders.payment_id = ?:payment_descriptions.payment_id'
            ];

            $order_by = '';

            if($params['filter'] == 'order'){
                if(isset($params['user_id']) && isset($params['order_id']) == null){

                    $user_id = $params['user_id'];
                    array_push($where,"?:orders.user_id = $user_id");
                    $select = 1;
                    if(isset($params['recent'])){
                        $order_by = ' order by ?:orders.order_id DESC limit 3';
                    }
                    else{
                        $order_by = ' order by ?:orders.order_id DESC';
                    }
                }
                else if(isset($params['user_id']) && isset($params['order_id'])){

                    $order_id = $params['order_id'];
                    array_push($where,"?:orders.order_id = $order_id");
                    $select = 2;
                }
            }
            else if($params['filter'] == 'status_id'){

                if(isset($params['user_id']) && isset($params['status_ids'])){
                    $status_ids = $params['status_ids'];
                    if(strpos($status_ids, ',') != false)
                    array_push($where,"?:statuses.status_id IN ($status_ids)");
                    else{
                        if($status_ids != 0){
                            array_push($where,"?:statuses.status_id = $status_ids");
                            $order_by = ' order by ?:orders.order_id DESC';
                        }
                        else{
                            $order_by = ' order by ?:orders.order_id DESC';
                        }
                    }
                    $select = 1;
                 }
            }
            else if($params['filter'] == 'delivery'){

                if(isset($params['user_id'])){
                    array_push($from,"?:address_delivery_orders");
                    array_push($from,"?:shipment_items");
                    array_push($where,"?:shipment_items.order_id=?:orders.order_id");
                    array_push($where,"?:address_delivery_orders.order_id = ?:orders.order_id");
                    array_push($where,"?:address_delivery_orders.driver_id = ".$params['user_id']);
                    if(isset($params['delivered']) == 'yes'){
                        array_push($from,"?:shipments");
                        array_push($where,"?:shipment_items.shipment_id=?:shipments.shipment_id");
                        array_push($where,"?:shipments.status='S'");
                    }
                    $order_by = ' order by ?:orders.order_id DESC';
                    $select = 1;
                }
            }


            $data = db_get_array('SELECT DISTINCT ' . implode(', ', $fields) . ' FROM ' . implode(',',$from) . ' Where ' . implode(' AND ', $where) . $order_by);

            for($i = 0; $i< count($data);$i++){
                $data[$i]["id"] = (int)$data[$i]["id"];
                $data[$i]["user_id"] = (int)$data[$i]["user_id"];
                $data[$i]["delivery_fee"] = (double)$data[$i]["delivery_fee"];
                $data[$i]["total"] = (double)$data[$i]["total"];
                $data[$i]["subtotal"] = (double)$data[$i]["subtotal"];
                $data[$i]["subtotal_discount"] = (double)$data[$i]["subtotal_discount"];
                $data[$i]["hint"] = $data[$i]["hint"];
                if((int)$data[$i]["order_status_id"] == 7){
                $data[$i]["active"] = false;
                }
                else{
                $data[$i]["active"] = true;
                }
                $data[$i]["tax"] = $this->calculateTax();
                $driver_id = db_get_row('SELECT ?:address_delivery_orders.driver_id FROM ?:address_delivery_orders WHERE ?:address_delivery_orders.order_id = '. $data[$i]["id"] );
                if(isset($driver_id["driver_id"]) != 0){
                    $data[$i]["driver_id"] = (int)$driver_id["driver_id"];
                    $data[$i]["driver"] = [
                        "id" => (int)$driver_id["driver_id"],
                    ];
                }
                else{
                    $data[$i]["driver_id"] = null;
                }
                $delivery_address = $this->getDeliveryAddress($data[$i]["id"]);
                $data[$i]["delivery_address"] = $delivery_address;
                $data[$i]["payment_id"] = (int)$data[$i]['payment_id'];
                $data[$i]["updated_at"] = date('Y-m-d H:i:s', (int)$data[$i]["timestamp"]);
                $data[$i]['user'] = [
                    "id"=> 1,
                    "name"=> $data[$i]["firstname"] . ' ' . $data[$i]["lastname"],
                    "email"=> $data[$i]["email"],
                    "custom_fields"=> [
                        "phone" =>[
                            "view" => $data[$i]['phone']
                        ],
                        "address" =>[
                            "value" => "1850 Big Elm Kansas City, MO 64106",
                            "view"=> "1850 Big Elm Kansas City, MO 64106",
                            "name"=> "address",
                        ]
                    ],
                ];
                $data[$i]['order_status'] = [
                "id"=> (int)$data[$i]["order_status_id"],
                "status"=> $data[$i]["status_descriptions"],
                ];
                $data[$i]['payment'] = [
                "id"=> (int)$data[$i]['payment_id'],
                "price"=> 51.29,
                "description"=> $data[$i]['payment_description'],
                "user_id"=> (int)$data[$i]["user_id"],
                "status"=> "Waiting for Client",
                "method"=> $data[$i]['payment'],
                "custom_fields"=> [],
                ];
                $data[$i]['product_orders'] = $this->getOrder($data[$i]["id"]);
                $delivery_status = $this->getDeliveryStatus($data[$i]["id"]);
                if(count($delivery_status) > 0){
                    $data[$i]['delivery_status'] = $delivery_status[0]["status"];
                    $data[$i]['delivery_status_id'] = $delivery_status[0]["status_id"];
                }
                else{
                    $data[$i]['delivery_status']="Order received";
                    $data[$i]['delivery_status_id']="0";
                }
                
            }
            if($select == 1){
                return array(
                    'status' => Response::STATUS_OK,
                    'data' =>  array(
                        'success' => true,
                        //'data' => $data_demo,
                        'data' => $data,
                        'message'=> 'Orders retrieved successfully',
                    ),
                );  
            }
            else {
                return array(
                    'status' => Response::STATUS_OK,
                    'data' =>  array(
                        'success' => true,
                        //'data' => $data_demo,
                        'data' => $data[0],
                        'message'=> 'Orders retrieved successfully',
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

    public function getDeliveryStatus($order_id){
        $data= db_get_array('SELECT ?:status_descriptions.status_id as status_id,?:status_descriptions.description as status FROM ?:shipments,?:shipment_items,?:statuses,?:status_descriptions WHERE ?:shipments.shipment_id = ?:shipment_items.shipment_id and ?:shipment_items.order_id ='.$order_id.' and ?:statuses.type = "S" and ?:statuses.status = ?:shipments.status and ?:status_descriptions.status_id = ?:statuses.status_id group by ?:shipments.status');

        return $data;
        
    }

    public function getDeliveryAddress($order_id){
        $fields_data = [
            'id' => '?:address_deliveries.id',
            'description' => '?:address_deliveries.description',
            'address' => '?:address_deliveries.address',
            'latitude' => '?:address_deliveries.latitude',
            'longitude' => '?:address_deliveries.longitude',
            'is_default' => '?:address_deliveries.is_default',
        ];
        $data = db_get_array('SELECT '. implode(', ', $fields_data) .' FROM ?:address_delivery_orders,?:address_deliveries WHERE ?:address_delivery_orders.address_id = ?:address_deliveries.id AND ?:address_delivery_orders.order_id = '.$order_id);

        if(count($data) > 0){
            $data[0]["latitude"] = (double)$data[0]["latitude"];
            $data[0]["longitude"] = (double)$data[0]["longitude"];
            if($data[0]["is_default"] == 0){
                $data[0]["is_default"] = false;
            }
            else{
                $data[0]["is_default"] = true;
            }
            return $data[0];
        }
        else{
            $order_address = db_get_row("SELECT ?:orders.s_address as address FROM ?:orders WHERE ?:orders.order_id = $order_id ");

            $data = [
                'id' => $order_id,
                'description' => "",
                'address' => $order_address['address'],
                'latitude' => null,
                'longitude' => null,
                'is_default' => true,
            ];

            return $data;
        }
    }


    public function create($params){

        list($token, $expiry_time) = fn_get_user_auth_token($params['user_id']);

        $this->auth['user_id'] = $params['user_id'];
        $this->auth['is_token_auth'] = $params['token'];

        if($params['token'] == $token){
            $shipping_ids = $data = array();
            $valid_params = true;
            $status = Response::STATUS_BAD_REQUEST;
    
            if (isset($params['shipping_ids'])) {
                $shipping_ids = (array) $params['shipping_ids'];
            } elseif (isset($params['shipping_id'])) {
                $shipping_ids = (array) $params['shipping_id'];
            }
    
            if ($coupon_codes = $this->safeGet($params, 'coupon_codes', array())) {
                $coupon_codes = array_map(function($code) {
                    return fn_strtolower(trim($code));
                }, array_unique((array)$coupon_codes));
            }
    
            fn_clear_cart($cart, true);
    
            // when interacting with an authorized customer, use his/her user ID instead of the passed one
            if (!empty($this->auth['is_token_auth'])) {
                $params['user_id'] = $this->auth['user_id'];
                unset($params['user_data']);
            } elseif (empty($this->auth['user_id'])) {
                $status = Response::STATUS_UNAUTHORIZED;
                $valid_params = false;
            }
    
            if (!empty($params['user_id']) && is_numeric($params['user_id'])) {
                $cart['user_data'] = fn_get_user_info($params['user_id']);
                if (empty($cart['user_data'])) {
                    $status = Response::STATUS_BAD_REQUEST;
                    $data['message'] = __('object_not_found', array('[object]' => __('user')));
                    $valid_params = false;
                }
            } elseif (!empty($params['user_data']) && is_array($params['user_data'])) {
                $cart['user_data'] = $params['user_data'];
            } else {
                $data['message'] = __('api_required_field', array(
                    '[field]' => 'user_id/user_data'
                ));
                $valid_params = false;
            }
    
            // merging request data with auth data is not safe when processing customer's requests
            if ($valid_params && empty($this->auth['is_token_auth'])) {
                $cart['user_data'] = array_merge($cart['user_data'], $params);
            }
    
            if ($valid_params && empty($params['payment_id'])) {
                $data['message'] = __('api_required_field', array(
                    '[field]' => 'payment_id'
                ));
                $valid_params = false;
            }
    
            if ($valid_params && empty($shipping_ids)) {
                $data['message'] = __('api_required_field', array(
                    '[field]' => 'shipping_id'
                ));
                $valid_params = false;
            }
    
            if ($valid_params && empty($params['products'])) {
                $data['message'] = __('api_required_field', array(
                    '[field]' => 'products'
                ));
                $valid_params = false;
            }
    
            if ($valid_params
                && isset($cart['user_data']['company_id'])
                && !($this->checkUserCompanyRelation($cart['user_data']['company_id']) || $this->areUsersShared())
            ) {
                $status = Response::STATUS_FORBIDDEN;
                $data['message'] = __('api_wrong_user_company_relation');
                $valid_params = false;
            } 
    
            if ($valid_params) {
    
                $cart['payment_id'] = $params['payment_id'];
                $cart['storefront_id'] = StorefrontProvider::getStorefront()->storefront_id;
    
                $customer_auth = fn_fill_auth($cart['user_data']);
    
                fn_add_product_to_cart($params['products'], $cart, $customer_auth);
    
                // group products - disable all calculations for speed
                fn_calculate_cart_content($cart, $customer_auth, 'S', false, 'S', false);
    
                if (!empty($cart['product_groups']) && !empty($shipping_ids)) {
                    if (count($shipping_ids) == 1) { //back capability
                        $shipping_ids = array_fill_keys(array_keys($cart['product_groups']), reset($shipping_ids));
                    }
    
                    foreach ($cart['product_groups'] as $key => $group) {
                        foreach ($group['shippings'] as $shipping_id => $shipping) {
                            if (isset($shipping_ids[$key]) && $shipping_id == $shipping_ids[$key]) {
                                $cart['chosen_shipping'][$key] = $shipping_id;
                                break;
                            }
                        }
                    }
                }
    
                if ($coupon_codes) {
                    $do_recalc = false;
                    foreach ($coupon_codes as $code) {
                        if ($do_recalc) {
                            fn_calculate_cart_content($cart, $customer_auth, 'S', false, 'S', true);
                        }
                        $cart['pending_coupon'] = $code;
                        $do_recalc = true;
                    }
                }
    
                $cart['calculate_shipping'] = true;
                fn_calculate_cart_content($cart, $customer_auth);
    
                if (empty($cart['shipping_failed']) || empty($shipping_ids)) {
                    fn_update_payment_surcharge($cart, $customer_auth);
                    // FIXME: Backward compatibility
                    $cart = $this->mergeOrderData($cart, $params);
                } else {
                    $status = Response::STATUS_FORBIDDEN;
                    $data['message'] = __('api_no_shipping_methods_available');
                    $valid_params = false;
                }
            }
    
            if ($valid_params && !fn_allow_place_order($cart, $this->auth)) {
                $status = Response::STATUS_FORBIDDEN;
                $valid_params = false;
    
                if (!empty($cart['amount_failed'])) {
                    /** @var \Tygh\Tools\Formatter $formatter */
                    $formatter = Tygh::$app['formatter'];
                    $min_amount = $formatter->asPrice(
                        $cart['min_order_amount'],
                        $this->safeGet($params, 'currency', CART_PRIMARY_CURRENCY)
                    );
    
                    $data['message'] = __('checkout.min_cart_subtotal_required', [
                        '[amount]' => $min_amount,
                    ]);
                }
            }
    
            if ($valid_params) {
                $order_placement_action = $this->safeGet($params, 'action', 'save');
                list($order_id, ) = fn_place_order(
                    $cart,
                    $customer_auth,
                    $order_placement_action,
                    empty($this->auth['is_token_auth']) ? $this->auth['user_id'] : null
                );
    
                if (!empty($order_id)) {
                    if($params['shipping_id'] == '7'){
                        db_query('INSERT INTO ?:address_delivery_orders(order_id,address_id) 
                        VALUES('.$order_id.',"'.$params['address_id'].'")');
                    }
                    $status = Response::STATUS_CREATED;
                    $data = [
                        'order_id'   => $order_id,
                        'order_data' => $this->getOrderData($order_id)
                    ];
                    if (fn_allowed_for('MULTIVENDOR')) {
                        $data['suborder_ids'] = array_map('intval', db_get_fields(
                            'SELECT order_id'
                            . ' FROM ?:orders'
                            . ' WHERE parent_order_id = ?i',
                            $order_id
                        ));
    
                        $data['suborders_data'] = [];
                        foreach ($data['suborder_ids'] as $suborder_id) {
                            $data['suborders_data'][] = $this->getOrderData($suborder_id);
                        }
                    }
                } else {
                    $data['message'] = __('api_order_couldnt_be_created');
                }
            }

            // $user_data = '"user_data"=> {' 
            //     .'"email"=> "${user_type_json[email]}",'
            //     .'"b_firstname"=> "${user_type_json[b_firstname]}",'
            //     .'"b_lastname"=> "${user_type_json[b_lastname]}",'
            //     .'"b_address"=> "${order.deliveryAddress.address}",'
            //     .'"b_city"=> "",'
            //     .'"b_state"=> "",'
            //     .'"b_country"=> "${country}",'
            //     .'"b_zipcode"=> "${user_type_json[b_zipcode]}",'
            //     .'"b_phone"=> "${user_type_json[b_phone]}",'
            //     .'"s_firstname"=> "${user_type_json[s_firstname]}",'
            //     .'"s_lastname"=> "${user_type_json[s_lastname]}",'
            //     .'"s_address"=> "${order.deliveryAddress.address}",'
            //     .'"s_city"=> "",'
            //     .'"s_state"=> "",'
            //     .'"s_country"=> "${country}",'
            //     .'"s_zipcode"=> "",'
            //     .'"s_phone"=> "${user_type_json[s_phone]}"'
            //     . '}';

            db_query("UPDATE ?:orders SET 
            b_address ='{$params['user_address']['b_address']}',
            b_city ='{$params['user_address']['b_city']}',
            b_state ='{$params['user_address']['b_state']}',
            b_country ='{$params['user_address']['b_country']}',
            s_address ='{$params['user_address']['s_address']}',
            s_city ='{$params['user_address']['s_city']}',
            s_state ='{$params['user_address']['s_state']}',
            s_country ='{$params['user_address']['s_country']}'

             WHERE order_id =" . $data['order_id']);
    
            return array(
                'status' => $status,
                'data' =>  array(
                    'success' => $data,
                    'message'=> 'Order retrieved successfully',
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

    public function update($id, $params)
    {

        if(isset($params['order_status']) == 'delivered'){
            $shipment_id = db_get_row('SELECT ?:shipment_items.shipment_id FROM ?:shipment_items WHERE ?:shipment_items.order_id='.$params['id']);

            db_query('UPDATE ?:shipments SET ?:shipments.status = "S" WHERE ?:shipments.shipment_id = '.$shipment_id['shipment_id']);
        }
        else{
            $status = db_get_array("SELECT ?:statuses.status FROM ?:statuses WHERE ?:statuses.status_id = {$params['order_status_id']} AND ?:statuses.type = 'O'");

            db_query("UPDATE ?:orders SET ?:orders.notes = '{$params['hint']}',?:orders.status = '{$status[0]['status']}',?:orders.shipping_cost = {$params['delivery_fee']} WHERE ?:orders.order_id = {$params['id']}");

            $id_driver_from_delivery_order = db_get_row('SELECT ?:address_delivery_orders.driver_id FROM ?:address_delivery_orders WHERE ?:address_delivery_orders.order_id ='.$params['id']);
            $timestamp = time();
            if($id_driver_from_delivery_order['driver_id'] == '0'){
                db_query('INSERT INTO ?:shipments(shipping_id,carrier,timestamp,comments,status) 
                VALUES(7,"driver_of_store",'.$timestamp.'," ","P")');
                $id_shipments_insert = db_get_row('SELECT LAST_INSERT_ID()');
                $order_products = db_get_array('SELECT ?:order_details.item_id,?:order_details.product_id,?:order_details.amount FROM ?:order_details WHERE ?:order_details.order_id = '.$params['id']);
                $str_value = "";
                for($i=0;$i<count($order_products);$i++){
                    $str_value = $str_value . "({$order_products[$i]['item_id']},{$id_shipments_insert["LAST_INSERT_ID()"]},{$params['id']},{$order_products[$i]['product_id']},{$order_products[$i]['amount']}),";
                }
                $str_value = substr($str_value,0,strlen($str_value)-1);
                db_query("INSERT INTO ?:shipment_items(item_id,shipment_id,order_id,product_id,amount) 
                VALUES $str_value");

            }
    
            db_query("UPDATE ?:address_delivery_orders SET ?:address_delivery_orders.driver_id = {$params['driver_id']} WHERE ?:address_delivery_orders.order_id = {$params['id']} ");

        }




        $data = [
            "id"=> 1,
            "user_id"=> 1,
            "order_status_id"=> 1,
            "tax"=> 8.68,
            "delivery_fee"=> 0,
            "hint"=> "",
            "active"=> true,
            "driver_id"=> 5,
            "delivery_address_id"=> 17,
            "payment_id"=> 1,
            "created_at"=> "2021-07-06 00:50:44",
            "updated_at"=> "2021-07-06 08:02:46",
            "custom_fields"=> [],
            "payment"=> [
                "id"=> 1,
                "price"=> 85.9,
                "description"=> "Order not paid yet",
                "user_id"=> 1,
                "status"=> "Waiting for Client",
                "method"=> "Pay on Pickup",
                "created_at"=> "2021-07-06 00:50:44",
                "updated_at"=> "2021-07-06 00:50:44",
                "custom_fields"=> [],
            ]
        ];

        return array(
            'status' => Response::STATUS_OK,
            'data' => [
                "success"=> true,
                "data"=> $data,
                "params"=>$params,
                "message"=> "Order Saved successfully"
            ]
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

    public function getOrder($order_id){

      $fields = [
        'id' => '?:order_details.item_id as id',
        'price' => '?:order_details.price',
        'product_id' => '?:order_details.product_id',
        'order_id' => '?:order_details.order_id',
        'quantity' => '?:order_details.amount as quantity',
        'subtotal_discount' => '?:orders.subtotal_discount',
        'extra' => '?:order_details.extra',
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
        $options = unserialize($data_order_product[$i]['extra']);
        $data_order_product[$i]['options']=[];
        $group_id = array_keys($options['product_options']);
        for($j = 0; $j<count($options['product_options']);$j++){
            $id_options = (String)$options['product_options'][array_keys($options['product_options'])[$j]];
            $name_options = db_get_array('SELECT variant_name as name FROM ?:product_option_variants_descriptions WHERE ?:product_option_variants_descriptions.variant_id =' . $id_options);
            $data_order_product[$i]['options'][$j] = [
                "id" => $id_options,
                "option_group_id" => (String)array_keys($options['product_options'])[$j],
                "name" => $name_options[0]["name"],
            ];
        };
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
          "options"=> [],
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