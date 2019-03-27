<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<style>
    .message{background:#f4f4f4;border:1px solid #ddd;width:215px;font-size:12px;padding-left:5px;color:#888;line-height:22px;display:none; float:right;}
     .pass{font:bold 10px "Kristen ITC";color:#fff;text-indent:4px;line-height:22px;margin-left:5px;border-radius:50px;background:#7ABD54;width:20px;height:20px;display:none;}
</style>
		<title>新用户注册</title>
		<link rel="stylesheet" type="text/css" href="/sp_shop/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/sp_shop/Public/css/register.css" />
		<script src="/sp_shop/Public/js/jquery.min.js"></script>
		<script language="JavaScript">
			function pwStrength(pwd) {
				Dfault_color = "#eeeeee"; //默认颜色  
				L_color = "#FF0000"; //低强度的颜色，且只显示在最左边的单元格中  
				M_color = "#FF9900"; //中等强度的颜色，且只显示在左边两个单元格中  
				H_color = "#33CC00"; //高强度的颜色，三个单元格都显示  
				if (pwd == null || pwd == '' || pwd.length < 6) {
					Lcolor = Mcolor = Hcolor = Dfault_color;
				} else if (pwd.length > 5 && !isNaN(pwd)) {
					Lcolor = L_color;
					Mcolor = Hcolor = Dfault_color;
				} else if (pwd.length > 5 && pwd.length < 15 && /\w*/.test(pwd)) {
					Lcolor = Mcolor = M_color;
					Hcolor = Dfault_color;
				} else {
					Lcolor = Mcolor = Hcolor = H_color;
				}
				document.getElementById("strength_L").style.background = Lcolor;
				document.getElementById("strength_M").style.background = Mcolor;
				document.getElementById("strength_H").style.background = Hcolor;
				return;
			}
			
		</script>
	</head>

	<body>
		<div class="a container">
			<div class="row">
				<div class="col-xs-0 col-sm-1 col-md-1 col-lg-1 "></div>
				<div class="col-xs-7 col-sm-5 col-md-4 col-lg-4 ">
					<img src="/sp_shop/Public/img/鹅 (1).png" class="b" />
					<hr class="hr01" />
					<a class="c">尚品工艺</a>
				</div>
				<div class="col-xs-0 col-sm-1 col-md-1 col-lg-4 "></div>
				<div class="col-xs-3 col-sm-2 col-md-4 col-lg-2 ">
					<a href="/sp_shop/Home/User/login" class="e"><button class="d">已有帐号？快速登录</button></a>
				</div>
				<div class="col-xs-2 col-sm-4 col-md-3 col-lg-1 "></div>
				<hr class="hr02" />
			</div>
		</div>

		<div class="h">
			<div class="f container">
				<div class="row">
					<div class="col-xs-2 col-sm-3 col-md-6 col-lg-8"></div>
					<div class="col-xs-8 col-sm-4 col-md-4 col-lg-4">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h4 class="modal-title">新用户注册</h4>
								</div>
								<form method="post">
								<div class="modal-body j">
									<table><tr><td><label>用户名</label></td><td><div class="pass">√</div><label class="message" id="userMessage">用户名为空或已存在，请重新输入！</label></td></tr></table>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
										<input name="user" id="user" class="form-control" type="text" placeholder="请输入您的用户名" required/>
									</div>
									<br/>
									<label>性别</label>
									<div class="input-group" required>
										<span class="input-group-addon"><i class="glyphicon glyphicon-tags"></i></span>
										<label class="" for=""><input  class="g" type="radio" name="sex" value="男" checked="" required>男</label>
										<label class="" for=""><input class="g" type="radio" name="sex" value="女" required>女</label>

									</div>
									<br/>
									<label>联系电话</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
										<input name="phone" class="form-control" type="text" placeholder="请输入您的电话" required/>
									</div>
									<br/>
									<label>电子邮箱</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
										<input class="form-control" name="email" type="text" placeholder="请输入您的电子邮箱" required/>
									</div>
									<br/>
									<label>密码</label>
									<div class="input-group">
									
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input name="pwd" id="pwd" class="form-control" type="password" placeholder="请输入6至20位数字、字母组合" onKeyUp=pwStrength(this.value) required/>
									
									</div>
									<br/>
									<div>
										<form name=form1 action="" >
											<table border="0">
												<tr align="center">
													<td width="30%">密码强度:&nbsp;</td>
													<td width="24%" id="strength_L" bgcolor="#eeeeee">弱</td>
													<td width="23%" id="strength_M" bgcolor="#eeeeee">中</td>
													<td width="23%" id="strength_H" bgcolor="#eeeeee">强</td>
												</tr>
											</table>
										</form>
									</div>
									<br/>
									<label>再次输入密码</label>
									<form method="post">
									<div class="input-group">
									
										<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
										<input name="pwd2" id="pwd2" class="form-control" type="password" placeholder="与上面密码一致" required/>
									
									</div></form>
									<br/>
									<table><tr><td><label>验证码</label></td><td><div class="pass">√</div><label class="message" id="captchaMessage">验证码错误，请重新输入！</label></td></tr></table>									
									<div class="input-group">
									<table>
									<tr><td><input name="captcha" class="form-control"  placeholder="请输入验证码" /></td>
										<td>&nbsp;</td><td><img src="/sp_shop/Home/User/captcha" onclick="this.src='/sp_shop/Home/User/captcha/'+Math.random()"/></td></tr></table>
									</div>
									<br/>
									<div>
										<input name="check" type="checkbox" checked="" required>&nbsp;&nbsp;<label>我已阅读并接受<a href="/sp_shop/Home/User/protocol" target="_blank">《尚品用户协议》</a></label>
									</div>
									<br/>
									<div>
										<input class="btn btn-primary form-control " type="submit" value="注册" />
									</div>
								</div>
								
							</div>
						</div>
					</div>
					</form>
					<div class="col-xs-0 col-sm-5 col-md-2 col-lg-0">
						
					</div>
				</div>
			</div>

		</div>
		<hr style="box-shadow: 0px 1px 0px #D5D5D5;"/>
		<footer>
			<p class="i">电话:6666-666-666&nbsp;&nbsp;地址:广州市从化区广从南路548号R820</p>
            <p class="i">©&#x3000;2017&#x3000;广州尚品工艺有限公司&#x3000;ShangPin.com&#x3000;京ICP证100572号&#x3000;京ICP备11004896号&#x3000;京公网安备110105001181号</p>
		</footer>
		
		<script language="JavaScript">
	$("#pwd2").blur(function(){ //失去焦点时判断
		if($(this).val() !== $("#pwd").val()){
			$(this).addClass('error');
		}else{
			$(this).removeClass('error');
		}
	});
	$("form").submit(function(){ //表单提交时判断
		if($("#pwd2").val() !== $("#pwd").val()){
			alert('两次输入密码不一致！');
			return false;
		}
	});
	$("#user").blur(function () { //失去焦点时获取要注册的用户名，查询数据库
		  $.post("/sp_shop/Home/User/checkNameOnly", {user: $(this).val()}, function (msg) {
		  //判断返回条件
		  //1表示已存在该用户名，提示用户重新取名
		  //0表示不存在，可以使用
		  if (msg == '1') {
		    //判断是否已经存在提示信息
		    $("#userMessage").show();
		    $("#userMessage").prev().hide();
		  } else {
		    $("#userMessage").hide();
		    $("#userMessage").prev().show();
		  }
		  });
		});
	$("#captcha").blur(function () {
		  $.post("/sp_shop/Home/User/checkCaptcha", {captcha: $(this).val()}, function (msg) {
		    if (msg == '0') {
		       $("#captchaMessage").show();
		       $("#captchaMessage").prev().hide();
		    } else {
		       $("#captchaMessage").hide();
		       $("#captchaMessage").prev().show();
		    }
		  });
		});	
</script>
	</body>

</html>