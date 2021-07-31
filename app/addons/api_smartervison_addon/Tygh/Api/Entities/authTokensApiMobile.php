<?php
/***************************************************************************
 *                                                                          *
 *   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
 *                                                                          *
 * This  is  commercial  software,  only  users  who have purchased a valid *
 * license  and  accept  to the terms of the  License Agreement can install *
 * and use this program.                                                    *
 *                                                                          *
 ****************************************************************************
 * PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
 * "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
 ****************************************************************************/

namespace Tygh\Api\Entities;

use Tygh\Api\AEntity;
use Tygh\Api\Response;

use Tygh\Api;

class AuthTokensApiMobile extends AEntity
{
    public function index($id = '', $params = array())
    {
        return array(
            'status' => Response::STATUS_METHOD_NOT_ALLOWED,
            'data' => array()
        );
    }

    /**
     * Creates or updates auth token for requests.
     *
     * @param array $params Request
     *
     * @return array Auth status and data. On success data contains auth token and token time-to-live in seconds.
     *               To determine token expiry time, add TTL to current timestamp.
     */
    public function create($params)
    {
        $status = Response::STATUS_BAD_REQUEST;
        $data = array();

        $email = $this->safeGet($params, 'email', '');
        $password = $this->safeGet($params, 'password', '');

        if (!$email) {
            $data['message'] = __('api_required_field', array(
                '[field]' => 'email'
            ));
        } elseif (!$password) {
            $data['message'] = __('api_required_field', array(
                '[field]' => 'password'
            ));
        } else {
            $status = Response::STATUS_NOT_FOUND;

            list($user_exists, $user_data, $login, $password, $salt) = fn_auth_routines(
                array(
                    'user_login' => $email,
                    'password'   => $password,
                ),
                array()
            );

            if ($user_data && fn_user_password_verify((int) $user_data['user_id'], $password, (string) $user_data['password'], $salt)) {
                list($token, $expiry_time) = fn_get_user_auth_token($user_data['user_id']);

                $status = Response::STATUS_CREATED;
                $data = array(
                    'token' => $token,
                    'ttl'   => $expiry_time - TIME,
                    'user_id' => $user_data['user_id']
                );
            }
        }

        return array(
            'status' => $status,
            'data' => $data
        );
    }

    public function update($id, $params)
    {
        return array(
            'status' => Response::STATUS_METHOD_NOT_ALLOWED,
            'data' => array()
        );
    }

    public function delete($id)
    {
        return array(
            'status' => Response::STATUS_METHOD_NOT_ALLOWED,
            'data' => array()
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

    public function privilegesCustomer()
    {
        return array(
            'index'  => true,
            'create' => true,
            'update' => false,
            'delete' => false,
        );
    }

    public static function generateKey()
    {
        $length = Api::API_KEY_LENGTH;
        $key = "";

        for ($i = 1; $i <= $length; $i++) {
            $chr = rand(0, 1) ? (chr(rand(65, 90))) : (chr(rand(48, 57)));

            if (rand(0, 1)) {
                $chr = strtolower($chr);
            }

            $key .= $chr;
        }

        return $key;
    }

}
