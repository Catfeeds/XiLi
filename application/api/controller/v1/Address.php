<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/6
 * Time: 11:42
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\validate\Address as AddressValidate;

class Address extends BaseController
{
    /*
     * 更新收货地址
     * @url /api/v1/address
     * @http post
     * @return
     */
    public function addAddress()
    {
        $validate = new AddressValidate();
        $validate->goCheck();
    }
}