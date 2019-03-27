<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1" />
		<title>用户登录</title>
		<link rel="stylesheet" type="text/css" href="/sp_shop/Public/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="/sp_shop/Public/css/index.css" />
		<script src="/sp_shop/Public/js/jquery.min.js"></script>
	</head>

	<body>
		<div class="e container">
			<div class="row">
				<div class="col-xs-0 col-sm-1 col-md-1 col-lg-1 "></div>
				<div class="col-xs-7 col-sm-5 col-md-4 col-lg-4 ">
					<img src="/sp_shop/Public/img/鹅 (1).png" class="c" />
					<hr class="hr01" />
					<a class="h">尚品工艺</a>
				</div>
				<div class="col-xs-0 col-sm-2 col-md-1 col-lg-4 "></div>
				<div class="col-xs-3 col-sm-2 col-md-4 col-lg-2 ">
					<button class="a1"><img src="/sp_shop/Public/img/返回首页 (1).png"/><a href="/sp_shop/">    返回首页</a></button>
				</div>
				<div class="col-xs-2 col-sm-4 col-md-3 col-lg-1 "></div>
				<hr class="hr02" />
			</div>
		</div>
		<div class="f container">
			<div class="row">
				<div class="col-xs-2 col-sm-6 col-md-7 col-lg-8"></div>
				<div class="col-xs-9 col-sm-5 col-md-4 col-lg-3 k">
					<div class="modal-dialog ">
						<div class="modal-content d">
							<div class="modal-header">
								<h4 class="modal-title">用户登录</h4>
							</div>
							<form action="#" method="post">
							<div class="modal-body">
								<div class="control-group">
									
										<div class="col-md-10 col-md-offset-1 input-group a">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
											<input name="user" class="form-control" type="text" placeholder="用户名" />
										</div>
										<div class="col-md-10 col-md-offset-1 input-group a">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
											<input name="pwd" class="form-control" type="password" placeholder="密码" />
										</div>
										<div class="col-md-10 col-md-offset-1 input-group a">										
											<input style="width:233px" name="captcha" class="form-control" type="text" placeholder="验证码" />
											
											<img style="margin-top:10px;width:230px;heigh:50px" src="/sp_shop/Home/User/captcha" onclick="this.src='/sp_shop/Home/User/captcha/'+Math.random()"/>
										</div>
									
								</div>
								<div class="modal-footer pure-g">
									<input class="btn btn-primary form-control b " type="submit" value="登录" />
									<a href="/sp_shop/Home/User/register"><input class="btn btn-primary form-control b1 " type="button" value="注册" /></a>
								</div>
								<a class="a2"> 忘记密码？</a>
							</div></form>
						</div>
						
					</div>
				</div>
				<div class="col-xs-1 col-sm-1 col-lg-1 col-md-1"></div>
			</div>
		</div>
		<hr style="box-shadow: 0px 1px 0px #D5D5D5;" />
		<footer>
			<p style="text-align: center;">电话:6666-666-666&nbsp;&nbsp;地址:广州市从化区广从南路548号R820</p>
			<p style="text-align: center;">©&#x3000;2017&#x3000;广州尚品工艺有限公司&#x3000;ShangPin.com&#x3000;京ICP证100572号&#x3000;京ICP备11004896号&#x3000;京公网安备110105001181号</p>
		</footer>
	</body>

</html>