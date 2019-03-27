<?php
namespace Admin\Controller;
use Think\Controller;
class UsersController extends Controller{
	public function index(){
		//取出会员信息
		$data = D('users')->getList(
			'uid,user,phone,email',
			array(),'uid desc'
		);//page：分页，list：列表
		$this->assign($data);
		$this->display();
	}
}