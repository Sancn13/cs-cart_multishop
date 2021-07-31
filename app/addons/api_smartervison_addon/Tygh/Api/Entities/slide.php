<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

class Slide extends AEntity
{
    public function index($id = '', $params = array())
    {   
        // $market_name = db_get_array('SELECT ?:companies.company FROM ?:companies');

        // $market_name_str = ''; 

        // for($i=0;$i<count($market_name);$i++){
        //     $market_name_str = $market_name_str . '"' . $market_name[$i]['company'] . '", ';
        // }

        // $condition = '?:banner_descriptions.url like (' . $market_name_str .' "product_id")';

        $fields = [
            "id" => "?:banners.banner_id as id",
            "text" => "?:banner_descriptions.banner as text",
            "status" => "?:banners.status",
            "url" => "?:banner_descriptions.url",

        ];
        $from = [
            "?:banners",
            "?:banner_images",
            "?:banner_descriptions",
        ];

        $where = [
            "?:banners.banner_id = ?:banner_images.banner_id",
            "?:banners.banner_id = ?:banner_descriptions.banner_id",
            //$condition
        ];

        $data = db_get_array('SELECT ' . implode(', ', $fields) . ' FROM ' . implode(',',$from) . ' Where ' . implode(' AND ', $where));



        for($i=0;$i<count($data);$i++){
            $banner_params = [
                "item_ids" => $data[$i]["id"],
            ];
            $data_banner = fn_get_banners($banner_params,'en',0);
            $data[$i]["text_position"] = "bottom_end";
            $data[$i]["text_color"] = "#25d366";
            $data[$i]["background_color"] = "#ccccdd";
            $data[$i]["indicator_color"] = "#25d366";
            $data[$i]["image_fit"] = "cover";
            $data[$i]["has_media"] = true;
            if($data[$i]["status"] == "A"){
                $data[$i]["enabled"] = true;
            }
            else{
                $data[$i]["enabled"] = false;
            }
            $data[$i]["market_id"] = $this->getId($data[$i]["url"],2);
            $data[$i]["product_id"] = $this->getId($data[$i]["url"],1);
            // if($data[$i]["market_id"] != null || $data[$i]["product_id"] != null){
            //     $data[$i]["button"] = "Get it";
            //     $data[$i]["button_color"] = "#25d366";
            // }
            $data[$i]["button"] = "Get it";
            $data[$i]["button_color"] = "#25d366";
            $data[$i]["media"] = [
                0=>[
                    "id"=> 165,
                    "model_type"=> "App\Models\Slide",
                    "model_id"=> 2,
                    "collection_name"=> "image",
                    "name"=> "slide3",
                    "file_name"=> "slide3.jpg",
                    "mime_type"=> "image/jpeg",
                    "disk"=> "public",
                    "size"=> 127278,
                    "manipulations"=> [],
                    "responsive_images"=> [],
                    "order_column"=> 162,
                    "created_at"=> "2020-09-12 21:04:57",
                    "updated_at"=> "2020-09-12 21:04:57",
                    "url"=> $data_banner[0][0]["main_pair"]["icon"]["image_path"],
                    "thumb"=> $data_banner[0][0]["main_pair"]["icon"]["image_path"],
                    "icon"=> $data_banner[0][0]["main_pair"]["icon"]["image_path"],
                    "formated_size"=> "124.3 KB",
                    "custom_properties"=> [
                        "uuid"=> "05b2865e-1a91-4922-80d0-ad7184093133",
                        "user_id"=> 1,
                        "generated_conversions"=> [
                        "thumb"=> true,
                        "icon"=> true
                        ]
                    ]
                ],
            ];
        }

        $data_demo = [
           0=>[
            "id"=> 2,
            "order"=> 0,
            "text"=> "Aut excepturi quos sit eos.",
            "button"=> "Get Discount",
            "text_position"=> "bottom_end",
            "text_color"=> "#25d366",
            "button_color"=> "#25d366",
            "background_color"=> "#ccccdd",
            "indicator_color"=> "#25d366",
            "image_fit"=> "cover",
            "product_id"=> null,
            "market_id"=> 1,
            "enabled"=> true,
            "created_at"=> "2020-09-12 21:01:37",
            "updated_at"=> "2020-09-12 21:07:00",
            "custom_fields"=> [],
            "has_media"=> true,
            "media"=> [
                0 =>[
                    "id"=> 165,
                    "model_type"=> "App\Models\Slide",
                    "model_id"=> 2,
                    "collection_name"=> "image",
                    "name"=> "slide3",
                    "file_name"=> "slide3.jpg",
                    "mime_type"=> "image/jpeg",
                    "disk"=> "public",
                    "size"=> 127278,
                    "manipulations"=> [],
                    "responsive_images"=> [],
                    "order_column"=> 162,
                    "created_at"=> "2020-09-12 21:04:57",
                    "updated_at"=> "2020-09-12 21:04:57",
                    "url"=> "https://markets.smartersvision.com/storage/app/public/165/slide3.jpg",
                    "thumb"=> "https://markets.smartersvision.com/storage/app/public/165/conversions/slide3-thumb.jpg",
                    "icon"=> "https://markets.smartersvision.com/storage/app/public/165/conversions/slide3-icon.jpg",
                    "formated_size"=> "124.3 KB",
                    "custom_properties"=> [
                        "uuid"=> "05b2865e-1a91-4922-80d0-ad7184093133",
                        "user_id"=> 1,
                        "generated_conversions"=> [
                        "thumb"=> true,
                        "icon"=> true
                        ]
                    ]
                ]
            ],
           ]
        ];
        return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'data' => $data,
                // 'data_1' => $data_banner[0][0]["main_pair"]["icon"]["image_path"],
                // 'data_2' => $data,
                //'data_3' => $condition,
                'message'=> 'Slide retrieved successfully',
            ),
        );    
    }

    public function getId($url,$mode){
        $data = "";
        $market_id = null;
        $product_id = null;
        $vendor = db_get_array('SELECT ?:companies.company,?:companies.company_id FROM ?:companies');

        $check_product_id = strpos($url,"product_id");

        for($i=0;$i<count($vendor);$i++){

            $check_market_id = strpos($url,$vendor[$i]["company"]);

        }

        if($check_product_id != null){

            $product_id =str_replace("index.php?dispatch=products.view&product_id=","",$url);

        }
        else if($check_product_id == null && $check_market_id != null){

            $market_id = $vendor[$i]['company_id'];

        }
        else{

            $data = null;
        }

        if($mode == 1){
            $data = $product_id;
        }
        else if($mode == 2){
            $data = $market_id;
        }
        else{
            $data = null;
        }

        return $data;
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