<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 20:41
 */

namespace app\api\model;


class GoodsCat extends BaseModel
{
    public function goods()
    {
        return $this->hasMany('Goods','goods_id','id');
    }
}