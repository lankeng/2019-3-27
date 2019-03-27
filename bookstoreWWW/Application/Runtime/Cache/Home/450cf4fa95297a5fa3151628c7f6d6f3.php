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
	<link href="/sp_shop/Public/css/home.css" rel="stylesheet" />
</head>
<body>
<ul class="nav nav-pills nav-stacked left" style="width: 220px;">
			<li class="active"><a href="#a" data-toggle='tab'>如何挑选高档水晶工艺品</a></li>
			<li><a href="#b" data-toggle='tab'>水晶工艺品让家变得高雅</a></li>
			<li><a href="#c" data-toggle='tab'>教你如何保养水晶工艺品</a></li>
			<li><a href="#d" data-toggle='tab'>如何辨别水晶的优劣</a></li>
		</ul>
		
		<div class="tab-content left" style="width:920px;margin:15px;letter-spacing:2px;text-indent:2em;">
			<div class="tab-pane in fade active" id="a"><!--淡出效果 fade， in 表示首选的内容默认显示-->
				<p>现在市场上的水晶工艺品有很多的，就连装潢材料都是属于水晶装潢材料。但是这当中并不是真的都是属于真的水晶工艺品的，所以消费者想要使得自己购买会来的产品是真的高档的，就来看看水晶定制厂家说说如何挑选高档水晶工艺品。</p>
				<p>一、看做工：水晶制品加工过程分为两种，即磨工和雕工。如水晶项链、手链、耳环等属于研磨品;观音像、内画鼻烟壶等属于雕刻品。</p>
				<p>二、看抛光：抛光的好坏直接影响到水晶制品的身价。水晶工艺品在加工过程中须经过金刚沙的琢磨，粗糙的制作会使水晶表面存在磨擦的痕迹。</p>
				<p>三、看孔眼：对于缀穿水晶制品(如项链、手链、佛珠)，要看孔眼是否平直，孔的粗细是否匀称，有无细小裂纹。</p>
				<p>四、看颜色：即使在同一种类的水晶中，它的不同部位的纹理、色泽也各式各有千秋。</p>
				<p>五、看协调：购买水晶饰品时，应试戴一下，看其大小、松紧、长短。如是镶嵌饰物，看是否牢固、周正和协调统一。</p>
				<p>六、看选料：选料精良的水晶工艺品，应看不到星点状、云雾状和絮状分布的气液包体。</p>
				<p>只有这样的方法才能使得我们在选购的时候得到很好的水晶工艺品，在使用水晶工艺品的时候也是需要注意他的保养工作是怎么样的，清洁工作也是要做好。</p>
			</div>
			<div class="tab-pane fade" id="b">
				<p>水晶的清澈、光洁、剔透及高折射特性使其具有高贵、纯洁的气质。目前市场上的水晶工艺加工主要采用人造水晶为材料加工而成。人造水晶分为铅人造水晶和无铅人造水晶。前者因有较高含量的铅而折射度更高，后者通过添加氧化硼和氧化钡而保持水晶的特性，价格较前者低。水晶在颜色方面以透明无色居多，一般工艺品多采用无色水晶雕刻而成。但也有一些彩色水晶，如紫水晶、红水晶、黄水晶、绿水晶、茶水晶、墨水晶等。水晶的工艺除表面雕刻、打磨、切割外，还包括内雕。内雕是九十年代出现的，目前较流行的一种科技含量较高的工艺。雕刻的图案悬浮在水晶内部，表面完好无损。水晶内雕主要是通过激光完成。图案设计精确，立体感强，栩栩如生，效果好。</p>
				<p>按古代中国人的说法，水晶是性灵之物，黄、绿色的水晶主财运，紫水晶能化解烦恼，玫瑰红色的水晶则会带来爱情。家中的运用可华贵到璀璨生辉，亦可平静到安详柔美，何种风情全在主人点睛手笔的高下。</p>
				<p>家中使用水晶制品对室内用光也有许多讲究。如果是摆件，一定要放在有射灯的地方方能尽显其晶莹剔透的美轮美奂，如果是日常用品，也宜在光线较为凝聚而柔和的地方使用冷光能充分烘托水晶的冰清玉洁，暖光则宜于表现水晶的安静柔美，无论冷暖光，都切忌把水晶照射成一片光斑迷人眼的地步，那样，人们就无法细细欣赏水晶的美丽了。</p>
			</div>
			<div class="tab-pane fade" id="c">
				<p>水晶工艺品是装饰现代生活、提高生活品位的时尚物品。水晶工艺品要注意保养与清洗。保养和清洗过程中应需注意以下几点：</p>
				<p>1、有油渍或手印留在水晶器皿上时，可以用微温的肥皂水洗涤，再用清水冲干净。要避免重复在热水或清洁济中清洗。有切割的水晶摆件，切割的部分可用牙刷轻轻清洗，如果有不易洗掉的污点，可以把柠檬切开抹些盐，轻轻擦洗。也可用几滴加盐的醋来擦。如在储放水晶花瓶时，事先在搁架上铺上垫布，把水晶花瓶放在密封的玻璃柜或陈列箱内，以减少水晶表面积聚尘埃的机会，也可减少人手接触，避免造成破坏。</p>
				<p>2、水晶性脆，注意防重压、防摔、防高温，防强碱、强酸。移动水晶时，最好戴上柔软的棉质手套，避免手上的油渍污染收藏品。提起水晶物品时，不要抓着水晶摆件的顶部或外延部位，应抓紧水晶的底座或整个身体。发现水晶藏品上有灰尘，切勿使用羽毛刷子，而要以轻软而不含绒毛的布料轻拂除尘，不要用力拂拭，以免磨破水晶。</p>
				<p>3、不要让水晶工艺品靠得太近，否则碰到其中一件时，其他也会因骨牌效应而倾倒。确保饰柜稳固可靠，不易动摇。</p>
				<p>4、如果要长时间存放水晶工艺品，不要使用发泡胶纸或塑料袋。这类包装袋会增加温度，对水晶造成损害。同时，千万不要把水晶存放在阁楼或地窖，以免它们置身于恶劣的环境中。</p>
			</div>
			<div class="tab-pane fade" id="d">
				<p>天然的东西都有好坏之分，水晶也一样，不像一些宝石有标准的判断要素，影响水晶品质的因素有很多，所以大家要多听多看多比较才能真正辨别出来。一般的标准是水晶石越大越好，越透越好，颜色越娇嫩越好，形状越典型越好。不过最重要还是自己喜欢，下面就学学如何辨别水晶的优劣：</p>
				<p>关于水晶的鉴别方法：</p>
				<p>1.颜色、透明度</p>
				<p>一般而言，紫晶和黄水晶是常见水晶中价值较高的品种。两者进一步的分级是根据它们的颜色深浅，颜色较深的为A级，稍浅的为B级。一般来说，颜色较深的价值高，但不要以深暗为标准哦。颜色包括两种，一种是水晶本身的颜色，另一种是内部包裹体的颜色。水晶本身的颜色要艳丽、纯正，分布要均匀，不能太浅或太深，例如好像澳洲玉，蓝玉髓，紫晶，黄水晶，其价格就高了。无色水晶内含包裹体的颜色艳丽，其价格也高，如钛晶、绿幽灵、红兔毛。紫水晶一般已稍有云状物、颜色深紫、晶体通透为上品。</p>
				<p>按透明度指标，水晶越透明，价格就越高，好的透明水晶加工出的成品晶莹剔透、光辉耀眼。透明度高的水晶能提升颜色的艳丽，否则显得呆板无灵性。光学水晶要求全透明、无双晶、无杂质。工艺水晶要求透明，少裂、少瑕疵。</p>
				<p>2.特殊图案及包裹体</p>
				<p>玉石纹理如果能形成美丽的花纹、图案，其价格就高，如玛瑙内红白相间的色带有规律的排列，形成缠丝玛瑙时，碧玉中的不均匀颜色形成一种美丽风景图案时，材料的价值将提升。当水晶内包裹体形成美丽图案时，如幽灵水晶、风景水晶，或者针状包裹体呈束状排列时，其价值都高于普通水晶。图案越美观、越有意境越好。
				<p>发晶的价值取决于发的颜色、罕见性及大小，一般是发色鲜艳、块度大的价格高。水胆水晶的价值主要取决于水胆及晶体的大小、透明度的高低。如果水胆较大并有一定形态，便可加工成交为珍贵的工艺品。</p>
				<p>3.块体的大小</p>
				<p>水晶的价值还与晶体的大小有关，同样的颜色和净度级别，块越大越难得。有时候质量级别虽低一些，但晶体够大，也可能价格高于高级别的小晶体。</p>
				<p>4.净度</p>
				<p>无色水晶以晶莹美丽、洁净透明著称。衡量无色水晶主要看它的纯度，越纯、越透明越好。干净的、无瑕疵的、杂质少的价值就高。无色水晶如果很脏，就没有利用价值了。</p>
				<p>5.质地</p>
				<p>杂质、裂纹越少越好。质地好的水晶制品，因看不到星点状、云雾状和絮状分布的气液包裹体或组成玉石的颗粒，有裂纹、斑点则属次品。
				<p>水晶的价值根据品质、块体的大小、美感和产量的多少的不同相差较大。遇到好的水晶要敢于下手，但好的水晶大家都想得到，值与不值，就要看经验了。由于天然水晶的开采和制作原因，没有瑕疵的水晶很难得到，纯净的饰品要达到与合成水晶媲美的品质，实在很难的。在目前市场上，得到质量上乘的水晶已很不容易了。</p>
			</div>
		
		</div>
		<div class="clear"></div>
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