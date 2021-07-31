<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

class DashboardMobile extends AEntity
{
    public function index($id = '', $params = array())
    {   

        list($token, $expiry_time) = fn_get_user_auth_token($params['user_id']);

        if($params['token'] == $token){

            $income = db_get_array("SELECT(
                SELECT sum(?:vendor_payouts.commission_amount) FROM ?:vendor_payouts,?:orders where ?:vendor_payouts.order_id = ?:orders.order_id AND ?:vendor_payouts.company_id = {$params['company_id']})
                +
                (SELECT IF(sum(?:vendor_payouts.payout_amount) IS NOT NULL,sum(?:vendor_payouts.payout_amount),0) FROM ?:vendor_payouts WHERE ?:vendor_payouts.order_id = 0 AND ?:vendor_payouts.approval_status = 'C' AND ?:vendor_payouts.company_id = {$params['company_id']}) AS income");
    
            $orders = db_get_array("SELECT count(?:orders.order_id) as orders FROM ?:orders WHERE ?:orders.company_id =" . $params['company_id']);

            $products = db_get_array("SELECT count(?:products.product_id) as products FROM ?:products WHERE ?:products.company_id =" . $params['company_id']);
    
            $data = [
                0=>[
                    "description"=> "total_earning",
                    "value"=> (double)$income[0]["income"]
                ],
                1=>[
                    "description"=> "total_orders",
                    "value"=> (double)$orders[0]["orders"]
                ],
                2=>[
                    "description"=> "total_markets",
                    "value"=> 1
                ],
                3=>[
                    "description"=> "total_products",
                    "value"=> (double)$products[0]["products"]
                ],
            ];
            
            return array(
                'status' => Response::STATUS_OK,
                'data' =>  array(
                    'success' => true,
                    'data' => $data,
                    'message'=> 'Statistics retrieved successfully',
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