<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//网站首页
Route::get('/','Home\IndexController@index');

//登录
Route::post("login","Home\LoginController@login");

//退出登录
Route::any('loginOut',"Home\LoginController@LoginOut");

//设置中间件
Route::group(['middleware' => 'login'],function(){

    //网站主页
    Route::get("index","Home\IndexController@index");

    //zmj分页
    Route::get("normal","Home\IndexController@normal");
    Route::get("gray","Home\IndexController@gray");

});

