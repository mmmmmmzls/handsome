<?php
/**
 * Created by PhpStorm.
 * User: 最美不过下雨天
 * Date: 2018/1/30
 * Time: 21:52
 */
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;

class IndexController extends Controller{

    //加载网站页面
    public function Index(){

        //判断是否存在session
        if(session()->get('userInfo')){

            //获取用户权限
            $roleName = session('userInfo')['roleName'];

            session(['operation'=>time()]);//刷新登录时间
            return view("home."."$roleName");
        }else{
            return view("home.login");
        }

    }

    //加载zmj分页
    public function normal(){
        return view("home.normal");
    }
    public function gray(){
        return view("home.gray");
    }

}