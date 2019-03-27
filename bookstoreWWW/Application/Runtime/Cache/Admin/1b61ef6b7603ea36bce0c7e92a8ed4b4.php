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
<div class="title">商品分类修改</div>
<div class="data-edit clear">
	<form method="post">
	<input type="hidden" value="<?php echo ($cate["cid"]); ?>" name="cid" />
	<table>
	<tr><td>分类名</td>
<!--	<td>父级分类</td>-->
	</tr>
	<tr><td><input type="text" value="<?php echo ($cate["cname"]); ?>" name="cname" /></td>
<!--		<td><select name="pid">-->
<!--			<option value="0">顶级分类</option>-->
<!--			<?php if(is_array($category)): foreach($category as $key=>$v): if(($v["cid"]) != $cate["cid"]): ?>-->
<!--				<option value="<?php echo ($v["cid"]); ?>" <?php if(($v["cid"]) == $cate["pid"]): ?>selected<?php endif; ?> ><?php echo str_repeat('--',$v['deep']).$v['cname'];?></option>-->
<!--<?php endif; endforeach; endif; ?>-->
<!--		</select></td>-->
	</tr>
	<tr class="tr_btn center">
		<td colspan="2"><input type="submit" value="确定修改" /><input type="reset" value="重置" /></td>
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