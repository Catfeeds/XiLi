<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 20:06
 */

namespace app\api\model;


class Category extends BaseModel
{
    protected $hidden = [
        'pid','create_time','update_time'
    ];

    /*
     * 获取分类
     */
    public function setCategoryGet()
    {
        $category = self::where('pid','neq',0)->select();
        return $category;
    }
}