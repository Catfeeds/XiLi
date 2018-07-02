<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/2
 * Time: 19:46
 */

namespace app\api\model;


use app\lib\enum\ImageUrl;
use think\Request;

class Goods extends BaseModel
{
    /*
     * 获取展示栏目商品
     */
    public function setGoodsShow()
    {
        $request = Request::instance();
        $params = $request->param('show');
        switch ($params)
        {
            case 1:
                $where = 'is_best';
                break;
            case 2:
                $where = 'is_new';
                break;
            case 3;
                $where = 'is_hot';
                break;
        }
        $Goods = self::where($where,1)->limit(0,2)->order('id desc')->field('id,name,supermarket_price,shop_price,logo')->select();
        foreach ($Goods as $key => $value)
        {
            $value['logo'] = str_replace('\\', '/',$value['logo']);
            $Goods[$key]['logo'] = ImageUrl::DOMAINURL.$value['logo'];
        }
        return $Goods;
    }
}