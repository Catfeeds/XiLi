<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/6
 * Time: 14:27
 */

namespace app\api\validate;


class Address extends BaseValidate
{
    protected $rule = [
        'name' => 'require|isNotEmpty',
        'phone' => 'require|isMobile',
        'prov' => 'require|isNotEmpty',
        'city' => 'require|isNotEmpty',
        'dist' => 'require|isNotEmpty',
        'address' => 'require|isNotEmpty',
    ];
}