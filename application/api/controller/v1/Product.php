<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 14:31
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\model\Goods;

class Product extends BaseController
{
    /*
     * 获取商品详情
     * @url /api/v1/product/id
     * @http get
     * @return array goods item , code 200
     */
    public function getGoods()
    {
        $Goods = (new Goods())->setGoodsGet();
        return json_encode($Goods);
    }

    /*
     * 根据分类id获取商品
     * @url /api/v1/product/category/:id  分类id
     * @http get
     * @return array goods item, code200
     */
    public function getGoodsByCategory()
    {

    }
}