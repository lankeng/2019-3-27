<?php
namespace Admin\Controller;
//后台控制器
class IndexController extends CommonController {
	public function bookclaindex() {
		$m = M('sort');      
		$where = "claid>=0";
		$count = $m->where($where)->count();
		$p = getpage($count,8);
		$list = $m->field(true)->where($where)->order('claid')->limit($p->firstRow, $p->listRows)->select();
        $this->assign('select', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出
        $this->display('index');
    }

    public function addbookcla() {
    	if(IS_POST){
    		$sort = D('sort');
    		$where['cate_name'] = I('post.claname');
    		$addcla = $sort->where($where)->select();
    		if ($addcla) {
    			$this->error('已存在该书类！',U('Admin/Index/bookclaindex'));
    		}else{
    			$add_addcla = $sort->where()->add($where);
    			if($add_addcla){
    				$this->success('添加书类成功！',U('Admin/Index/bookclaindex'));
    			}else{
    				$this->error('添加失败！',U('Admin/Index/bookclaindex'));
    			}
    		}
    	}
    }

    public function updatebookcla(){
    	if (IS_POST) {
    		$sort = D('sort');
    		$where['cate_name'] = I('post.upsortname');
    		$whereid['claid'] = I('post.upsortid');
    		$upsort = $sort->where($whereid)->save($where);
    		if ($upsort) {
    			$this->success('更改书类名成功！',U('Admin/Index/bookclaindex'));
    		}else{
    			$this->error('书类名相同，更改失败！',U('Admin/Index/bookclaindex'));
    		}
    	}
    }

    public function delbookcla(){
    	if (IS_POST) {
    		$sort = D('sort');
    		$whereclaid['claid'] = I('post.delsortcla');
    		$delsort = $sort->where($whereclaid)->delete();
    		if ($delsort) {
    			$this->success('删除书类成功！',U('Admin/Index/bookclaindex'));
    		}else{
    			$this->error('删除书类失败！',U('Admin/Index/bookclaindex'));
    		}
    	}
    }

  //   public function bookindex() {
		// // $m = M('sort');
		// $book = M('book');
		// $where = "bookid>=0";
		// $count = $book->where($where)->count();
		// $p = getpage($count,8);
		// $list = $book->field(true)->where($where)->order('bookid')->limit($p->firstRow, $p->listRows)->select();
  //       $this->assign('selectbook', $list); // 赋值数据集
  //       $this->assign('page', $p->show()); // 赋值分页输出
  //       $this->display('bookindex');
  //   }

  //   public function aradd(){
  //   	$article=D('article');
  //   	if(IS_POST){
  //   		$data['rem']=I('rem');
  //   		$data['title']=I('title');

  //   		$data['content']=I('content');
  //   		$data['descs']=I('descs');
  //   		$data['cateid']=I('cateid');
  //   		$data['author']=I('author');
  //   		$data['time']=time();
  //   		if($_FILES['pic']['tmp_name']!=''){
  //               $upload = new \Think\Upload();// 实例化上传类
  //               $upload->maxSize   =     3145728 ;// 设置附件上传大小
  //               $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
  //               $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
  //               $upload->rootPath  =      './'; // 设置附件上传目录
  //               $info   =   $upload->uploadOne($_FILES['pic']);
  //               if(!$info){
  //               	$this->error($upload->getError());
  //               }else{
  //               	$data['pic']=$info['savepath'].$info['savename'];
  //               }
  //           }
  //           if($article->create($data)){
  //           	if($article->add()){
  //           		$this->success('添加文章成功！',U('arlist'));
  //           	}else{
  //           		$this->error('添加文章失败！');
  //           	}
  //           }else{
  //           	$this->error($article->getError());
  //           }

  //           return;
  //       }
  //       $cateres=D('cate')->select();
  //       $this->assign('cateres',$cateres);
		// //无限级分类
  //       $cate=D('cate');
  //       $cates=$cate->catetree();
  //       $this->assign('cates',$cates);
  //       $this->display();
  //   }
}
