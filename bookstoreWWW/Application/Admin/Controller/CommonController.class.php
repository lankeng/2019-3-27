<?php
namespace Admin\Controller;
use Think\Controller;
//后台公共控制器
class CommonController extends Controller {
	//构造方法
	public function __construct(){
		parent::__construct();
		//登录检查
		// $this->checkUser();
	}
	//检查登录
	private function checkUser(){
		if(!session('?admin_name')){
			$this->error('请登录',U('Login/login'));
		}
	}
	/**
	 * 公共数据创建方法
	 * @param string $tablename 表名
	 * @param string $func 操作方法
	 * @param int $type 验证时机（1=添加 2=修改）
	 * @param string/array $where 查询条件
	 * @return mixed 操作结果
	 */
	protected function create($tablename,$func,$type=1,$where=array()){
		$Model = D($tablename);
		if(!$Model->create(I('post.'),$type)){
			$this->error($Model->getError());
		}
		if(empty($where)){
			return $Model->$func();
		}
		return $Model->where($where)->$func();
	}
}
