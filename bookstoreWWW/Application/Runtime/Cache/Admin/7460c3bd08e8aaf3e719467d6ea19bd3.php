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
<div class="title" style="color:red;">商品列表</div>
<div class="title-btn " style="float:left;"><a href="/sp_shop/Admin/Goods/add/cid/<?php echo ($cid); ?>" style="background-color:red;">添加商品</a></div>
<div class="data-list clear">请选择商品分类：
	<select name="cid">
		<option value="0">全部</option>
		<?php if(is_array($category)): foreach($category as $key=>$v): ?><option value="<?php echo ($v["cid"]); ?>" <?php if(($v["cid"]) == $cid): ?>selected<?php endif; ?> ><?php echo str_repeat('--',$v['deep']).$v['cname'];?></option><?php endforeach; endif; ?>
	</select>
	<table border="1">
        <form action="/sp_shop/Admin/Goods/delSelect/cid/<?php echo ($cid); ?>" method="post">
            <tr><th width="120">商品编号</th><th>商品名</th><th width="80"><a  style="color:#666666;"
                        href="/sp_shop/Admin/Goods/index/cid/<?php echo ($cid); ?>/status/<?php echo empty($get_order['status'])?'desc':$get_order['status']; ?>">上架</a></th><th width="80"><a  style="color:#666666;" href="/sp_shop/Admin/Goods/index/cid/<?php echo ($cid); ?>/is_hot/<?php echo empty($get_order['is_hot'])?'desc':$get_order['is_hot']; ?>">推荐</a></th><th width="120">操作</th></tr>
            <?php if(is_array($goods["list"])): foreach($goods["list"] as $key=>$v): ?><tr>
                    <td><input type="checkbox" name="identifier[]" value="<?php echo ($v["identifier"]); ?>"/><?php echo ($v["identifier"]); ?></td>
                    <td><?php echo ($v["gname"]); ?></td>
                    <td class="center"><a href="/sp_shop/Admin/Goods/change/status/<?php echo ($v["status"]); ?>/gid/<?php echo ($v["gid"]); ?>/cid/<?php echo ($cid); ?>"><?php if(($v["status"]) == "yes"): ?><a  style="color:#666666;">是</a><?php else: ?><a  style="color:#666666;">否</a><?php endif; ?></a></td>
                    <td class="center"><a href="/sp_shop/Admin/Goods/change/is_hot/<?php echo ($v["is_hot"]); ?>/gid/<?php echo ($v["gid"]); ?>/cid/<?php echo ($cid); ?>"><?php if(($v["is_hot"]) == "yes"): ?><a  style="color:#666666;">是</a><?php else: ?><a  style="color:#666666;">否</a><?php endif; ?></a></td>
                    <td class="center"><a href="/sp_shop/Admin/Goods/revise/gid/<?php echo ($v["gid"]); ?>/cid/<?php echo ($cid); ?>" style="color:red;">修改</a> <a href="/sp_shop/Admin/Goods/del/gid/<?php echo ($v["gid"]); ?>/cid/<?php echo ($cid); ?>" style="color:red;">删除</a></td>
                </tr><?php endforeach; endif; ?>
            <tr>
                <td colspan="2"><a href="#" onclick="checkedAll()" style="color:red;">全选</a> <a href="#" onclick="notCheckedAll()" style="color:red;">全不选</a> <a href="#" onclick="checkedOthers()" style="color:red;">反选</a></td>
                <td colspan="3"><input style="height:30px;background-color:red;color:white;text-algin:center;line-height:20px;" type="submit" value="批量删除" /></td>
            </tr>
        </form>
    </table>

	<div class="pagelist"><?php echo ($goods["page"]); ?></div>
</div>
<script>
	$("select").change(function(){
		window.location.href = "/sp_shop/Admin/Goods/index/cid/" + $(this).val();
	});
	$("tr:odd").addClass("odd");
	 //全选
    function checkedAll() {
        $(":checkbox").each(function () {
            $(this).prop("checked", true);
            $(this).attr("checked", true);
        });
    }
    //全不选
    function notCheckedAll() {
        $(":checkbox").each(function () {
            $(this).prop("checked", false);
            $(this).attr("checked", false);
        });
    }
	//反选
    function checkedOthers() {
        $(":checkbox").each(function () {
            if (this.checked) {
                $(this).prop("checked", false);
                $(this).attr("checked", false);
            } else {
                $(this).prop("checked", true);
                $(this).attr("checked", true);
            }
        });
    }
    //单个选择时的状态设置
    $(".check").click(function () {
        $(this).each(function (i, v) {
            if (!v.checked) {
                $(this).prop("checked", false);
                $(this).attr("checked", false);
            } else {
                $(this).prop("checked", true);
                $(this).attr("checked", true);
            }
        });
    });
	
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