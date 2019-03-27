<?php
namespace Admin\Controller;
//商品控制器
class FigureController extends CommonController {
  //商品列表
	public function figure() {
        $figure = M('figure');
        $arrfigure = $figure->where()->select();
        $this->assign('select', $arrfigure);
		$this->display();
    }

    public function upfigure(){
        $infoall = I('post.');
        if($_FILES['figureone']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['figureone']);
                if(!$info){
                  $this->error($upload->getError());
                }else{
                 $infoall['figureone']=$info['savepath'].$info['savename'];
               }
        }
        if($_FILES['figuretwo']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['figuretwo']);
                if(!$info){
                  $this->error($upload->getError());
                }else{
                 $infoall['figuretwo']=$info['savepath'].$info['savename'];
               }
        }
        if($_FILES['figurethree']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['figurethree']);
                if(!$info){
                  $this->error($upload->getError());
                }else{
                 $infoall['figurethree']=$info['savepath'].$info['savename'];
               }
        }
        $figure = M("figure");
        $figureid['figureid'] = 1;
        $upfigure = $figure->where($figureid)->save($infoall);
         if ($upfigure) {
              $this->success('修改轮播图成功！',U('Admin/Figure/figure'));
            }else{
              $this->error('修改轮播图失败！',U('Admin/Figure/figure'));
            }
    }
}
