<?php
/**
 * 属性值转换数组
 * @param mixed &$data 属性数组
 * @param string $field 待分割字段名
 * @param bool $empty 是否包含文本框属性
 */
function valToArr(&$data,$field,$empty=false){
	foreach($data as $k=>$v){
		$data[$k][$field] = explode(',',$v[$field]);
		if($empty && count($data[$k][$field])==1){
			unset($data[$k]);
		}
	}
}
/**
 * 商品列表过滤项的URL生成
 * @param $type 生成的URL类型（aid*, price, order)
 * @parma $data 相应的数据当前的值（为空表示清除该参数）
 * @return string 生成好的携带正确参数的URL
 */
function mkFilterURL($type, $data='') {
	$params = I('get.');
	unset($params['p']);  //清除分页
	if ($data==''){  //$data为空时清除参数
		unset($params[$type]);
	} elseif ($type=='price') { //处理价格参数
		$price_arr = explode('-', $data);
		$params['min_p'] = $price_arr[0]==0?null:$price_arr[0];
		$params['max_p'] = $price_arr[1]==0?null:$price_arr[1];
	} elseif (substr($type, 0, 3)=='aid') {	//处理属性参数
		$params[$type] = $data;
	} else { //其他参数
		$params[$type] = $data;
	}
	return U('Index/find',$params);
}

function getpage($count, $pagesize = 10) {
    $p = new Think\Page($count, $pagesize);
    $p->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $p->setConfig('prev', '上一页');
    $p->setConfig('next', '下一页');
    $p->setConfig('last', '末页');
    $p->setConfig('first', '首页');
    $p->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%%HEADER%');
    $p->lastSuffix = false;//最后一页不显示为总页数
    return $p;
}
