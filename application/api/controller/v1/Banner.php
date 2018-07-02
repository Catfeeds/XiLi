<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/30 0030
 * Time: 下午 16:05
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;
use app\api\model\Banner as BannerModel;
use app\api\model\Goods;

class Banner extends BaseController
{
    /*
     * 获取展示banner图url
     * @url /api/v1/banner
     * @http get
     * @return array banner item , code 200
     */
    public function getBanner()
    {
        $banner = BannerModel::setBannerGet();
        return json_encode($banner);
    }

    /*
     * 获取首页展示商品信息
     * @url /api/v1/show/1,2,3  1:爆款推荐，2：新品推荐，：3：热门商品
     * @http get
     * @return array goods item, code 200
     */
    public function getShowGoods()
    {
        $goods = (new Goods())->setGoodsShow();
        return json_encode($goods);
    }
}