<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<title>尚品工艺</title>
	<link href="/sp_shop/Public/css/home.css" rel="stylesheet" />
	<link href="/sp_shop/Public/css/bootstrap.css" rel="stylesheet" />

</head>
<body style="background-color:#fafafa;">
	<div id="top">
		<div class="top_nav">
			<ul>
				<?php if(isset($uid)): ?><li><?php echo ($uname); ?>，欢迎来到尚品小店 ~<li>
				<?php else: ?>
				<li>您好，欢迎来到尚品小店 ~</li><?php endif; ?>
			</ul>
			<ul class="right">
				<?php if(isset($uid)): ?><li><a href="#">我的订单</a></li>
<!--				<li class="line">|</li><li><a href="/sp_shop/Home/User/index">会员中心</a></li>-->
<!--				<li class="line">|</li><li><a href="/sp_shop/Home/Cart/index">我的购物车</a></li>-->
				<li class="line">|</li><li><a href="#" id="call">联系客服</a></li>
				<li class="line">|</li><li><a href="/sp_shop/Home/User/logout">退出</a><li>
				<?php else: ?>
				<li><a href="/sp_shop/Home/User/login">登录</a><li class="line">|</li><a href="/sp_shop/Home/User/register">注册</a></li><?php endif; ?>
			</ul>
		</div>
	</div>
		<!--联系客服模态框-->
	<div class="modal  fade" id="mymodal" tabindex="-1"><!--模态框声明--><!--tabindex="-1" 焦点取消(按Esc就可以退出)-->
		<div class="modal-dialog"><!--窗口声明--><!--modal-sm/lg 调整窗口大小-->
			<div class="modal-content" style="letter-spacing:2px;"><!--内容声明-->
				<div class="modal-header"> <!--内容头部-->
					<button class="close" data-dismiss='modal'><span>&times;</span></button><!--关闭按钮-->
					<h4 class="modal-title text-center">联系客服</h4><!--标题-->
				</div>
				<div class="modal-body">	
					<div class="container-fluid"><!--在主体部分使用栅格系统中的流体-->
						<div class="row modal-row">
							<div class="col-xs-3 text-right">
								<span class="glyphicon glyphicon-phone-alt"></span>：						
							</div>
							<div class="col-xs-9">13715875779 / 13714968686</div>
						</div>
						<div class="row modal-row">
							<div class="col-xs-3 text-right">QQ：</div>
							<div class="col-xs-9">1300341068</div>
						</div>
						<div class="row modal-row">
							<div class="col-xs-3 text-right">
								<span class="glyphicon glyphicon-envelope"></span>：
							</div>
							<div class="col-xs-9">1300341068@qq.com</div>
						</div>
					</div>						
				</div>
			</div>
		</div>
	</div>	
	<div id="box">
