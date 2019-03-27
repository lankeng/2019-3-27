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
<div class="usercenter">
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>

<!--<ul class="menu left">
	<li><a href="/sp_shop/Home/User/index" id="User_index">个人信息</a></li>
	<li>我的订单</li>
	<li>我的关注</li>
	<li><a href="/sp_shop/Home/User/addrList" id="User_addr">收货地址</a></li>
	<li>消费记录</li>
	<li><a href="/sp_shop/Home/Cart/index" id="Cart_index">购物车</a></li>
</ul>
--><script>
$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>

</body>
</html>
	<div class="container">
		
		<span class="label label-primary"  style="padding:12px;font-size:14px;letter-spacing:2px;">我的购物车<span class="glyphicon glyphicon-shopping-cart" style="margin-left:10px"></span></span>
		<form method="post">
		<table id="shopcart" class="table table-striped  text-center " style="letter-spacing:2px;margin-top:30px">
			<tr >
				<td><input type="checkbox" class="checkAll"
					onclick="checkedAll()" /></td>
				<td>商品图</td>
				<td>商品名</td>
				<td>单价</td>
				<td>数量</td>
				<td>操作</td>
			</tr>
			<?php if(is_array($cart)): foreach($cart as $key=>$v): ?><tr>
				<td><input type="checkbox" value="<?php echo ($v["scid"]); ?>" name="scid" class="check"/></td>
				<td><a href="/sp_shop/Home/Index/goods/id/<?php echo ($v["gid"]); ?>" target="_blank"><img
					src="/sp_shop/Public/uploads/thumb/<?php echo ($v["thumb"]); ?>"></a></td>
				<td><span><?php echo ($v["gname"]); ?></span></td>
				<td><span class="item-price"><?php echo ($v["price"]); ?></span></td>
				<td class="quantity-form">
					<input class="setNum btn btn-default" type="button" value="-" />
					<input class="item-num form-control" onkeyup="checkNum(this)" 
						type="text" value="<?php echo ($v["num"]); ?>" name="num[]" id="<?php echo ($v["scid"]); ?>" max="<?php echo ($v["stock"]); ?>" style="width:50px;display:inline"/>
					<input class="setNum btn btn-default" type="button" value="+" /></td>
				<td>
					<button class="btn btn-default">
						<a class="glyphicon glyphicon-remove" href="/sp_shop/Home/Cart/del/scid/<?php echo ($v["scid"]); ?>" style="color:gray"></a>
					</button></td>
			</tr><?php endforeach; endif; ?>
			<tr>
				<td><a href="javascript:void(0);" onclick="checkedAll()" class="check">全选</a></td>
				<td colspan="5" class="text-right">删除选中的商品&nbsp;&nbsp;<a href="/sp_shop/Home/Index/find/cid/1">继续购物</a>&nbsp;&nbsp; 共<span
					id="num"></span>件商品 总计：<span class="price"><span id="monery"></span>元</span><input
					type="hidden" id="totalPrice" name="totalPrice" /> <a
					href="javascript:void(0);" data-url="<?php echo U('Order/sb_order');?>"
					class="order-btn  btn btn-danger">去结算</a></td>
			</tr>
		</table>
		</form>
	</div>
	<div class="clear"></div>
</div>
<script src="/sp_shop/Public/js/jquery.min.js"></script>
<script>
	//点击修改数量
	$(".setNum").click(function () {
		if ($(this).val() === '-') {
			if ($(this).next().val() !== '1') {
				var num = $(this).next().val() - 1;
				$(this).next().attr("value", num);
				$(this).next().val(num);
			}
		}else if ($(this).val() === '+') {
			if ($(this).prev().val() !== '100') {
				var total_num=$(this).parents('.quantity-form').find('input[type=text]').attr('max');
				var num = parseInt($(this).prev().val()) + parseInt(1);
				if(num>=100){
					$(this).prev().attr("value", "99");
					$(this).prev().val("99");
				}else{
					if(num>total_num){
						alert('库存不足');
					}else{
						$(this).prev().attr("value", num);
						$(this).prev().val(num);
					}
				}
			}
		}
		changeNum1(this);
		func();
	});
	//键盘修改数量
	function checkNum(obj) {
		//判断当前值是否合法   凡是不合法的都重置为1
		var num = $(obj).val();
		if (num <= 1 || num > 99) {
			$(obj).val(1);
		}
		$(obj).attr("value", num);
		changeNum1(obj);
		func();
	}
	//默认情况下，设置为全选状态
	$(function () {
		$(":checkbox").prop("checked", true);
		$(":checkbox").attr("checked", true);
		$.ajax({
			type:"get",
			url:"<?php echo U('Cart/defaultChecked');?>"
		});
		func();
	});
	//全选
	function checkedAll() {
		$(".check").prop("checked",$(".checkAll").prop("checked"));
		$(".check").attr("checked",$(".checkAll").prop("checked"));
		checkedAllStatus();
		func();
	}
	//单个选择时的状态设置
	$(".check").click(function () {
		var allChecked = true;		
		$('.check').each(function (i, v) {
            if($(this).prop("checked") == false||$(this).attr("checked") == false){
                allChecked = false;
            };
		});
        if(allChecked){
            $(".checkAll").prop("checked",true);
            $(".checkAll").attr("checked",true);
        } else {
            $(".checkAll").prop("checked",false);
            $(".checkAll").attr("checked",false);
        };
        var _this=$(this).prop("value");
        checkedOnlyStatus(_this);
		func();
	});
	//计算总价
	function func() {
		var price = 0;
		var num = 0;
		var totalnum = 0;
		$("#shopcart").find(":checkbox:checked").each(function () {
			$(this).closest("tr").find(".item-num").each(function () {
				totalnum += parseInt($(this).val());
				num = parseInt($(this).val());
				$(this).closest("tr").find(".item-price").each(function () {
					price += parseInt($(this).text()) * num;
				});
			});
		});
		$("#monery").text(price);
		$("#num").text(totalnum);
		$("#totalPrice").attr("value",price);
	}
	
	
	//判断全选是否商品选中
	function checkedAllStatus(){
		var checked=$(".item").find("input[type=checkbox]");
		checked.each(function(i,n){
			var scid=$(this).prop("value");
			$.ajax({
				type:"post",
				url:"<?php echo U('Cart/changeChecked');?>",
				dataType:'json',
				data:{scid:scid},
			});
		});
		func();
	}
	//判断单选是否商品选中
	function checkedOnlyStatus(scid){
		$.ajax({
			type:"post",
			url:"<?php echo U('Cart/changeChecked');?>",
			dataType:'json',
			data:{scid:scid},
		});
		func();
	}
	
	//更改购物车请求事件
	function changeNum1(obj){
		var input = $(obj).parents('.quantity-form').find('input[type=text]');
		var goods_num=input.attr('value');
		var cart_id=input.attr('id');
		//var cart=new CartItem(cart_id,goods_num);
		$.ajax({
			type:"POST",
			url:"<?php echo U('Cart/changeNum');?>",
			dataType:'json',
			data:{cart_id:cart_id,goods_num:goods_num},
			success:function(data){
				if(data.status==1){
					input.val(goods_num);
				}
			},
			error:function(){
				alert('修改失败');
			}
		});
	}
	
	//购物车提交
	$(".order-btn").click(function(){
		var a= $("input:checkbox:checked").length; 
		if(a<1){
			alert("没有选中商品");
		}else{
			window.event.returnValue=false;//阻止表单提交事件
			window.location.href=$(this).attr('data-url');
		}
	});
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