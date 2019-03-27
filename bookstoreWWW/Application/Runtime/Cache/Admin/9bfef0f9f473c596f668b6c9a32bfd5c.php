<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>			
		<link rel="stylesheet" type="text/css" href="/sp_shop/Public/css/bootstrap.min1.css" />
		<link rel="stylesheet" type="text/css" href="/sp_shop/Public/css/nav.css">
    <link rel="stylesheet" type="text/css" href="/sp_shop/Public/fonts/iconfont.css">
	<script type="text/javascript" src="/sp_shop/Public/js/jquery.min.js"></script>
	<script type="text/javascript" src="/sp_shop/Public/js/jquery.min1.js"></script>
	<script type="text/javascript" src="/sp_shop/Public/js/nav.js"></script>
	</head>
	<body>
<div id="top">
<img src="/sp_shop/Public/img/鹅 (1).png" style="float: left;width: 60px;margin-left: 55px;" />
					
	<h1 style="float:left;margin-top:15px;margin-left:125px;color:white">尚品后台管理系统</h1>
	<ul style="float:right; color:white;">
		<li>欢迎您：<?php echo (session('admin_name')); ?></li>
		<li>|</li><li><a style="float:right; color:white;" href="/sp_shop/" target="_blank">前台首页</a></li>
		<li>|</li><li><a style="float:right; color:white;" href="/sp_shop/Admin/Login/logout">退出登录</a></li>
	</ul>
</div>
<div id="main">

 <div class="nav">

<ul>
           
 <li class="nav-item">
<a  class="glyphicon glyphicon-home" href="/sp_shop/Admin/Index/index" id="Index_index"><i class="my-icon nav-icon icon_1"></i><span>后台首页</span></a>
</li>



<li class="nav-item">
  <a href="javascript:;"><i class="my-icon nav-icon icon_2"></i><span>商品管理</span><i class="my-icon nav-more"></i></a>
<ul>
	<div id="menu" class="left">
		<ul>	
		<li><a class="glyphicon glyphicon-plus" href="/sp_shop/Admin/Goods/add" id="Goods_add">  商品添加</a></li>
			<li><a class="glyphicon glyphicon-list" href="/sp_shop/Admin/Goods/index" id="Goods_index">  商品列表</a></li>
			<li><a class="glyphicon glyphicon-align-left" href="/sp_shop/Admin/Category/index" id="Category_index">  商品分类</a></li>
			<li><a class="glyphicon glyphicon-trash" href="/sp_shop/Admin/Recycle/index" id="Recycle_index">  回收站</a></li>
		</ul>
	</div>

</ul>
</li>


<li class="nav-item">
  <a href="javascript:;"><i class="my-icon nav-icon icon_3"></i><span>会员管理</span><i class="my-icon nav-more"></i></a>
<ul>
	<div id="menu01" class="left">
		<ul>
			<a href="javascript:;"><li><a class="glyphicon glyphicon-user" href="/sp_shop/Admin/Users/index" id="Member_index">  会员信息</a></li></a>
            <li><a class="glyphicon glyphicon-user" href="/sp_shop/Admin/Users/index" id="Member_index">  黑名单</a></li>
		</ul>
	</div>

</ul>
</li>



</ul>
    </div>

<div id="content">
		<div class="item"><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
<div class="title" style="color:red;">商品分类列表</div>
<div class="title-btn " style="float:left;"><a  style="background-color:red;" href="/sp_shop/Admin/Category/add">添加分类</a></div>
<div class="data-tree clear">
	<?php function getdiv(&$list, $p_id=0){ ?>
	<?php if(is_array($list)): foreach($list as $key=>$v): if(($v["pid"]) == $p_id): ?><div><?php echo ($v["cname"]); ?> <!--<a  style="color:red;" href="#" onclick="add_line(this,<?php echo ($v["cid"]); ?>)">添加</a> --><a  style="color:red;"
href="/sp_shop/Admin/Category/revise/cid/<?php echo ($v["cid"]); ?>">修改</a> <a  style="color:red;" href="#"
onclick="del(this,<?php echo ($v["cid"]); ?>)">删除</a>
				<?php getdiv($list, $v['cid']);?>
			</div><?php endif; endforeach; endif; ?>
	<?php }getdiv($data);?>
</div>
<script>
	$(".data-tree").on("click","#new_div :button",function(){
		var cname = $("#new_cname").val();
		var pid = $("#new_pid").val();
		var div = $(this);
		$.post("/sp_shop/Admin/Category/addAjax",{cname: cname, pid: pid},function(msg){
			if (msg === false) {alert('添加失败');return false;}
			var html = "<div>" + cname;
			html += ' <a href="#" onclick="add_line(this,'+msg+')">添加</a> ';
			html += '<a href="/sp_shop/Admin/Category/revise/cid/'+msg+'")">修改</a> ';
			html += '<a href="#" onclick="del(this,'+msg+')">删除</a></div>';
			div.parent().parent().append(html);
			div.parent().remove();
        },'json');
	});
	function add_line(obj, id){
		var html = '<div id="new_div">子分类：<input type="text" id="new_cname" />';
		html += '<input type="button" value="提交" />';
		html += '<input type="hidden" value="'+id+'" id="new_pid" /></div>';
		if($("#new_div").val()===undefined){
			$(obj).parent().append(html);
			$("#new_cname").focus();
		}else{
			$("#new_div").remove();
		}
	}
	function del(obj, id) {
		$.get("/sp_shop/Admin/Category/remove", {cid: id}, function (msg) {
			if (msg.flag === true) {
				$(obj).parent().remove();
			}else{
				alert(msg.msg);
			}
		}, "json");
	}
</script>

</body>
</html></div>
	</div>
</div>


<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
	</body>
</html>