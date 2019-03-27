<?php
namespace Admin\Controller;
use Think\Controller;

class RepwdController extends Controller {
	public function repwd(){
		$this->display();
	}

	public function repassword(){
		if (IS_POST){
			$admin = D('administrator');
			$adminid['adminid'] = I('post.adminid');
			$adminb = $admin->where($adminid)->select();
			$oldpwdb = $adminb[0]['password'];
			$foldword = I('post.oldpwd');
			if ($oldpwdb == $foldword) {
				if (I('post.newpwd') != '') {
					$newpwd['password'] = I('post.newpwd');
				}
				$newpwd['name'] = I('post.username');
				$newadmin = $admin->where($adminid)->save($newpwd);
				if($newadmin){
					$this->success('修改用户名密码成功！',U('Login/login'));
				}else{
					$this->error('修改用户名密码失败！',U('Admin/Repwd/repwd'));
				}
			}else{
				$this->error('原密码输入不正确', U('Admin/Repwd/repwd'));
			}
		}
	}
}
