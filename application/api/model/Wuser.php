<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/6
 * Time: 15:20
 */

namespace app\api\model;


class Wuser extends BaseModel
{
    public static function getByOpenID($openid)
    {
        $user = self::where('openid','=',$openid)
            ->find();
        return $user;
    }
}