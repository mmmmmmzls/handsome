<!DOCTYPE html>
<!--[if IE 9 ]><html class="ie9"><![endif]-->
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <meta name="format-detection" content="telephone=no">
        <meta charset="UTF-8">

        <meta name="description" content="Violate Responsive Admin Template">
        <meta name="keywords" content="Super Admin, Admin, Template, Bootstrap">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link rel="bookmark"  type="image/x-icon"  href="/public/home/img/icon/logo.ico"/>
        <link rel="shortcut icon" href="/public/home/img/icon/logo.ico">

        <title>Super ME -- ZLS</title>
            
        <!-- CSS -->
        <link href="/public/home/css/bootstrap.min.css" rel="stylesheet">
        <link href="/public/home/css/form.css" rel="stylesheet">
        <link href="/public/home/css/style.css" rel="stylesheet">
        <link href="/public/home/css/animate.css" rel="stylesheet">
        <link href="/public/home/css/generics.css" rel="stylesheet">
    </head>
    <body id="skin-blur-violate">
        <section id="login">
            <header>
                <h1>SUPER ME</h1>
                <p>welcome to my house.LOL</p>
                <p>author by:ZLS</p>
            </header>
        
            <div class="clearfix"></div>
            
            <!-- Login -->
            <form class="box tile animated active" id="box-login">
                <h2 class="m-t-0 m-b-15">请登录</h2>
                <input type="text" class="login-control m-b-10" style="height: 50px" id="username" placeholder="请输入账号">
                <input type="password" class="login-control" style="height: 50px" id="password" placeholder="请输入密码">
                <input type="text" class="login-control" style="width:180px;height: 50px;margin-top:5px; " id="verify" placeholder="请输入图片中的验证码">
                <input type="button" id="code"  onclick="createCode()" class="login-control" style="height: 50px;width: 276px;">
                <div class="checkbox m-b-20">
                    <label>
                        <input type="checkbox">
                        记住我
                    </label>
                </div>
                <input type="button" value="登陆" class="btn btn-sm m-r-5" style="height: 40px;width:100px" onclick="checkLogin();">

                <small>
                    <a class="box-switcher" data-switch="box-register" href="">还没有账号?</a> or
                    <a class="box-switcher" data-switch="box-reset" href="">忘记密码?</a>
                </small>
                <small>
                    <a style="color:red;float:right;margin-top:15px;font-size: 13px" href="">游客模式</a>
                </small>
            </form>
            
            <!-- Register -->
            <form class="box animated tile" id="box-register">
                <h2 class="m-t-0 m-b-15">注册</h2>
                <input type="text" class="login-control m-b-10" placeholder="请输入用户名">
                <input type="password" class="login-control m-b-10" placeholder="请输入密码">
                <input type="password" class="login-control m-b-10" placeholder="请再次输入密码">
                <input type="text" class="login-control m-b-10" placeholder="请输入邮箱">
                <input type="text" class="login-control m-b-10" placeholder="请输入邮箱中的验证码">

                <button class="btn btn-sm m-r-5">注册</button>

                <small><a class="box-switcher" data-switch="box-login" href="">已经拥有登录账号?</a></small>
            </form>

            <!-- Forgot Password -->
            <form class="box animated tile" id="box-reset">
                <h2 class="m-t-0 m-b-15">重置密码</h2>
                <p>最好的充值密码的方法就是联系网站本人---zls</p>
                <input type="text" class="login-control m-b-10" placeholder="请输入用户名">
                <input type="email" class="login-control m-b-20" placeholder="请输入邮箱地址">

                <button class="btn btn-sm m-r-5">重置密码</button>

                <small><a class="box-switcher" data-switch="box-login" href="">已经拥有登录密码?</a></small>
            </form>
        </section>                      
        
        <!-- Javascript Libraries -->
        <!-- jQuery -->
        <script src="/public/home/js/jquery.min.js"></script> <!-- jQuery Library -->
        
        <!-- Bootstrap -->
        <script src="/public/home/js/bootstrap.min.js"></script>
        
        <!--  Form Related -->
        <script src="/public/home/js/icheck.js"></script> <!-- Custom Checkbox + Radio -->
        
        <!-- All JS functions -->
        <script src="/public/home/js/functions.js"></script>

        <!--引入图片验证码JS-->
        <script type="text/javascript" src="/public/home/js/login/verify.js"></script>

        <!--引入弹出窗-->
        <script type="text/javascript" src="/public/home/js/layer/layer.js"></script>

        <!--引入登录JS-->
        <script type="text/javascript" src="/public/home/js/login/login.js"></script>

        <!--键盘按下回车事件 相当于submit-->
        <script>

            document.onkeydown = function(evt){
                var evt = window.event?window.event:evt;
                if (evt.keyCode==13) {
                    checkLogin();
                }
            }

        </script>

    </body>
</html>
