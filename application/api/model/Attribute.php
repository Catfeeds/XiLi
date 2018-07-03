<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 19:40
 */

namespace app\api\model;


class Attribute extends BaseModel
{
    protected $hidden = [
        'choice','values','type_id','create_time','update_time'
    ];
}