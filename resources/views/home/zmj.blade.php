<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<title>Ponsin'Gallery</title>
	<style type="text/css">
		#font{
			text-align: center;
			margin-top: 400px;
			margin-left: 1px;
		}
	</style>
</head>

<body style="background-color: #ffffff;background-image: url('/public/home/zmj/2.jpg');background-size:cover; background-repeat: no-repeat;  overflow: hidden;">
<div>
	<font color="#FF0000" style="text-align: center "><h1>Ponsin</h1></font>
	<h2 style="text-align: center "><a href="normal">Normal Color</a></h2>
	<h2 style="text-align: center "><a href="gray">Gray Color</a></h2>
	<div id="font">
	<font color="#006000"><h3 style="font-family:楷体">你是否还记得那年那天那个晚上的闪电？</h3></font>
	</div>
	<!--随机播放音频-->
	<script type="text/javascript"> 
		
		var bodyBgs = [];
        bodyBgs[0] = "/public/home/zmj/1.mp3";
        bodyBgs[1] = "/public/home/zmj/2.mp3";
        bodyBgs[2] = "/public/home/zmj/3.mp3";
        bodyBgs[3] = "/public/home/zmj/4.mp3";
		var randomBgIndex = Math.round(Math.random() * 3); 
		document.write('<audio src=\''+bodyBgs[randomBgIndex]+ '\'autoplay=\'autoplay\' loop></audio>'); 

	</script>
	<!--键盘按下ESC事件-->
	<script type="text/javascript">

        document.onkeydown = function(evt){
            var evt = window.event?window.event:evt;
            if (evt.keyCode==27) {
                window.location="/loginOut";
            }
        }

	</script>
</div>
</body>
</html>
