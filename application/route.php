<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;


//首页展示
Route::get('api/:version/banner','api/:version.Banner/getBanner');
Route::get('api/:version/show/:show','api/:version.Banner/getShowGoods');

//商品详情
Route::get('api/:version/product/:id','api/:version.Product/getGoods');

//商品分类
Route::get('api/:version/category/all','api/:version.Category/getCategory');