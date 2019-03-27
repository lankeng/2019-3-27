<?php
namespace Admin\Controller;
//商品控制器
class DetailpicController extends CommonController {
	public function detailpic() {
		$m = M('image');      
		$where = "imageid>=0";
		$count = $m->where($where)->count();
		$p = getpage($count,8);
		$list = $m->field(true)->where($where)->order('claid')->limit($p->firstRow, $p->listRows)->select();

		$sort = M('sort');
		$bookb = M('book');
		foreach ($list as $key => $value) {
			$a['claid'] = $list[$key]['claid'];
			$b['id'] = $list[$key]['id'];
            $b['claid'] = $list[$key]['claid'];
			$sortcla = $sort->where($a)->select();
			$book = $bookb->where($b)->select();

			$list[$key]['claname'] = $sortcla[0]['cate_name'];
			$list[$key]['bookname'] = $book[0]['title'];
		}
		$sortcla = $sort->where()->select();
         $this->assign('selectcla', $sortcla); // 赋值数据集
        // foreach ($sortcla as $key => $value) {
        // 	$c['claid'] = $sortcla[$key]['claid'];
        // 	$selbook = $bookb->where($c)->select();
        // 	foreach ($selbook as $keya => $value) {
        // 		 $sortcla[$key]['title'] = $selbook[$keya]['title'];
        // 		 $sortcla[$key]['id'] = $selbook[$keya]['id'];
        // 	}
        // }
        // // $this->assign('selbook', $selbook); // 赋值数据集
        // $this->assign('selectcla', $sortcla); // 赋值数据集

        // var_dump(json_encode($sortcla));die;
         $this->assign('select', $list); // 赋值数据集
         $this->assign('page', $p->show()); // 赋值分页输出
         $this->display('detailpic');
     }

     public function selbookt(){
     	$sort = M('sort');
     	$bookb = M('book');
     	$sortcla = $sort->where()->select();
     	foreach ($sortcla as $key => $value) {
     		$c['claid'] = $sortcla[$key]['claid'];
     		$selbook = $bookb->where($c)->select();
     		foreach ($selbook as $keya => $value) {
     			$sortcla[$key]['titleall'][$keya]['id'] = $selbook[$keya]['id'];
     			$sortcla[$key]['titleall'][$keya]['title'] = $selbook[$keya]['title'];
     		}
     	}
         // var_dump(json_encode($sortcla));die;
     	$this->assign('selectcla', $sortcla);
     	$claname['cate_name'] = I("post.claval");
     	$claid = $sort->where($claname)->select();
     	$bookclaid['claid'] = $claid[0]['claid'];
     	$booktitle = $bookb->where($bookclaid)->select();
     	$result  = $this->ajaxReturn(json_encode($booktitle));
     }

     public function addbookdetail(){
     	$infoall =	I('post.');
     	$cate_name['cate_name'] = I('post.dtbookcla');
     	$infoall['id'] = I('post.dtbooktitle');
     	$sort = D('sort');
     	$sortclaid = $sort->where($cate_name)->select();
     	$infoall['claid'] = $sortclaid[0]['claid'];
     	// var_dump(json_encode($infoall));die;
     	$image = D('image');
     	if($_FILES['image']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['image']);
                if(!$info){
                	$this->error($upload->getError());
                }else{
                	$infoall['image']=$info['savepath'].$info['savename'];
                }
            }
            $addbookimg = $image->where()->add($infoall);
            if ($addbookimg) {
            	$this->success('添加该书详情图成功！',U('Admin/Detailpic/detailpic'));
            }else{
            	$this->error('添加该书详情图失败！',U('Admin/Detailpic/detailpic'));
            }
        }

        public function upbookdetail(){
        	if (IS_POST) {
        		$cate_name['cate_name'] = I('post.upclaname');
        		$sort = D('sort');
        		$sortclaid = $sort->where($cate_name)->select();
        		$upinfo['claid'] = $sortclaid[0]['claid'];
        		$upinfo['id'] = I('post.upid');
        		if($_FILES['upimage']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['upimage']);
                if(!$info){
                	$this->error($upload->getError());
                }else{
                	$upinfo['image']=$info['savepath'].$info['savename'];
                }
            }
            $image = D('image');
            $imageid['imageid'] = I('post.upimageid');
            $upimage = $image->where($imageid)->save($upinfo);
            // var_dump(json_encode($upinfo));die;
            if ($upimage) {
            	$this->success('更改书籍详情图成功！',U('Admin/Detailpic/detailpic'));
            }else{
            	$this->error('更改书籍详情图失败！',U('Admin/Detailpic/detailpic'));
            }
        }
    }

    public function delimagedetail(){
          if (IS_POST) {
            $image = D('image');
            $imageid['imageid'] = I('post.delimageid');
            $delimage = $image->where($imageid)->delete();
            if ($delimage) {
              $this->success('删除书籍成功！',U('Admin/Detailpic/detailpic'));
            }else{
              $this->error('删除书籍失败！',U('Admin/Detailpic/detailpic'));
            }
          }
        }
}
