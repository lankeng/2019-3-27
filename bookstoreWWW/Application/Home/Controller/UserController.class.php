<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {

	//获取用户信息
	public function index() {
		$info = I('post.');
		$openid = I('openid');
		$user = M('user');
		$where['openid'] = $openid ;
		$openid = $user->where($where)->select();

		if($openid) {
			$save_data = $user->where($where)->save($info);
			exit('had openid to save');
		}else{
			$add_data = $user->where()->add($info);
			exit('success to add'); 
		}
	}
	

}