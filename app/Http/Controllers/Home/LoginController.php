<?php
/**
 * Created by PhpStorm.
 * User: 最美不过下雨天
 * Date: 2018/1/30
 * Time: 21:52
 */
namespace App\Http\Controllers\Home;

use DB;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;

class LoginController extends Controller{

    //加载用户登录页面
//    public function getIndex(){
//        return view("home.login");
//    }

    //用户登录
    public function login(LoginRequest $request){

        //接收数据
        $username = $request->input('username');
        $password = $request->input('password');

//        //判断 (loginRequest里面有判断,但是前端并不能弹出。如果不引用LoginRequest,那么就可以使用一下代码)
//        if($username == ''){
//            return ajaxReturn(0,'请输入账号','');
//        }
//        if($password == ''){
//            return ajaxReturn(0,'请输入密码','');
//        }

        //查询数据库
        $userInfo = DB::table('user')->where('username', $username)->first();
        $userInfo = json_decode(json_encode($userInfo), true);

        //判断用户是否存在
        if(!$userInfo){
            return ajaxReturn(0,'该用户不存在','');
        }

        //判断用户权限
        $status = $userInfo['status'];
        if($status == 0){
            return ajaxReturn(0,'对不起,当前用户无权访问','');
        }

        //判断密码是否正确
        $pass = $userInfo['passWord'];
        if(md5($password) != $pass){
            return ajaxReturn(0,'用户密码错误','');
        }else{
            //修改用户登录次数+1

            //记录用户登录时间和IP


            session(['userInfo'=>$userInfo]);
            session(['operation'=>time()]);
            return ajaxReturn(1,'登录成功','');
        }

    }

    //用户退出登录操作
    public function LoginOut(){

        //清空session
        session()->forget('userInfo');
        session()->forget('operation');
        return redirect('/');

    }

}