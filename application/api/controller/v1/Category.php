<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/3
 * Time: 20:03
 */

namespace app\api\controller\v1;


use app\api\controller\BaseController;

use app\api\model\Category as CategoryModel;

class Category extends BaseController
{
    /*
     * 获取全部分类
     * @url /api/v1/category/all
     * @http get
     * @return array Category item, code 200
     */
    public function getCategory()
    {
        $category = (new CategoryModel())->setCategoryGet();
        return json_encode($category);
    }
}