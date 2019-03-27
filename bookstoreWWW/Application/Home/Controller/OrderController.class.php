<?php
namespace Home\Controller;
use Think\Controller;
class OrderController extends Controller {

	//获取用户信息
	public function allorder() {
		$info = I('post.');
		$order = M('order');

		$add_data = $order->where()->add($info);

		exit('success to add order'); 	
	}

	public function showorder(){
		$openid['openid'] = I('post.openid');
		$order = M('order');
		$showdata = $order->where($openid)->select();
		foreach ($showdata as $key => $value) {
			$bookname = $showdata[$key]['bookname'];
			$booknum = $showdata[$key]['booknum'];
			$showdata[$key]['bookname'] = explode(',', $bookname);
			$showdata[$key]['booknum'] = explode(',', $booknum);
		}
		exit(json_encode($showdata));die;
	}

	public function delorder(){
		$orderid['orderid'] = I('post.orderid');
		$order = M('order');
		$del = $order->where($orderid)->delete();
		if ($del) {
			exit('success to del'); 
		}else{
			exit('fail to del'); 
		}
	}
}