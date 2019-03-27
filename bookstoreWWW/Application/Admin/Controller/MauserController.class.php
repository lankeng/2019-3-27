<?php
namespace Admin\Controller;
//商品控制器
class MauserController extends CommonController {
  //商品列表
	public function mauser() {
		$m = M('user');      
		$where = "id>=0";
		$count = $m->where($where)->count();
		$p = getpage($count,8);
		$list = $m->field(true)->where($where)->order('id')->limit($p->firstRow, $p->listRows)->select();
		
		foreach ($list as $key => $value) {
			$a = $list[$key]['gender'];
			if($a == 1){
				$list[$key]['gender'] = '男';
			}elseif ($a == 0) {
				$list[$key]['gender'] = '女';
			}
		}
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display('mauser');
    }

    public function deluser(){
    	if (IS_POST) {
    		$user = D('user');
    		$whereid['id'] = I('post.deluserid');
    		$deluser = $user->where($whereid)->delete();
    		if ($deluser) {
    			$this->success('删除用户成功！',U('Admin/Mauser/mauser'));
    		}else{
    			$this->error('删除用户失败！',U('Admin/Mauser/mauser'));
    		}
    	}
    }

   }