<!--		<div id="header">-->
<!--			<a class="left" href="/sp_shop/"><div id="logo"></div></a>-->
<!--			<div id="search" class="left">-->
<!--				<input type="text" class="left" />-->
<!--				<input class="search_btn" type="button" value="搜索" />-->
<!--			</div>-->
<!--			<div id="info" class="left">-->
<!--				<button href="/sp_shop/Home/User/index" class="btn btn-default" >会员中心</button>-->
<!--				<button href="/sp_shop/Home/Cart/index" class="btn btn-default" >去购物车结算</button>-->
<!--			</div>-->
<!--		</div>-->
<!--		<div class="clear"></div>-->
<!--		<div id="nav">-->
<!--			<ul><li class="category"><a href="#">全部商品分类</a></li><li class="curr"><a href="/sp_shop/">首页</a></li>-->
<!--				<li><a href="#">PHP</a></li><li><a href="#">Java</a></li><li><a href="#">安卓</a></li>-->
<!--				<li><a href="#">.Net</a></li><li><a href="#">C/C++</a></li><li><a href="#">IOS</a></li>-->
<!--			</ul>-->
<!--		</div>-->
		<div class="container">
			<div class="row index_top" >
				<div class="col-md-2">
					<a href="/sp_shop/Home/Index/index/cid/1"><img src="/sp_shop/Public/img/logo.png" class="img-responsive logo_img"/></a>
				</div>
				<div class="col-md-7 mp0">
					<ul class="nav nav-pills nav-justified margin-top15" style="border:solid 1px cornflowerblue;border-radius:5px;background-color:white;">
						<li><a href="/sp_shop/Home/Index/index/cid/1">首页</a></li>
						<li><a href="/sp_shop/Home/Index/find/cid/1">产品</a></li>
						<li><a href="/sp_shop/Home/Know/index">小知识</a></li>
						<li class='dropdown'>
							<a href="#" data-toggle='dropdown'>会员中心 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="/sp_shop/Home/User/addrList" style="padding:10px 10px 10px 30px;"><span class="glyphicon glyphicon-map-marker"></span>&nbsp;&nbsp;&nbsp;&nbsp;收货地址</a></li>
								<li><a href="/sp_shop/Home/Cart/index" style="padding:10px 10px 10px 30px;"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;购物车</a></li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="col-md-3">
					<div class="input-group margin-top15">
						<input type="text" class="form-control" placeholder="水晶球"/>
						<div class="input-group-btn">
							<button class="btn btn-default" style="padding:9px"><i class="glyphicon glyphicon-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div class="goodsinfo">
<div class="now_cat">
	<span class="label label-primary"  style="padding:6px;font-size:14px;letter-spacing:2px;">当前位置：</span>
	<ol class="breadcrumb" style="display:inline;">
		<li><?php if(is_array($pcats)): foreach($pcats as $key=>$v): ?><a href="/sp_shop/Home/Index/find/cid/<?php echo ($v["cid"]); ?>"><?php echo ($v["cname"]); ?></a><?php endforeach; endif; ?></li>
		<li class="active"><?php echo ($goods["gname"]); ?></li>
	</ol>
<!--	<?php if(is_array($pcats)): foreach($pcats as $key=>$v): ?>&nbsp;<a href="/sp_shop/Home/Index/find/cid/<?php echo ($v["cid"]); ?>"><?php echo ($v["cname"]); ?></a>&nbsp;<?php endforeach; endif; ?>-->
<!--	&nbsp;<?php echo ($goods["gname"]); ?>-->
	</div>
<div class="pic left"><?php if(empty($goods["thumb"])): ?><img
	src="/sp_shop/Public/image/preview2.jpg" class="img-responsive "/><?php else: ?> <img
	src="/sp_shop/Public/uploads/<?php echo ($goods["thumb"]); ?>" class="img-responsive " /><?php endif; ?></div>
<div class="info left">
	<h1><?php echo ($goods["gname"]); ?></h1><hr/>
	<table>
		<tr>
			<th>售 价：</th>
			<td><span><?php echo ($goods["price"]); ?>元</span></td>
		</tr>
		<tr>
			<th>商品编号：</th>
			<td><?php echo ($goods["identifier"]); ?></td>
		</tr>
		<tr>
			<th>月销量：</th>
			<td>120</td>
		</tr>
		<tr>
			<th>好评率：</th>
			<td>95.3%</td>
		</tr>
		<tr>
			<th>配送至：</th>
			<td>全国（免运费）</td>
		</tr>
		<tr>
			<th>购买数量：</th>
			<td>
				<button class="btn btn-default cnt-btn" value="-">-</button>
				<input type="text" class="form-control num-btn" value="1" id="num" style="width:50px;display:inline"/>
				<button class="btn btn-default cnt-btn" value="+">+</button></div>
				（库存：<?php echo ($goods["stock"]); ?>）
