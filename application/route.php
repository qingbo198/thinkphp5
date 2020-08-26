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

//前台路由分组
Route::group(['name' => 'index', 'method' => 'get'], [
    'index' => ['index/index/index', ['id' => '\d{2,4}']],//首页 vue and bootstrap test
    'shop' => ['index/index/shop', ['id' => '\d{2,4}']],//购物车
    'bootstrap' => ['index/bootstrap/index'],//bootstrap 首页
    'angular' => ['index/angular/index'],//bootstrap 首页 angular and bootsroap test

]);
//后台路由分组
Route::group(['name' => 'admin', 'method' => 'get'], [
    'i' => ['admin/index/index', ['id' => '\d{2,4}']],
    // 's' => ['admin/index/self'] ,

]);