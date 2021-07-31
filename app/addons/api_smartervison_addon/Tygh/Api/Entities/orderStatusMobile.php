<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

class OrderStatusMobile extends AEntity
{
    public function index($id = '', $params = array())
    {   
        list($token, $expiry_time) = fn_get_user_auth_token($params['user_id']);

        if($params['token'] == $token){
            $data = [];
            if($params['app'] == 'market'){
                if($params['method'] == 'Pay on Pickup'){
                    $data= db_get_array('SELECT ?:shipments.shipment_id as status_id,?:status_descriptions.description as status FROM ?:shipments,?:shipment_items,?:statuses,?:status_descriptions WHERE ?:shipments.shipment_id = ?:shipment_items.shipment_id and ?:shipment_items.order_id ='. $params['order_id'].' and ?:statuses.type = "S" and ?:statuses.status = ?:shipments.status and ?:status_descriptions.status_id = ?:statuses.status_id group by ?:shipments.status');
                    if(count($data) >0){
                        for($i=0;$i<count($data);$i++){
                            $data[$i]['id'] = 0;
                            $data[$i]['created_at'] = "2019-08-30 16:39:28";
                            $data[$i]['updated_at'] = "2019-10-15 18:03:14";
                            $data[$i]['custom_fields'] = [];
                        }
                    }
                    else{
                        $data = [
                            0 =>[
                                "status_id" => "0",
                                "status" => "Order received",
                                "id" => 0,
                                "created_at" => "2019-08-30 16:39:28",
                                "updated_at" => "2019-10-15 18:03:14",
                                "custom_fields" => [],
                            ]
                        ];
                    }
                }
                else{
                    $data= db_get_array('SELECT ?:status_descriptions.description as status, ?:status_descriptions.status_id as id_status FROM ?:status_descriptions,?:statuses WHERE ?:statuses.status_id = ?:status_descriptions.status_id and ?:statuses.type = "S"');
                    $check= db_get_array('SELECT ?:shipments.shipment_id as status_id,?:status_descriptions.description as status FROM ?:shipments,?:shipment_items,?:statuses,?:status_descriptions WHERE ?:shipments.shipment_id = ?:shipment_items.shipment_id and ?:shipment_items.order_id ='. $params['order_id'].' and ?:statuses.type = "S" and ?:statuses.status = ?:shipments.status and ?:status_descriptions.status_id = ?:statuses.status_id group by ?:shipments.status');
                    
                    if(count($check)>0){
                        for($i=0;$i<count($data);$i++){
                            $data[$i]['id'] = $i;
                            $data[$i]['created_at'] = "2019-08-30 16:39:28";
                            $data[$i]['updated_at'] = "2019-10-15 18:03:14";
                            $data[$i]['custom_fields'] = [];
                        }
                    }
                    else{
                        $data = [
                            0 =>[
                                "status_id" => "0",
                                "status" => "Order received",
                                "id" => 0,
                                "created_at" => "2019-08-30 16:39:28",
                                "updated_at" => "2019-10-15 18:03:14",
                                "custom_fields" => [],
                            ]
                        ];
                    }
                }

                return array(
                    'status' => Response::STATUS_OK,
                    'data' =>  array(
                        'success' => true,
                        'data' => $data,
                        'message'=> 'Order status retrieved successfully',
                    ),
                );   

            }
            else if($params['app'] = 'owner'){
                $data = db_get_array('SELECT ?:statuses.status_id as id,?:status_descriptions.description as status FROM ?:statuses,?:status_descriptions WHERE ?:statuses.status_id = ?:status_descriptions.status_id AND ?:statuses.type ="O" order by ?:statuses.status_id ');
                for($i=0;$i<count($data);$i++){
                    $data[$i]['id'] = (int)$data[$i]['id'];
                    $data[$i]['custom_fields'] = [];
                }
                return array(
                    'status' => Response::STATUS_OK,
                    'data' =>  array(
                        'success' => true,
                        'data' => $data,
                        'message'=> 'Order status retrieved successfully',
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