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
     * 关联图片表
     */
    public function image()
    {
        return $this->hasMany('GoodsPicture','goods_id','id');
    }

    /*
     * 关联商品属性表
     */
    public function attribute()
    {
        return $this->hasMany('GoodsAttribute','goods_id','id');
    }

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

    /*
     * 获取商品详情
     */
    public function setGoodsGet()
    {
        $request = Request::instance();
        $productID = $request->param('id');
        $Goods = self::with(['image','attribute','attribute.key'])->where('id',$productID)->field('id,name,supermarket_price,shop_price,logo,goods_desc')->find()->toArray();
        $Goods['logo'] = ImageUrl::DOMAINURL.str_replace('\\','/',$Goods['logo']);
        $image = [];
        foreach($Goods['image'] as $k=>$v)
        {
            $Goods['image'][$k] = ImageUrl::DOMAINURL.str_replace('\\','/',$v['picture']);
        }
        return $Goods;
    }

    /*
     * 根据分类id查找商品
     */
    public function setGoodsByCategoryGet()
    {
        $request = Request::instance();
        $categoryID = $request->param('id');
        $goods = Category::with('goodsCat')->where('id',$categoryID)->find()->toArray();
        foreach ($goods['goods_cat'] as $k => $v)
        {
            $goods['goods_cat'][$k]['sm_logo'] = ImageUrl::DOMAINURL.str_replace('\\','/',$v['sm_logo']);
        }
        return $goods;
    }
}