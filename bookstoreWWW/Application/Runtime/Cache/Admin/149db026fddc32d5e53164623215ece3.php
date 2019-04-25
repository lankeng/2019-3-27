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
.udshow{
	height: 35px !important;
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
			<div class="meun-item" >
				<a href="<?php echo U('Admin/Index/bookclaindex');?>"><img src="/bookstore/Public/images/bookcla.png">书籍分类管理</a>
			</div>
			<div class="meun-item  meun-item-active">
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
				<!--书籍管理-->
				<div role="tabpanel" class="tab-pane active" id="book">

					<div class="check-div form-inline">
						<div class="col-xs-3">
							<button class="btn btn-yellow btn-xs" data-toggle="modal" data-target="#addbook">添加书籍 </button>
						</div>
						<div class="col-lg-4 col-xs-5">
							<form action="<?php echo U('Admin/Bookindex/bookindex');?>" method="POST">
								<input type="text" class=" form-control input-sm findbook" placeholder="输入文字搜索" name="find">
								<button class="btn btn-white btn-xs gofindbook">查 询 </button>
							</form>
						</div>
						<div class="col-lg-3 col-lg-offset-1 col-xs-3" style="padding-right: 40px;text-align: right;float: right;">
							<!-- <label for="paixu">排序:&nbsp;</label>
							<select class="form-control">
								<option>地区</option>
								<option>排名</option>
							</select> -->
						</div>
					</div>
					<div class="data-div">
						<div class="row tableHeader">
							<div class="col-xs-1">
								书籍类名
							</div>
							<div class="col-xs-1">
								书籍名称
							</div>
							<div class="col-xs-1">
								书籍商品图
							</div>
							<div class="col-xs-1">
								商品轮播1
							</div>
							<div class="col-xs-1">
								商品轮播2
							</div>
							<div class="col-xs-1">
								作者
							</div>
							<div class="col-xs-1">
								出版社
							</div>
							<div class="col-xs-1">
								出版时间
							</div>
							<div class="col-xs-1">
								折扣价
							</div>
							<div class="col-xs-1">
								单价
							</div>
							<div class="col-xs-1">
								折数
							</div>
							<div class="col-xs-1">
								操作
							</div>
						</div>
						<div class="tablebody">
							<form action="<?php echo U('Admin/Bookindex/bookindex');?>" method="GET">
								<?php if(is_array($selectbook)): foreach($selectbook as $key=>$a): ?><div class="row" style="font-size: 12px">
										<div class="col-xs-1">
											<?php echo ($a["claname"]); ?>
										</div>
										<div class="col-xs-1">
											<?php echo ($a["title"]); ?>
										</div>
										<div class="col-xs-1">
											<image src="/bookstore<?php echo ($a["image"]); ?>" style="width: 60px;height: 60px;margin-top: 5px;"></image>
										</div>
										<div class="col-xs-1">
											<image src="/bookstore<?php echo ($a["imgone"]); ?>" style="width: 60px;height: 60px;margin-top: 5px;"></image>
										</div>
										<div class="col-xs-1">
											<image src="/bookstore<?php echo ($a["imgtwo"]); ?>" style="width: 60px;height: 60px;margin-top: 5px;"></image>
										</div>
										<div class="col-xs-1">
											<?php echo ($a["author"]); ?>
										</div>
										<div class="col-xs-1">
											<?php echo ($a["publisher"]); ?>
										</div>
										<div class="col-xs-1">
											<?php echo ($a["pubtime"]); ?>
										</div>
										<div class="col-xs-1">
											<?php echo ($a["currentprice"]); ?>
										</div>
										<div class="col-xs-1">
											<?php echo ($a["price"]); ?>
										</div>
										<div class="col-xs-1">
											<?php echo ($a["discount"]); ?>
										</div>
										<div class="col-xs-1">
											<button class="btn btn-success btn-xs updatebook" data-toggle="modal" type="button" data-target="#upbook" data-bookid="<?php echo ($a["bookid"]); ?>" data-claname="<?php echo ($a["claname"]); ?>" data-author="<?php echo ($a["author"]); ?>" data-title="<?php echo ($a["title"]); ?>" data-publisher="<?php echo ($a["publisher"]); ?>" data-pubtime="<?php echo ($a["pubtime"]); ?>" data-currentprice="<?php echo ($a["currentprice"]); ?>" data-price="<?php echo ($a["price"]); ?>" data-discount="<?php echo ($a["discount"]); ?>" data-image="<?php echo ($a["image"]); ?>" data-imgone="<?php echo ($a["imgone"]); ?>" data-imgtwo="<?php echo ($a["imgtwo"]); ?>">修改</button>
											<button class="btn btn-danger btn-xs deludbook" data-delbookid="<?php echo ($a["bookid"]); ?>" data-toggle="modal" type="button" data-target="#deleteSchool">删除</button>
										</div>
									</div><?php endforeach; endif; ?>
							</form>
						</div>
					</div>
					<!--页码块-->
					<footer class="footer">
						<ul class="pagination">
							<?php echo ($page); ?>
						</ul>
					</footer>

					<!--弹出添加书籍窗口-->
					<div class="modal fade" id="addbook" role="dialog" aria-labelledby="gridSystemModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="gridSystemModalLabel">添加书籍</h4>
								</div>
								<form class="form-horizontal" action="<?php echo U('Admin/Bookindex/addbookindex');?>" enctype="multipart/form-data" method="POST">
									<div class="modal-body">
										<div class="container-fluid">
											<div class="form-group">
												<label for="sName" class="col-xs-3 control-label bookfz">书籍类名：</label>
												<div class="col-xs-8">
													<select class="form-control input-sm duiqi addcla" style="height: 25px !important;padding: 0;" name="cate_name">
														<option>请选择</option>
														<form action="<?php echo U('Admin/Bookindex/bookindex');?>" method="GET">
															<?php if(is_array($select)): foreach($select as $key=>$a): ?><option><?php echo ($a["cate_name"]); ?></option><?php endforeach; endif; ?>
														</form>
													</select>
												</div>
											</div>

											<div class="form-group ">
												<label for="sName" class="col-xs-3 control-label bookfz">书籍名称：</label>
												<div class="col-xs-8 ">
													<input type="text" class="form-control input-sm duiqi addbookname" id="bookName" placeholder="请输入书籍名称" name="title">
												</div>
											</div>
											<div class="form-group">
												<label for="sLink" class="col-xs-3 control-label bookfz ">书籍商品图：</label>
												<img src="/bookstore/Public/images/add.png" id="my-img" style="width: 50px;height: 50px;">  
												<div class="col-xs-8 ">
													<input type="file"  class="duiqi bookimg bsimg" id="zx_img" name="image" style="display: none;">
												</div>
												<img id="img_preview" data-src="" src="/bookstore/Public/images/empty.png" data-holder-rendered="true" style="width: 50px;height: 50px;margin-left: 15px">
											</div>
											<div class="form-group">
												<label for="sOrd" class="col-xs-3 control-label bookfz bookimga">书籍轮播图1：</label>
												<img src="/bookstore/Public/images/add.png" id="my-imgone" style="width: 50px;height: 50px;">
												<div class="col-xs-8">
													<input type="file"  class="duiqi lbimga" id="pimgone" name="Imgone" style="display: none;">
												</div>
												<img id="img_previewone" data-src="" src="/bookstore/Public/images/empty.png" data-holder-rendered="true" style="width: 50px;height: 50px;margin-left: 15px">
											</div>
											<div class="form-group">
												<label for="sOrd" class="col-xs-3 control-label bookfz bookimgb">书籍轮播图2：</label>
												<img src="/bookstore/Public/images/add.png" id="my-imgtwo" style="width: 50px;height: 50px;">  
												<div class="col-xs-8">
													<input type="file"  class="duiqi lbimgb" id="pimgtwo" name="Imgtwo" style="display: none;">
												</div>
												<img id="img_previewtwo" data-src="" src="/bookstore/Public/images/empty.png" data-holder-rendered="true" style="width: 50px;height: 50px;margin-left: 15px">
											</div>
											<div class="form-group">
												<label for="sOrd" class="col-xs-3 control-label bookfz ">作者：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi addbookauthor" id="author" placeholder="请输入作者名称" name="author">
												</div>
											</div>
											<div class="form-group">
												<label for="sOrd" class="col-xs-3 control-label bookfz">出版社：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi addbookpub" id="publish" placeholder="请输入出版社名称" name="publisher">
												</div>
											</div>
											<div class="form-group">
												<label for="sOrd" class="col-xs-3 control-label bookfz">出版时间：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi addbookpubtime" id="pubtime" placeholder="格式：2018-12-16" name="pubTime">
												</div>
											</div>
											<div class="form-group">
												<label for="sOrd" class="col-xs-3 control-label bookfz ">折扣价：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi discount" id="countprice" placeholder="输入单价折扣数自动计算"  name="currentprice">
												</div>
											</div>
											<div class="form-group">
												<label for="sOrd" class="col-xs-3 control-label bookfz">单价：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi addbookprice" id="price" placeholder="请输入商品原价格" name="price">
												</div>
											</div>
											<div class="form-group">
												<label for="sOrd" class="col-xs-3 control-label bookfz">折扣数：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi addbookdiscount" onblur="JavaScript:textbox(this)" id="discount" placeholder="折扣数为10则不打折" min="0" max="10" name="discount">
												</div>
											</div>

										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
										<button type="submit" class="btn btn-xs btn-green addsave">保 存</button>
									</div>
								</form>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->

					<!--弹出修改书籍窗口-->
					<div class="modal fade" id="upbook" role="dialog" aria-labelledby="gridSystemModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title" id="gridSystemModalLabel">修改书籍</h4>
								</div>
								<form  action="<?php echo U('Admin/Bookindex/upbookindex');?>" method="POST" enctype="multipart/form-data">
									<div class="modal-body">
										<div class="container-fluid">
											<div class="form-group udshow">
												<label for="sName" class="col-xs-4 control-label bookfz">书类：</label>
												<div class="col-xs-8">
													<select class="form-control input-sm duiqi bookcla upclaname" style="height: 25px !important;padding: 0;" name="cate_name">
														<option>请选择</option>
														<form action="<?php echo U('Admin/Bookindex/bookindex');?>" method="GET">
															<?php if(is_array($select)): foreach($select as $key=>$a): ?><option><?php echo ($a["cate_name"]); ?></option><?php endforeach; endif; ?>
														</form>
													</select>
												</div>
											</div>

											<div class="form-group udshow">
												<label for="sName" class="col-xs-4 control-label bookfz ">书籍名称：</label>
												<div class="col-xs-8 ">
													<input type="text" class="form-control input-sm duiqi bookofname uptitle" id="upbookName" placeholder="" name="title">
													<input type="text" class="upbookid" style="display: none" name="bookid">
												</div>
											</div>
											<div class="form-group">
												<label for="sLink" class="col-xs-4 control-label bookfz">书籍商品图：</label>
												<img src="/bookstore/Public/images/add.png" id="upmy-imga" style="width: 50px;height: 50px;">  
												<div class="col-xs-8 ">
													<input type="file" class="duiqi upbsimg upimage" id="upbookimga" style="display: none" name="image">
												</div>
												<img id="upimg_previewa" data-src="" src="/bookstore/Public/images/empty.png" data-holder-rendered="true" style="width: 50px;height: 50px;margin-left: 15px">
											</div>
											<div class="form-group">
												<label for="sOrd" class="col-xs-4 control-label bookfz bookimga ">书籍轮播图1：</label>
												<img src="/bookstore/Public/images/add.png" id="upmy-imgone" style="width: 50px;height: 50px;">  
												<div class="col-xs-8">
													<input type="file" class="duiqi uplbimga upimgone" id="uppimgone" style="display: none" name="Imgone">
												</div>
												<img id="upimg_previewone" data-src="" src="/bookstore/Public/images/empty.png" data-holder-rendered="true" style="width: 50px;height: 50px;margin-left: 15px">
											</div>
											<div class="form-group">
												<label for="sOrd" class="col-xs-4 control-label bookfz bookimgb ">书籍轮播图2：</label>
												<img src="/bookstore/Public/images/add.png" id="upmy-imgtwo" style="width: 50px;height: 50px;"> 
												<div class="col-xs-8">
													<input type="file" class="duiqi uplbimgb upimgtwo" id="uppimgtwo" style="display: none" name="Imgtwo">
												</div>
												<img id="upimg_previewtwo" data-src="" src="/bookstore/Public/images/empty.png" data-holder-rendered="true" style="width: 50px;height: 50px;margin-left: 15px">
											</div>
											<div class="form-group udshow">
												<label for="sOrd" class="col-xs-4 control-label bookfz ">作者：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi bookauthor upauthor" id="upauthor" name="author">
												</div>
											</div>
											<div class="form-group udshow">
												<label for="sOrd" class="col-xs-4 control-label bookfz ">出版社：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi bookpub uppublisher" id="uppublish" name="publisher">
												</div>
											</div>
											<div class="form-group udshow">
												<label for="sOrd" class="col-xs-4 control-label bookfz ">出版时间：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi bookpubtime uppubtime" id="uppubtime" placeholder="格式：2018-12-16" name="pubTime">
												</div>
											</div>
											<div class="form-group udshow">
												<label for="sOrd" class="col-xs-4 control-label bookfz ">折扣价：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi discount upcurrentprice" id="upcountprice" placeholder="输入单价折扣数自动计算" name="currentprice">
												</div>
											</div>
											<div class="form-group udshow">
												<label for="sOrd" class="col-xs-4 control-label bookfz ">单价：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi bookprice updateprice" id="upprice" name="price">
												</div>
											</div>
											<div class="form-group udshow">
												<label for="sOrd" class="col-xs-4 control-label bookfz ">折扣数：</label>
												<div class="col-xs-8">
													<input type="text" class="form-control input-sm duiqi bookdiscount updatediscount" onblur="JavaScript:textbox(this)" id="updiscount" placeholder="折扣数为10则不打折" min="0" max="10" name="discount">
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
										<button type="submit" class="btn btn-xs btn-green checkbook">保 存</button>
									</div>
								</form>
							</div>
							<!-- /.modal-content -->
						</div>
						<!-- /.modal-dialog -->
					</div>
					<!-- /.modal -->

					<!--弹出删除书籍警告窗口-->
					<div class="modal fade" id="deleteSchool" role="dialog" aria-labelledby="gridSystemModalLabel">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<form action="<?php echo U('Admin/Bookindex/delbookindex');?>" method="POST">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="gridSystemModalLabel">提示</h4>
									</div>
									<div class="modal-body">
										<div class="container-fluid">
											确定要删除该书籍？删除后不可恢复！
											<input type="text" name="delbookid" class="deludbookid" style="display: none;">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-xs btn-white" data-dismiss="modal">取 消</button>
										<button type="submit" class="btn btn-xs btn-danger">保 存</button>
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
				$(".gofindbook").click(function(){
					if ($(".findbook").val() == '') {
						alert("查询不允许为空");
						return false;
					}
				})
				$(".deludbook").click(function(){
					var delbookid = $(this).data("delbookid");
					$(".deludbookid").val(delbookid);
				})
				$(".updatebook").click(function(){
					var bookid = $(this).data("bookid");
					var claname = $(this).data("claname");
					var title = $(this).data("title");
					var image = $(this).data("image");
					var imgone = $(this).data("imgone");
					var imgtwo = $(this).data("imgtwo");
					var author = $(this).data("author");
					var publisher = $(this).data("publisher");
					var pubtime = $(this).data("pubtime");
					var currentprice = $(this).data("currentprice");
					var price = $(this).data("price");
					var discount = $(this).data("discount");
					$(".upbookid").val(bookid);
					$(".upclaname").val(claname);
					$(".uptitle").val(title);
					// $(".upimage").val(image);
					// $(".upimgone").val(imgone);
					// $(".upimgtwo").val(imgtwo);
					$("#upimg_previewa").attr("src","/bookstore"+image);
					$("#upimg_previewone").attr("src","/bookstore"+imgone);
					$("#upimg_previewtwo").attr("src","/bookstore"+imgtwo);
					$(".upauthor").val(author);
					$(".uppublisher").val(publisher);
					$(".uppubtime").val(pubtime);
					$(".upcurrentprice").val(currentprice);
					$(".updateprice").val(price);
					$(".updatediscount").val(discount);
				})
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
					}else if($(".newpwdone").val() == ''){
						alert("请输入新密码！");
						return false;
					}else if ($(".newpwdtwo").val() == '') {
						alert("请输入重复密码！");
						return false;
					}else if ($(".newpwdone").val() != $(".newpwdtwo").val()) {
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
$('#my-img').click(function(){
	$('#zx_img').click();
});
$('#my-imgone').click(function(){
	$('#pimgone').click();
});
$('#my-imgtwo').click(function(){
	$('#pimgtwo').click();
});
$('#upmy-imga').click(function(){
	$('#upbookimga').click();
});
$('#upmy-imgone').click(function(){
	$('#uppimgone').click();
});
$('#upmy-imgtwo').click(function(){
	$('#uppimgtwo').click();
});

$("#zx_img").change(function (e) {
//获取目标文件
var file = e.target.files || e.dataTransfer.files;
//如果目标文件存在
if (file) {
//定义一个文件阅读器
var reader = new FileReader();
//文件装载后将其显示在图片预览里
reader.onload = function () {
	$("#img_preview").attr("src", this.result);
}
//装载文件
reader.readAsDataURL(file[0]);
}
});
$("#pimgone").change(function (e) {
//获取目标文件
var file = e.target.files || e.dataTransfer.files;
//如果目标文件存在
if (file) {
//定义一个文件阅读器
var reader = new FileReader();
//文件装载后将其显示在图片预览里
reader.onload = function () {
	$("#img_previewone").attr("src", this.result);
}
//装载文件
reader.readAsDataURL(file[0]);
}
});
$("#pimgtwo").change(function (e) {
//获取目标文件
var file = e.target.files || e.dataTransfer.files;
//如果目标文件存在
if (file) {
//定义一个文件阅读器
var reader = new FileReader();
//文件装载后将其显示在图片预览里
reader.onload = function () {
	$("#img_previewtwo").attr("src", this.result);
}
//装载文件
reader.readAsDataURL(file[0]);
}
});
$("#upbookimga").change(function (e) {
//获取目标文件
var file = e.target.files || e.dataTransfer.files;
//如果目标文件存在
if (file) {
//定义一个文件阅读器
var reader = new FileReader();
//文件装载后将其显示在图片预览里
reader.onload = function () {
	$("#upimg_previewa").attr("src", this.result);
}
//装载文件
reader.readAsDataURL(file[0]);
}
});
$("#uppimgone").change(function (e) {
//获取目标文件
var file = e.target.files || e.dataTransfer.files;
//如果目标文件存在
if (file) {
//定义一个文件阅读器
var reader = new FileReader();
//文件装载后将其显示在图片预览里
reader.onload = function () {
	$("#upimg_previewone").attr("src", this.result);
}
//装载文件
reader.readAsDataURL(file[0]);
}
});
$("#uppimgtwo").change(function (e) {
//获取目标文件
var file = e.target.files || e.dataTransfer.files;
//如果目标文件存在
if (file) {
//定义一个文件阅读器
var reader = new FileReader();
//文件装载后将其显示在图片预览里
reader.onload = function () {
	$("#upimg_previewtwo").attr("src", this.result);
}
//装载文件
reader.readAsDataURL(file[0]);
}
});
</script>
</body>

</html>