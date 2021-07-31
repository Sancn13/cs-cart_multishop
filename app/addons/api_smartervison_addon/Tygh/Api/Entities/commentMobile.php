<?php
namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

class SettingsDriver extends AEntity
{
    public function index($id = '', $params = array())
    {

        $fields = [

        ];
        $from = [
            
        ];
        $where = [

        ];


        $data = db_get_array('SELECT ' . implode(', ', $fields) . ' FROM ' . implode(',',$from) . ' Where ' . implode(' AND ', $where));
        
        return array(
            'status' => Response::STATUS_OK,
            'data' =>  array(
                'success' => true,
                'data' => $data,
                'message'=> 'Slide retrieved successfully',
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