<!--			<input type="button" value="-" class="cnt-btn btn btn-default" /> <input-->
<!--				type="text" value="1" id="num" class="num-btn btn btn-default" /> <input-->
<!--				type="button" value="+" class="cnt-btn btn btn-default" />（库存：<?php echo ($goods["stock"]); ?>）-->
			</td>
		</tr>
		<tr>
			<th></th>
			<td colspan="2" class="button">
				<a href="#" class="btn btn-danger" style="color:white">立即购买</a>
				<a href="#" class="btn btn-danger" style="color:white" onclick="addCart()">加入购物车</a>
			</td>
		</tr>
	</table>
</div>
<div class="clear"></div>
<hr/>
<ul class="slide left">
	<?php if(is_array($hot)): foreach($hot as $key=>$v): ?><li class="tu text-center">
			<p class="thum"><a href="/sp_shop/Home/Index/goods/id/<?php echo ($v["gid"]); ?>" target="_blank"><?php if(empty($v["thumb"])): ?><img src="/sp_shop/Public/img/preview.jpg"><?php else: ?><img src="/sp_shop/Public/uploads/thumb/<?php echo ($v["thumb"]); ?>"><?php endif; ?></a></p>
			<h3><a href="/sp_shop/Home/Index/goods/id/<?php echo ($v["gid"]); ?>" target="_blank"><?php echo ($v["gname"]); ?></a></h3>
			<p class="price"><?php echo ($v["price"]); ?>元</p>
		</li><?php endforeach; endif; ?>
</ul>
<div class="desc left">
<div class="attr">
<p>商品描述</p>
<!--<ul>
	<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><li><?php echo ($v["aname"]); ?>：<?php echo ($v["avalue"]); ?></li><?php endforeach; endif; ?>
	<div class="clear"></div>
</ul>
-->
</div>
<?php echo (nl2br($goods["description"])); ?></div>
<div class="clear"></div>
</div>

<script src="/sp_shop/Public/js/jquery.min.js"></script>
<script>
	//购买数量加减
	$(".cnt-btn").click(function(){
		var num = parseInt($("#num").val());
		if ($(this).val() === '-') {
			if ( num=== 1) return;
			$("#num").val(num-1);
		}else if ($(this).val() === '+') {
			if (num === <?php echo ($goods["stock"]); ?>) return;
			$("#num").val(num+1);
		}
	});
	//自动纠正购买数量
	$("#num").keyup(function(){
		var num = parseInt($(this).val());
		if(num<1){ 
			$(this).val(1);
		}else if(num > <?php echo ($goods["stock"]); ?>){
			$(this).val(<?php echo ($goods["stock"]); ?>);
		}
	});
	//添加购物车
	function addCart(){
		var num = $("#num").val();
		window.location.href = '/sp_shop/Home/Cart/add/gid/<?php echo ($gid); ?>/num/'+num;
	}
</script>
</body>
</html>
		<!--<div id="service">
			<ul><li>购物指南</li><li>配送方式</li><li>支付方式</li>
				<li>售后服务</li><li>特色服务</li><li>网络服务</li>
			</ul>
			<div class="clear"></div>
		</div>
	--></div>
	<script src="/sp_shop/Public/js/jquery.min.js"></script>
	<!--
	<script src="/sp_shop/Public/js/jquery-3.1.1.min.js"></script>
	-->
	<script src="/sp_shop/Public/js/bootstrap.js"></script>
	<script src="/sp_shop/Public/js/style.js"></script>
	<script>
	$("#call").on('click',function(){
		$("#mymodal").modal('show');		
	});
	</script>
</body>
<hr style="box-shadow: 0px 1px 0px #D5D5D5;" />
		<footer>
			<p style="text-align: center;">电话:6666-666-666&nbsp;&nbsp;地址:广州市从化区广从南路548号R820</p>
			<p style="text-align: center;">©&#x3000;2017&#x3000;广州尚品工艺有限公司&#x3000;ShangPin.com&#x3000;京ICP证100572号&#x3000;京ICP备11004896号&#x3000;京公网安备110105001181号</p>
		</footer>
</html>