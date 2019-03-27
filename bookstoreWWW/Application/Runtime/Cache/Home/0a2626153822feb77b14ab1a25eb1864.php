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
    <div class=" ">
    	<span class="label label-primary"  style="padding:8px;font-size:14px;">管理收货地址<span class="glyphicon glyphicon-map-marker" style="margin-left:10px"></span></span>
        <form method="post">
            <input id="address" type="hidden" value="" name="address" />
            <table class="table table-striped table-bordered  text-center" style="width:800px;margin:20px auto;">
                <tr><td>收件人：</td><td><input class="form-control" style="display:inline;width:305px;" type="text" value="<?php echo ($addrInfo["consignee"]); ?>" name="consignee" /></td></tr>
                <tr><td>收件地区：</td><td>
                        <select id="province" onchange="toCity()" class="form-control" style="display:inline;width:100px;"><?php if(($addrInfo["address"]["0"]) != ""): ?><option><?php echo ($addrInfo["address"]["0"]); ?></option><?php endif; ?></select>
                        <select id="city" onchange="toArea()" class="form-control" style="display:inline;width:100px;"><option><?php echo ($addrInfo["address"]["1"]); ?></option></select>
                        <select id="area" class="form-control" style="display:inline;width:100px;"><option><?php echo ($addrInfo["address"]["2"]); ?></option></select>
                    </td></tr>
                <tr><td>详细地址：</td><td><input class="form-control" style="display:inline;width:305px;" id="addr" type="text" value="<?php echo ($addrInfo["address"]["3"]); ?>" /></td></tr>
                <tr><td>联系电话：</td><td><input class="form-control" style="display:inline;width:305px;" type="text" value="<?php echo ($addrInfo["tel"]); ?>" name="tel" /></td></tr>
                <tr><td>手机：</td><td><input class="form-control" style="display:inline;width:305px;" type="text" value="<?php echo ($addrInfo["cellphone"]); ?>" name="cellphone" /></td></tr>
                <tr><td>邮箱：</td><td><input class="form-control" style="display:inline;width:305px;" type="text" value="<?php echo ($addrInfo["email"]); ?>" name="email" /></td></tr>
                <tr><td colspan="2" class="button center"><input type="submit" value="保存" class="btn"/> <input type="reset" value="重置" class="btn"/></td></tr>
            </table>
        </form>
    </div>
    <div class="clear"></div>
</div>
<script src="/sp_shop/Public/js/jquery.min.js"></script>
<script>
    //在加载事件中载入省份
    var xmldom = null;	//保存请求到的xml文档信息
    $(function () {
        //利用ajax去服务器端请求xml信息
        $.ajax({
            url: '/sp_shop/Public/js/ChinaArea.xml',
            dataType: 'xml',
            type: 'get',
            success: function (msg) {
                xmldom = msg;
                //msg会以xmldom文档节点对象返回
                //父节点.find(内部子节点，不限制层次);
                //把msg转化为jquery对象寻找后代元素province
                var province = $(msg).find('province');
                //遍历province，把信息追加到select下拉列表里边
                $("#province").append("<option value=0>请选择</option>");
                province.each(function () {
                    //this 代表每个province的dom节点对象
                    var name = $(this).attr('province');  //获得省份名称
                    var id = $(this).attr('provinceID'); //省份id信息
                    $("#province").append("<option value='" + id + "'>" + name + "</option>");
                });
            }
        });
    });
    //通过onchange内容改变事件达到“省份和城市”关联效果
    function toCity() {
        //获得被切换的省份id信息
        var pid = $("#province").val();
        pid = pid.substr(0, 2);//获得value的前两位信息
        //获得city信息，属性cityID的前两位是pid开始
        var city = $(xmldom).find("City[CityID^=" + pid + "]");
        $("#city").empty();
        $("#city").append("<option value=0>请选择</option>");
        $("#area").empty();
        $("#area").append("<option value=0>请选择</option>");
        //遍历city信息，赋值到select下拉列表中
        city.each(function () {
            var name = $(this).attr('City');
            var id = $(this).attr('CityID');
            $("#city").append("<option value='" + id + "'>" + name + "</option>");
        });
    }
    function toArea() {
        var pid = $("#city").val();
        pid = pid.substr(0, 2);
        //获得city信息，属性cityID的前两位是pid开始
        var area = $(xmldom).find("Piecearea[PieceareaID^=" + pid + "]");
        $("#area").empty();
        $("#area").append("<option value=0>请选择</option>");
        area.each(function () {
            var name = $(this).attr('Piecearea');
            var id = $(this).attr('PieceareaID');
            $("#area").append("<option value='" + id + "'>" + name + "</option>");
        });
    }
    //提交表单时检查并拼接完整地址
    $("form").submit(function () {
        var pro_val = $("#province").find("option:selected").text();
        var city_val = $("#city").find("option:selected").text();
        var area_val = $("#area").find("option:selected").text();
        var addr = $("#addr").val();
        if (pro_val === '请选择' || city_val === '请选择' || area_val === '请选择' || $.trim(addr) === '') {
            alert('请输入正确的地址');
            return false;
        }
        $("#address").val(pro_val + ',' + city_val + ',' + area_val + ',' + addr);
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