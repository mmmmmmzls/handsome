$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//执行登录提交
function checkLogin(){

	//接收数据
	var username = $("#username").val();
	var password = $("#password").val();
	var verify = $("#verify").val();
	var code = $("#code").val();

    if(username == ''){
	    layer.msg("请输入用户名");
	    return;
    }
    if(password == ''){
        layer.msg("请输入密码");
        return;
    }
    if(verify == ''){
        layer.msg("请输入验证码");
        return;
    }
    if(verify.toUpperCase() != code){
        layer.msg("验证码输入错误,请重新输入");
        createCode();
        return;
    }

	$.post("login",{username:username,password:password},function(data){
        if(data.status == 1){
            layer.msg(data.message,{time:2000});
            window.location="/index";
        }else{
            layer.msg(data.message,{time:2000});
        }
    },'JSON');

}