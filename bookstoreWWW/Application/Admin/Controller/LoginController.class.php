<?php
namespace Admin\Controller;
use Think\Controller;
//后台用户登录控制器
class LoginController extends Controller {
	//后台登录页
	public function login(){
		if (IS_POST){
			// //检查验证码
			// $rst = $this->checkVerify(I('post.verify'));
			// if($rst===false){
			// 	$this->error('验证码错误');
			// }
			//检查用户名密码
			// if(I('post.admin_name')==C('USER_CONFIG.admin_name') && I('post.admin_pwd')==C('USER_CONFIG.admin_pwd')){
			// 	session('admin_name',C('USER_CONFIG.admin_name'));
			// 	$this->success('登录成功，请稍等', U('Index/bookclaindex'));
			// }else{
			// 	$this->error('登录失败，用户名或密码错误');
			// }
			$user = M('administrator');
			$username['account'] = I('post.admin_name');
			$userdata = $user->where($username)->select();
			if ($userdata) {
				$password = $userdata[0]['password'];
				$username = $userdata[0]['name'];
				$adminid = $userdata[0]['adminid'];
				$fpassword = I('post.admin_pwd');
				if ($fpassword == $password) {
					session('username',$username);
					session('adminid',$adminid);
					$this->success('登录成功，请稍等', U('Index/bookclaindex'));
				}else{
					$this->error('登录失败，用户名或密码错误', U('Login/login'));
				}
			}else{
				$this->error('登录失败，用户名或密码错误', U('Login/login'));
			}
			return;
		}
		$this->display();
	}
	// //生成验证码
	// public function getVerify(){
	// 	$verify = new \Think\Verify();
	// 	return $verify->entry();
	// }
	// //检查验证码
	// private function checkVerify($code, $id='') {
	// 	$verify = new \Think\Verify();
	// 	return $verify->check($code,$id);
	// }
	//退出系统
	public function logout(){
		session('[destroy]');
		$this->display('Login/login');
	}
}
