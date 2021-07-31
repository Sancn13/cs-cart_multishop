<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

class SettingsMobile extends AEntity
{
    public function index($id = '', $params = array())
    {
        if($params["app"] == "driver"){
            $setting = [
                "app_name"=> "Smart Delivery",
                "enable_stripe"=> "1",
                "default_tax"=> "10",
                "default_currency"=> "$",
                "fcm_key"=> "AAAAHMZiAQA:APA91bEb71b5sN5jl-w_mmt6vLfgGY5-_CQFxMQsVEfcwO3FAh4-mk1dM6siZwwR3Ls9U0pRDpm96WN1AmrMHQ906GxljILqgU2ZB6Y1TjiLyAiIUETpu7pQFyicER8KLvM9JUiXcfWK",
                "enable_paypal"=> "1",
                "main_color"=> "#25D366",
                "main_dark_color"=> "#25D366",
                "second_color"=> "#043832",
                "second_dark_color"=> "#ccccdd",
                "accent_color"=> "#8c98a8",
                "accent_dark_color"=> "#9999aa",
                "scaffold_dark_color"=> "#2c2c2c",
                "scaffold_color"=> "#fafafa",
                "google_maps_key"=> "AIzaSyDdyth2EiAjU9m9eE_obC5fnTY1yeVNTJU",
                "mobile_language"=> "en",
                "app_version"=> "2.0.0",
                "enable_version"=> "1",
                "default_currency_decimal_digits"=> "2",
                "currency_right"=> "0",
                "distance_unit"=> "km"
            ];
        }
        else if($params["app"] == "market"){
            $setting = [
                "app_name"=> "Smart Delivery",
                "enable_stripe"=> "1",
                "default_tax"=> "10",
                "default_currency"=> "$",
                "fcm_key"=> "AAAAHMZiAQA:APA91bEb71b5sN5jl-w_mmt6vLfgGY5-_CQFxMQsVEfcwO3FAh4-mk1dM6siZwwR3Ls9U0pRDpm96WN1AmrMHQ906GxljILqgU2ZB6Y1TjiLyAiIUETpu7pQFyicER8KLvM9JUiXcfWK",
                "enable_paypal"=> "1",
                "main_color"=> "#25D366",
                "main_dark_color"=> "#25D366",
                "second_color"=> "#043832",
                "second_dark_color"=> "#ccccdd",
                "accent_color"=> "#8c98a8",
                "accent_dark_color"=> "#9999aa",
                "scaffold_dark_color"=> "#2c2c2c",
                "scaffold_color"=> "#fafafa",
                "google_maps_key"=> "AIzaSyDdyth2EiAjU9m9eE_obC5fnTY1yeVNTJU",
                "mobile_language"=> "en",
                "app_version"=> "2.0.0",
                "enable_version"=> "1",
                "default_currency_decimal_digits"=> "2",
                "currency_right"=> "0",
                "home_section_1"=> "search",
                "home_section_2"=> "slider",
                "home_section_3"=> "top_markets_heading",
                "home_section_4"=> "top_markets",
                "home_section_5"=> "trending_week_heading",
                "home_section_6"=> "trending_week",
                "home_section_7"=> "categories_heading",
                "home_section_8"=> "categories",
                "home_section_9"=> "popular_heading",
                "home_section_10"=> "popular",
                "home_section_11"=> "recent_reviews_heading",
                "home_section_12"=> "recent_reviews"
            ];
        }
        else if($params["app"] == "owner"){
            $setting = [
                "app_name"=> "Smart Delivery",
                "enable_stripe"=> "1",
                "default_tax"=> "10",
                "default_currency"=> "$",
                "fcm_key"=> "AAAA50743pk:APA91bEuEa3X8VW3T-XURhSLKzDyxJcRayUOp3qLdDVEvzZjF5zuyRjeepZfMruW88RlBtU28Fnnz6IZrMH3muRtjr6KnH8BUQQ2ql_eHgOS0J-ymXiu0NUfAqL3ENSCIoGo-IJ_iygv",
                "enable_paypal"=> "1",
                "main_color"=> "#25D366",
                "main_dark_color"=> "#25D366",
                "second_color"=> "#043832",
                "second_dark_color"=> "#ccccdd",
                "accent_color"=> "#8c98a8",
                "accent_dark_color"=> "#9999aa",
                "scaffold_dark_color"=> "#2c2c2c",
                "scaffold_color"=> "#fafafa",
                "google_maps_key"=> "AIzaSyDdyth2EiAjU9m9eE_obC5fnTY1yeVNTJU",
                "mobile_language"=> "en",
                "app_version"=> "1.9.0",
                "enable_version"=> "1",
                "currency_right"=> "0",
                "default_currency_decimal_digits"=> "2",
                "enable_razorpay"=> "1"
            ];
        }
        
        return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'data' => $setting,
                'message'=> 'Settings retrieved successfully',
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