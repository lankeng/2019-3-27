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
			<div class="meun-item">
				<a href="<?php echo U('Admin/Repwd/repwd');?>"><img src="/bookstore/Public/images/icon_change_grey.png">修改密码</a>
			</div>
			<div class="meun-item">
				<a href="<?php echo U('Admin/Mauser/mauser');?>"><img src="/bookstore/Public/images/icon_user_grey.png">用户管理</a>
			</div>
			<div class="meun-title">轮播图设置</div>
			<div class="meun-item  meun-item-active">
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
				
				<!--用户管理模块-->
				<div role="tabpanel" class="tab-pane active" id="user">
					<div class="check-div form-inline">

					</div>
					<div class="data-div">
						<div class="data-div">
							<div class="row tableHeader" style="text-align: center;">
								<div class="col-xs-3 ">
									轮播图1
								</div>
								<div class="col-xs-3">
									轮播图2
								</div>
								<div class="col-xs-3">
									轮播图3
								</div>
								<div class="col-xs-3">
									操作
								</div>
							</div>
							<div class="tablebody">
								<form action="<?php echo U('Admin/Figure/figure');?>" method="GET">
									<?php if(is_array($select)): foreach($select as $key=>$a): ?><div class="row" style="text-align: center;">
											<div class="col-xs-3 ">
												<image src="/bookstore<?php echo ($a["figureone"]); ?>" style="width: 60px;height: 60px;margin-top: 5px;"></image>
											</div>
											<div class="col-xs-3">
												<image src="/bookstore<?php echo ($a["figuretwo"]); ?>" style="width: 60px;height: 60px;margin-top: 5px;"></image>
											</div>
											<div class="col-xs-3">
												<image src="/bookstore<?php echo ($a["figurethree"]); ?>" style="width: 60px;height: 60px;margin-top: 5px;"></image>
											</div>
											<div class="col-xs-3">
												<button type="button" class="btn btn-success btn-xs refigure" data-toggle="modal" style="margin-top: 20px" data-target="#changeChar"
												data-figurethree="<?php echo ($a["figurethree"]); ?>" data-figureone="<?php echo ($a["figureone"]); ?>" data-figuretwo="<?php echo ($a["figuretwo"]); ?>"
												>修改</button>
											</div>
										</div><?php endforeach; endif; ?>
								</form>
							</div>

						</div>
						<!--页码块-->
						<footer class="footer">
							<ul class="pagination">
								<!-- <?php echo ($page); ?> -->
							</ul>
						</footer>

						<div class="modal fade" id="changeChar" role="dialog" aria-labelledby="gridSystemModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="gridSystemModalLabel">修改书籍详情图</h4>
									</div>
									<form  action="<?php echo U('Admin/Figure/upfigure');?>" method="POST" enctype="multipart/form-data">
										<div class="modal-body">
											<div class="container-fluid">
												<div class="form-horizontal">
													<div class="form-group">
														<label for="sLink" class="col-xs-3 control-label bookfz ">轮播图1：</label>
														<img src="/bookstore/Public/images/add.png" id="figurea" style="width: 50px;height: 50px;">  
														<div class="col-xs-8 ">
															<input type="file"  class="duiqi bookimg bsimg" id="iptfigurea" style="display: none;" name="figureone">
														</div>
														<img id="imgfigurea" data-src="" src="/bookstore/Public/images/empty.png" data-holder-rendered="true" style="width: 50px;height: 50px;margin-left: 15px">
													</div>
													<div class="form-group">
														<label for="sLink" class="col-xs-3 control-label bookfz ">轮播图2：</label>
														<img src="/bookstore/Public/images/add.png" id="figureb" style="width: 50px;height: 50px;">  
														<div class="col-xs-8 ">
															<input type="file"  class="duiqi bookimg bsimg" id="iptfigureb" style="display: none;" name="figuretwo">
														</div>
														<img id="imgfigureb" data-src="" src="/bookstore/Public/images/empty.png" data-holder-rendered="true" style="width: 50px;height: 50px;margin-left: 15px">
													</div>
													<div class="form-group">
														<label for="sLink" class="col-xs-3 control-label bookfz ">轮播图3：</label>
														<img src="/bookstore/Public/images/add.png" id="figurec" style="width: 50px;height: 50px;">  
														<div class="col-xs-8 ">
															<input type="file"  class="duiqi bookimg bsimg" id="iptfigurec" style="display: none;" name="figurethree">
														</div>
														<img id="imgfigurec" data-src="" src="/bookstore/Public/images/empty.png" data-holder-rendered="true" style="width: 50px;height: 50px;margin-left: 15px">
													</div>
												</div>
											</div>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
											<button type="submit" class="btn btn-xs btn-green updetailsave">保 存</button>
										</div>
									</form>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
					</div>
				</div>
			</div>
		</div>
		<script src="/bookstore/Public/js/jquery.nouislider.js"></script>

		<!-- this page specific inline scripts -->
		<script>
			//min/max slider
			$(document).ready(function() {
				$(".refigure").click(function(){
					var figurea = $(this).data("figureone");
					var figureb = $(this).data("figuretwo");
					var figureac = $(this).data("figurethree");
					$("#imgfigurea").attr("src","/bookstore"+figurea);
					$("#imgfigureb").attr("src","/bookstore"+figureb);
					$("#imgfigurec").attr("src","/bookstore"+figureac);
				})
				$('#figurea').click(function(){
					$('#iptfigurea').click();
				});
				$('#figureb').click(function(){
					$('#iptfigureb').click();
				});
				$('#figurec').click(function(){
					$('#iptfigurec').click();
				});
				$("#iptfigurea").change(function (e) {
				//获取目标文件
				var file = e.target.files || e.dataTransfer.files;
					//如果目标文件存在
					if (file) {
						//定义一个文件阅读器
						var reader = new FileReader();
						//文件装载后将其显示在图片预览里
						reader.onload = function () {
							$("#imgfigurea").attr("src", this.result);
						}
						//装载文件
						reader.readAsDataURL(file[0]);
					}
				})
				$("#iptfigureb").change(function (e) {
				//获取目标文件
				var file = e.target.files || e.dataTransfer.files;
					//如果目标文件存在
					if (file) {
						//定义一个文件阅读器
						var reader = new FileReader();
						//文件装载后将其显示在图片预览里
						reader.onload = function () {
							$("#imgfigureb").attr("src", this.result);
						}
						//装载文件
						reader.readAsDataURL(file[0]);
					}
				})
				$("#iptfigurec").change(function (e) {
				//获取目标文件
				var file = e.target.files || e.dataTransfer.files;
					//如果目标文件存在
					if (file) {
						//定义一个文件阅读器
						var reader = new FileReader();
						//文件装载后将其显示在图片预览里
						reader.onload = function () {
							$("#imgfigurec").attr("src", this.result);
						}
						//装载文件
						reader.readAsDataURL(file[0]);
					}
				})
			})
		</script>
	</body>

	</html>