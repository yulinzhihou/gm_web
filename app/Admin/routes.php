<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;

Admin::routes();

Route::group([
    'prefix'     => config('admin.route.prefix'),
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('/', 'HomeController@index');
});
/*分区管理-数据库配置*/
Route::group([
    'prefix'     => config('admin.route.prefix').'/zone',
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->resource('zone','Zone\ZoneController');
});
/*分区管理-账号数据*/
Route::group([
    'prefix'     => config('admin.route.prefix').'/zone',
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->resource('account','Zone\AccountController');
});
/*分区管理-角色数据*/
Route::group([
    'prefix'     => config('admin.route.prefix').'/zone',
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->resource("char",'Zone\CharController');
});

/*装备*/
Route::group([
    'prefix'     => config('admin.route.prefix').'/config',
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->resource('equip','Config\EquipController');
});
/*物品*/
Route::group([
    'prefix'     => config('admin.route.prefix').'/config',
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->resource('item','Config\ItemController');
});
/*宝石*/
Route::group([
    'prefix'     => config('admin.route.prefix').'/config',
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->resource('gem','Config\GemController');
});

/*珍兽*/
Route::group([
    'prefix'     => config('admin.route.prefix').'/config',
    'namespace'  => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->resource('pet','Config\PetController');
});
/*在线GM工具-事件类型*/
Route::group([
    'prefix' => config('admin.route.prefix').'/online',
    'middleware' => config('admin.route.middleware'),
    'namespace' => config('admin.route.namespace')
], function (Router $router) {
    $router->resource('event_type','Online\EventTypeController');
});
/*在线GM工具-在线发货*/
Route::group([
    'prefix' => config('admin.route.prefix').'/online',
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware')
], function (Router $router) {
    $router->resource('event','Online\EventlistController');
});


