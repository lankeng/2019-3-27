<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="ch">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>书商城后台管理系统</title>
	<script src="/bookstore/Public/js/jquery.min.js"></script>
	<script src="/bookstore/Public/js/bootstrap.min.js"></script>
	<script>
		$(function() {
			$(".meun-item").click(function() {
				$(".meun-item").removeClass("meun-item-active");
				$(this).addClass("meun-item-active");
			});
		})
	</script>
		<!--[if lt IE 9]>
  <script src="js/html5shiv.min.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
<link href="/bookstore/Public/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="/bookstore/Public/css/common.css" />
<link rel="stylesheet" type="text/css" href="/bookstore/Public/css/slide.css" />
<link rel="stylesheet" type="text/css" href="/bookstore/Public/css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="/bookstore/Public/css/flat-ui.min.css" />
<link rel="stylesheet" type="text/css" href="/bookstore/Public/css/jquery.nouislider.css">
<style type="text/css">
.num{
	margin-left: 10px !important;
	margin-right: 10px !important;
}
.rows{
	margin-left: 10px !important;
	margin-top: -3px !important;
}
a:hover{
	color: #aab1b7 !important;
}
a{
	color: #aab1b7 !important;
}

</style>
</head>

<body>
	<div id="wrap">
		<!-- 左侧菜单栏目块 -->
		<div class="leftMeun" id="leftMeun">
			<div id="logoDiv">
				<p id="logoP"><img id="logo" alt="左右结构项目" src="/bookstore/Public/images/logo.png"><span>后台管理</span></p>
			</div>
			<div id="personInfor">
				<div id="userName"><?php echo (session('username')); ?></div>
				<div>
					<a href="<?php echo U('Admin/Login/logout');?>">退出登录</a>
				</div>
			</div>
			<div class="meun-title">书籍商品订单管理</div>
			<div class="meun-item">
				<a href="<?php echo U('Admin/Index/bookclaindex');?>"><img src="/bookstore/Public/images/bookcla.png">书籍分类管理</a>
			</div>
			<div class="meun-item" >
				<a href="<?php echo U('Admin/Bookindex/bookindex');?>"><img src="/bookstore/Public/images/book.png">书籍管理</a>
			</div>
			<div class="meun-item">
				<a href="<?php echo U('Admin/Detailpic/detailpic');?>"><img src="/bookstore/Public/images/bookdetail.png">书籍详情</a>
			</div>
			<div class="meun-item">
				<a href="<?php echo U('Admin/Order/order');?>"><img src="/bookstore/Public/images/bookroder.png">订单详情</a>
			</div>
			<div class="meun-title">账号用户管理
			</div>
			<div class="meun-item  meun-item-active">
				<a href="<?php echo U('Admin/Repwd/repwd');?>"><img src="/bookstore/Public/images/icon_change_grey.png">修改密码</a>
			</div>
			<div class="meun-item">
				<a href="<?php echo U('Admin/Mauser/mauser');?>"><img src="/bookstore/Public/images/icon_user_grey.png">用户管理</a>
			</div>
			<div class="meun-title">轮播图设置</div>
			<div class="meun-item">
				<a href="<?php echo U('Admin/Figure/figure');?>"><img src="/bookstore/Public/images/lunbotu.png">轮播图</a>
			</div>
		</div>
		<!-- 右侧具体内容栏目 -->
		<div id="rightContent">
			<a class="toggle-btn" id="nimei">
				<i class="glyphicon glyphicon-align-justify"></i>
			</a>
			<!-- Tab panes -->
			<div class="tab-content">
				<!-- 修改密码模块 -->
				<div role="tabpanel" class="tab-pane active" id="chan">
					<div class="check-div">

					</div>
					<div style="padding: 50px 0;margin-top: 50px;background-color: #fff; text-align: right;width: 420px;margin: 50px auto;">
						<form class="form-horizontal" action="<?php echo U('Admin/Repwd/repassword');?>" method="POST">
							<div class="form-group">
								<label for="sKnot" class="col-xs-4 control-label ">原密码：</label>
								<div class="col-xs-5">
									<input type="password" class="form-control input-sm duiqi oldpwd" id="opwd" placeholder="" style="margin-top: 7px;" name="oldpwd">
									<input type="text" value="<?php echo (session('adminid')); ?>" style="display: none;" name="adminid">
								</div>
							</div>
							<div class="form-group">
								<label for="sKnot" class="col-xs-4 control-label ">新密码：</label>
								<div class="col-xs-5">
									<input type="password" class="form-control input-sm duiqi newpwdone" id="npwdo" placeholder="" style="margin-top: 7px;" name="newpwd">
								</div>
							</div>
							<div class="form-group">
								<label for="sKnot" class="col-xs-4 control-label ">重复密码：</label>
								<div class="col-xs-5">
									<input type="password" class="form-control input-sm duiqi newpwdtwo" id="npwdt" placeholder="" style="margin-top: 7px;">
								</div>
							</div>
							<div class="form-group">
								<label for="sKnot" class="col-xs-4 control-label ">用户名：</label>
								<div class="col-xs-5">
									<input type="text" class="form-control input-sm duiqi username" value="<?php echo (session('username')); ?>" name="username" style="margin-top: 7px;">
								</div>
							</div>
							<div class="form-group text-right">
								<div class="col-xs-offset-4 col-xs-5" style="margin-left: 169px;">
									<button type="reset" class="btn btn-xs btn-white">清空</button>
									<button type="submit" class="btn btn-xs btn-green savepwd">保存</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<script src="/bookstore/Public/js/jquery.nouislider.js"></script>

			<!-- this page specific inline scripts -->
			<script>
			//min/max slider
			$(document).ready(function() {
				$(".updatesort").click(function(){
					var sortname = $(this).data("catename");
					var sortid = $(this).data("sortid");
					var delid = $(this).data("delid");
					$(".upsort").val(sortname);
					$(".upsortid").val(sortid);
				})
				$(".delsort").click(function(){
					var delid = $(this).data("delid");
					$(".delcla").val(delid);
				})
				$("#price").keyup(function() {
					console.log($("#price").val())
					if($("#price").val() != '' && $("#discount").val() != '') {
						a = $("#price").val() * ($("#discount").val() / 10);
						$("#countprice").val(a)
					}
				})
				$("#discount").keyup(function() {
					console.log($("#discount").val())
					if($("#price").val() != '' && $("#discount").val() != '') {
						b = $("#price").val() * ($("#discount").val() / 10);
						$("#countprice").val(b)
					}
				})

				$("#upprice").keyup(function() {
					console.log($("#price").val())
					if($("#upprice").val() != '' && $("#updiscount").val() != '') {
						a = $("#upprice").val() * ($("#updiscount").val() / 10);
						$("#upcountprice").val(a)
					}
				})
				$("#updiscount").keyup(function() {
					console.log($("#updiscount").val())
					if($("#upprice").val() != '' && $("#updiscount").val() != '') {
						b = $("#upprice").val() * ($("#updiscount").val() / 10);
						$("#upcountprice").val(b)
					}
				})

				$(".savecla").click(function() {
					if($(".checkcla").val() == '') {
						alert("输入类名不能为空");
						return false;
					}
				})
				$(".upcla").click(function() {
					if($(".upcheckcla").val() == '') {
						alert("输入类名不能为空");
						return false;
					}
				})
				$(".checkbook").click(function() {
					if($(".bookcla").val() == '请选择') {
						alert("请选择分类");
						return false;
					} else if($(".bookofname").val() == '') {
						alert("请输入书名");
						return false;
					}else if($(".upbsimg").val() == '') {
						alert("请上传商品详情图");
						return false;
					} 
					else if($(".uplbimga").val() == '') {
						alert("请上传轮播图1");
						return false;
					} else if($(".uplbimgb").val() == '') {
						alert("请上传轮播图2");
						return false;
					} 
					else if($(".bookauthor").val() == '') {
						alert("请填写作者");
						return false;
					} else if($(".bookpub").val() == '') {
						alert("请填写出版社");
						return false;
					} else if($(".bookpubtime").val() == '') {
						alert("请填写出版时间");
						return false;
					} else if($(".bookprice").val() == '') {
						alert("请输入单价");
						return false;
					} else if($(".bookdiscount").val() == '') {
						alert("请输入折扣");
						return false;
					}
				})
				$(".addsave").click(function() {
					if($(".addcla").val() == '请选择') {
						alert("请选择分类");
						return false;
					} else if($(".addbookname").val() == '') {
						alert("请输入书名");
						return false;
					} else if($(".bsimg").val() == '') {
						alert("请上传商品详情图");
						return false;
					} else if($(".lbimga").val() == '') {
						alert("请上传轮播图1");
						return false;
					} else if($(".lbimgb").val() == '') {
						alert("请上传轮播图2");
						return false;
					} else if($(".addbookauthor").val() == '') {
						alert("请填写作者");
						return false;
					} else if($(".addbookpub").val() == '') {
						alert("请填写出版社");
						return false;
					} else if($(".addbookpubtime").val() == '') {
						alert("请填写出版时间");
						return false;
					} else if($(".addbookprice").val() == '') {
						alert("请输入单价");
						return false;
					} else if($(".addbookdiscount").val() == '') {
						alert("请输入折扣");
						return false;
					}
				})
				$(".detailsave").click(function() {
					if($(".detailcla").val() == '请选择') {
						alert("请选择分类");
						return false;
					} else if($(".detailbook").val() == '请选择') {
						alert("请选择书名");
						return false;
					}else if($(".detailorder").val() == ''){
						alert("请上传详情图");
						return false;
					}
				})
				$(".updetailsave").click(function() {
					if($(".updetailcla").val() == '请选择') {
						alert("请选择分类");
						return false;
					} else if($(".updetailbook").val() == '请选择') {
						alert("请选择书名");
						return false;
					}else if($(".updetailorder").val() == ''){
						alert("请上传详情图");
					}
				})

				$(".savepwd").click(function(){
					if ($(".oldpwd").val() == '') {
						alert("请输入原密码！");
						return false;
					}else if ($(".username").val() == '') {
						alert("用户名不能为空！");
						return false;
					}
					else if ($(".newpwdone").val() != $(".newpwdtwo").val()) {
						alert("新密码与重复密码不一致！");
						return false;
					}
				})
			})

function textbox(obj) {
	if(obj.value == obj.value && obj.value >= 0 && obj.value <= 10) {

	} else{
		alert('请输入数字,范围为0-10');
		return false;
	}	
}
</script>
</body>

</html>