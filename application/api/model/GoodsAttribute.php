<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 19:37
 */

namespace app\api\model;


class GoodsAttribute extends BaseModel
{
    protected $hidden = [
        'goods_id','attribute_id','attribute_price'
    ];

    public function key()
    {
        return $this->belongsTo('Attribute','attribute_id','id');
    }
}