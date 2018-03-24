<?php
/**
 * Created by PhpStorm.
 * User: 最美不过下雨天
 * Date: 2018/2/8
 * Time: 11:47
 */
namespace App\Http\Middleware;

use Closure;

class LoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //检测session中的信息
        if($request->session()->get('userInfo')){

            //检测登陆时间
            $operation = $request->session()->get('operation');
            $time = time();

            //十分钟内无操作 自动清空session
            if(isset($operation) && ($time-$operation>900)){

                //清空session
                session()->forget('userInfo');
                session()->forget('operation');

                //从定位到登陆界面
                return redirect('/');

            }else{
                session(['operation'=>$time]);
                return $next($request);
            }
        }else{
            //从定位到登陆界面
            return redirect('/');
        }

    }
}