<?php if (!defined('THINK_PATH')) exit();?>﻿
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>后台登录页面</title>
<meta name="viewport" content="width=device-width">
<link href="/bookstore/Public/css/base.css" rel="stylesheet" type="text/css">
<link href="/bookstore/Public/css/login.css" rel="stylesheet" type="text/css">
<script src="/bookstore/Public/js/jquery.min.js" type="text/javascript" charset="utf-8"></script>
</head>
<body>

<div class="login">
<form method="post" id="form" action="<?php echo U('Admin/Login/login');?>">
	<div class="logo"></div>
    <div class="login_form">
    	<div class="user">
        	<input class="text_value" value="" name="admin_name" type="text" id="username" placeholder="请输入用户名">
            <input class="text_value" value="" name="admin_pwd" type="password" id="password" placeholder="请输入密码">
        </div>
        <button class="button" id="submit" type="submit">登录</button>
    </div>
    
    <div id="tip"></div>
    <div class="foot">
    	欢迎访问后台
    </div>
    </form>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$(".button").click(function(){
			if($(" #username ").val() == ''){
				if($(" #password ").val() == ''){
					alert("请输入用户名和密码");
					return false;
				}else{
					alert("请输入用户名");
					return false;
				}
			}else if($(" #password ").val() == ''){
				alert("请输入密码");
				return false;
			}
		})
	})
</script>
</body>
</html>