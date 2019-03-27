<?php
namespace Admin\Controller;
//商品控制器
class OrderController extends CommonController {
  //商品列表
  public function order() {
      $m = M('order');      
      $where = "orderid>=0";
      $count = $m->where($where)->count();
      $p = getpage($count,8);
      $list = $m->field(true)->where($where)->order('orderid')->limit($p->firstRow, $p->listRows)->select();

        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display('order');
    }

    public function delorder(){
    	if (IS_POST) {
    		$order = D('order');
    		$whereid['orderid'] = I('post.delorderid');
    		$deluser = $order->where($whereid)->delete();
    		if ($deluser) {
    			$this->success('删除订单成功！',U('Admin/Order/order'));
    		}else{
    			$this->error('删除订单失败！',U('Admin/Order/order'));
    		}
    	}
    }

    public function uporder(){
        if (IS_POST) {
            $order = D('order');
            $info['state'] = I('post.state');
            $whereid['orderid'] = I('post.uporderid');
            $uporder = $order->where($whereid)->save($info);
            if ($uporder) {
                $this->success('更新订单状态成功！',U('Admin/Order/order'));
            }else{
                $this->error('更新订单状态失败！',U('Admin/Order/order'));
            }
        }
    }
}
