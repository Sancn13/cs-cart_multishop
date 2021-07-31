<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

class AddressMobile extends AEntity
{
    public function index($id = '', $params = array())
    {   
        $data = [];

        if($params['type'] == 'location'){
            $data_field = [
                "id" => "?:address_deliveries.id",
                "description" => "?:address_deliveries.description",
                "address" => "?:address_deliveries.address",
                "latitude" => "?:address_deliveries.latitude",
                "longitude" => "?:address_deliveries.longitude",
                "is_default" => "?:address_deliveries.is_default",
                "user_id" => "?:address_deliveries.user_id",
            ];
    
            $data = db_get_array('SELECT ' . implode(', ', $data_field) . ' FROM ?:address_deliveries WHERE ?:address_deliveries.user_id =' . $params['user_id']);
    
            for($i=0;$i<count($data);$i++){
                if($data[$i]["is_default"] == '0'){
                    $data[$i]["is_default"] = false;
                }
                else{
                    $data[$i]["is_default"] = true;
                }
                $data[$i]["latitude"] = (double)$data[$i]["latitude"];
                $data[$i]["longitude"] = (double)$data[$i]["longitude"];
                $data[$i]["user_id"] = (int)$data[$i]["user_id"];
                $data[$i]["created_at"] = "2021-04-02 02:25:43";
                $data[$i]["updated_at"] = "2021-04-02 02:25:43";
                $data[$i]["custom_fields"] = [];
            }
        }
        else if($params['type'] = 'user'){
            $data_field = [
                "email"=> "?:users.email",
                "b_firstname"=> "?:user_profiles.b_firstname",
                "b_lastname"=> "?:user_profiles.b_lastname",
                "b_address"=> "?:user_profiles.b_address",
                "b_city"=> "?:user_profiles.b_city",
                "b_state"=> "?:user_profiles.b_state",
                "b_country"=> "?:user_profiles.b_country",
                "b_zipcode"=> "?:user_profiles.b_zipcode",
                "b_phone"=> "?:user_profiles.b_phone",
                "s_firstname"=> "?:user_profiles.s_firstname",
                "s_lastname"=> "?:user_profiles.s_lastname",
                "s_address"=> "?:user_profiles.s_address",
                "s_city"=> "?:user_profiles.s_city",
                "s_state"=> "?:user_profiles.s_state",
                "s_country"=> "?:user_profiles.s_country",
                "s_zipcode"=> "?:user_profiles.s_zipcode",
                "s_phone"=> "?:user_profiles.s_phone"
            ];

            $data = db_get_row('SELECT ' . implode(', ', $data_field) . ' FROM ?:user_profiles,?:users WHERE ?:users.user_id = ?:user_profiles.user_id AND ?:user_profiles.user_id =' . $params['user_id']);
        }


        // $data_demo = [
        //     0=>[
        //         "id"=> 17,
        //         "description"=> null,
        //         "address"=> "P. Tôn Đức Thắng, Quốc Tử Giám, Đống Đa, Hà Nội, Vietnam",
        //         "latitude"=> 21.02776448338126,
        //         "longitude"=> 105.83415973931551,
        //         "is_default"=> false,
        //         "user_id"=> 1,
        //         "created_at"=> "2021-06-08 04:02:53",
        //         "updated_at"=> "2021-06-08 04:02:53",
        //         "custom_fields"=> [],
        //     ],
        //     1=>[
        //         "id"=> 6,
        //         "description"=> "Doloremque debitis placeat eos molestias sed dolorem.",
        //         "address"=> "41771 Lowe Landing Suite 669 East Natasha, LA 32088",
        //         "latitude"=> 18.796893,
        //         "longitude"=> -16.513519,
        //         "is_default"=> false,
        //         "user_id"=> 1,
        //         "created_at"=> "2021-04-02 02:25:43",
        //         "updated_at"=> "2021-04-02 02:25:43",
        //         "custom_fields"=> [],
        //     ]
        // ];

        return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                //'data_demo' => $data_demo,
                'data' => $data,
                'message'=> 'Delivery Addresses retrieved successfully',
            ),
        );   

        
    }

    public function create($params)
    {
        $data = [];
        $check_address = [];
        $check_address = db_get_array('SELECT ?:address_deliveries.id FROM ?:address_deliveries WHERE ?:address_deliveries.user_id =' . $params['user_id'] .' AND ?:address_deliveries.address ="' .$params['address'].'"');
        if(count($check_address) == 0 && $params["address"] != null){
            
            db_query('INSERT INTO ?:address_deliveries (address, description, latitude, longitude,is_default,user_id,created_at, updated_at) 
            VALUES ("'.$params["address"].'","'.$params["description"].'","'.$params["latitude"].'","'.$params["longitude"].'","'.$params["is_default"].'","'.$params["user_id"].'","'. time() .'","'. time() .'")');
    
            $data_db = db_get_array('SELECT * FROM ?:address_deliveries WHERE ?:address_deliveries.user_id ='.$params['user_id'] .' AND ?:address_deliveries.address="'.$params['address'].'"');
    
            $data = [
                "address"=> $params['address'],
                "description"=> $params['description'],
                "latitude"=> (double)$params['latitude'],
                "longitude"=> (double)$params['longitude'],
                "is_default"=> false,
                "user_id"=> (double)$params['user_id'],
                "updated_at"=> time(),
                "created_at"=> time(),
                "id"=> (int)$data_db[0]["id"],
                "custom_fields"=> [],
            ];
        }
        return array(
            'status' => Response::STATUS_CREATED,
            'data' =>  array(
                'success' => true,
                'data' => $data,
                'message'=> 'Delivery Addresses retrieved successfully',
            ),
        );   
    }

    public function update($id, $params)
    {

        db_query('UPDATE ?:address_deliveries SET description = "' . $params['description'] .'" WHERE ?:address_deliveries.id =' . $id);

        $data_db = db_get_array('SELECT * FROM ?:address_deliveries WHERE ?:address_deliveries.id =' . $id);

        $data = [
            "address"=> $data_db[0]["address"],
            "description"=> $data_db[0]["description"],
            "latitude"=> (double)$data_db[0]["latitude"],
            "longitude"=> (double)$data_db[0]["longitude"],
            "is_default"=> false,
            "user_id"=> (double)$data_db[0]["user_id"],
            "updated_at"=> time(),
            "created_at"=> time(),
            "id"=> (int)$data_db[0]["id"],
            "custom_fields"=> [],
        ];

        return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'data' => $data,
                'message'=> 'Delivery Addresses retrieved successfully',
            ),
        );   
    }

    public function delete($id)
    {
        $data = db_get_array('SELECT * FROM ?:address_deliveries WHERE ?:address_deliveries.id='.$id);
        for($i=0;$i<count($data);$i++){
            $data[$i]['id'] = (int)$data[$i]['id'];
            $data[$i]['user_id'] = (int)$data[$i]['user_id'];
            $data[$i]['longitude'] = (double)$data[$i]['longitude'];
            $data[$i]['latitude'] = (double)$data[$i]['latitude'];
            if($data[$i]['is_default'] == 0){
                $data[$i]['is_default'] = false;
            }
            else{
                $data[$i]['is_default'] = true;
            }
        }
        db_query('DELETE FROM ?:address_deliveries WHERE ?:address_deliveries.id='.$id);

        return array(
            'status' => Response::STATUS_CREATED,
            'data' =>  array(
                'success' => true,
                'data' => $data[0],
                'message'=> 'Delivery Addresses Deleted successfully',
            ),
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
}
?>