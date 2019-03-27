<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link href="/sp_shop/Public/css/ht-index.css" rel="stylesheet" />
	<script src="/sp_shop/Public/js/jquery.min.js"></script>
	</head>
	<body>
<div id="top">
<img src="/sp_shop/Public/img/鹅 (1).png" style="float: left;width: 60px;margin-left: 55px;" />
					
	<h1 class="left">尚品后台管理系统</h1>
	<ul class="right">
		<li>欢迎您：<?php echo (session('admin_name')); ?></li>
		<li>|</li><li><a href="/sp_shop/" target="_blank">前台首页</a></li>
		<li>|</li><li><a href="/sp_shop/Admin/Login/logout">退出登录</a></li>
	</ul>
</div>
<div id="main">
	<div id="menu" class="left">
		<ul><li><a href="/sp_shop/Admin/Index/index" id="Index_index">后台首页</a></li>
			<li><a href="/sp_shop/Admin/Goods/add" id="Goods_add">商品添加</a></li>
			<li><a href="/sp_shop/Admin/Goods/index" id="Goods_index">商品列表</a></li>
			<li><a href="/sp_shop/Admin/Attribute/index" id="Attribute_index">商品属性</a></li>
			<li><a href="/sp_shop/Admin/Category/index" id="Category_index">商品分类</a></li>
			<li><a href="/sp_shop/Admin/Recycle/index" id="Recycle_index">回收站</a></li>
			<li><a href="/sp_shop/Admin/Users/index" id="Member_index">会员管理</a></li>
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
<div class="title">属性添加页面</div>
<div class="data-edit clear">
	<form method="post">
	<input type="hidden" value="<?php echo ($cid); ?>" name="cid" />
	<table>
		<tr><td>属性名</td><td>属性默认值</td></tr>
		<tr>
			<td><input type="text" name="aname" /></td>
			<td><input type="text" name="a_def_val" /></td>
		</tr>
		<tr class="tr_btn center">
			<td colspan="2"><input type="submit" value="确定" /><input type="reset" 
value="重置" /></td>
		</tr>
	</table>
	</form>
</div>

</body>
</html></div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
	</body>
</html>