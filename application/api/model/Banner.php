<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/30 0030
 * Time: 下午 16:15
 */

namespace app\api\model;


use app\lib\enum\ImageUrl;

class Banner extends BaseModel
{
    /*
     * 获取banner图
     * @return banner
     */
    public static function setBannerGet()
    {
        $banner = self::select();
        $bannerUrl = [];
        foreach ($banner as $key => $value)
        {
            $value['pic'] = str_replace('\\', '/',$value['pic']);
            $bannerUrl[$key] = ImageUrl::DOMAINURL.$value['pic'];
        }
        return $bannerUrl;
    }
}