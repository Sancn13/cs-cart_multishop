<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;
use Tygh\Api\Entities\CartsMobile;

class Market extends AEntity
{
    public function index($id = '', $params = array())
    {   
        
        $data = $this->getMarket($params['company_id']);

        return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'data' => $data,
                'message'=> 'Market retrieved successfully',
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

    public function getMarket($company_id){

        $tax = (new CartsMobile) -> calculateTax();

        $fields = [
            "id"=> "?:companies.company_id as id",
            "name"=> "?:companies.company as name",
            "description"=> "?:company_descriptions.company_description as description",
            "address"=> "?:companies.address",
            "phone"=> "?:companies.phone",
            "infomation"=> "?:company_descriptions.terms as infomation",
            "available_for_delivery"=> "?:companies.shippings",
            "rate"=> "0 as rate",
            "image"=>"?:images.image_path as image",
            "longitude" => "?:vendor_locations.lng as longitude",
            "latitude" => "?:vendor_locations.lat as latitude",
        ];
        $from = [
            '?:companies',
            '?:company_descriptions',
            '?:logos',
            '?:images_links',
            '?:images',
            '?:vendor_locations',
        ];
        $where = [
            '?:companies.company_id = ?:company_descriptions.company_id',
            '?:companies.company_id = ?:logos.company_id',
            '?:logos.logo_id = ?:images_links.object_id',
            '?:images.image_id = ?:images_links.image_id',
            '?:images_links.object_type = "logos"',
            '?:logos.type = "theme"',
            '?:companies.status = "A"',
            '?:vendor_locations.company_id = ?:companies.company_id',
            
        ];

        if($company_id != 0){
            array_push($where,"?:companies.company_id = $company_id");
        }

        $data = db_get_array('SELECT ' . implode(', ', $fields) . ' FROM ' . implode(',',$from) . ' Where ' . implode(' AND ', $where));
        for($i = 0; $i< count($data);$i++){
            $data[$i]["latitude"] = (double)$data[$i]["latitude"];
            $data[$i]["longitude"] = (double)$data[$i]["longitude"];
            $data[$i]["image"] = 'http://192.168.56.1/cscmultiShop/images/logos/1/' . $data[$i]["image"];
            $data[$i]["admin_commission"] = 0;
            //$data[$i]["delivery_fee"] = 0;
            $data[$i]["default_tax"] = $tax;
            $data[$i]["created_at"] = "2020-04-12 16:50:58";
            $data[$i]["updated_at"] = "2021-04-08 06:40:51";
            $data[$i]["custom_field"] = array();
            $data[$i]["active"] = true;
            $data[$i]["closed"] = false;
            $data[$i]["distance"] = 0;
            $data[$i]["has_media"] = false;
            $data[$i]["available_for_delivery"] = true;
            $data[$i]["media"] = [
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
                    "url"=> $data[$i]["image"],
                    "thumb"=> $data[$i]["image"],
                    "icon"=> $data[$i]["image"],
                    "formated_size"=> "93.1 KB"
                ]
            ];
            $delivery_range = db_get_row('SELECT ?:profile_fields_data.value as delivery_range FROM ?:profile_fields,?:profile_fields_data WHERE ?:profile_fields.field_id = ?:profile_fields_data.field_id AND ?:profile_fields.field_name = "delivery_range" AND ?:profile_fields_data.object_type = "S" AND ?:profile_fields_data.object_id=' . $data[$i]['id']);

            $data[$i]["delivery_range"] = (double)$delivery_range['delivery_range'];

        }
        return $data;
    }
}
?>