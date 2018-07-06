<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/6
 * Time: 14:54
 */

namespace app\api\controller\v1;

use app\api\service\UserToken;
use app\api\validate\Token as TokenValidate;

class Token
{
    public function getToken($code='')
    {
        (new TokenValidate())->goCheck();
        $ut = new UserToken($code);
        $token = $ut->get();
        return $token;
    }
}