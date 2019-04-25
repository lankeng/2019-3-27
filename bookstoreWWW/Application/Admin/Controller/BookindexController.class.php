<?php
namespace Admin\Controller;
//商品控制器
class BookindexController extends CommonController {
  //商品列表
  public function bookindex() {
    // $m = M('sort');

    if (IS_POST) {
      $findbookname['title'] = array('like','%'.I('post.find').'%');
      $book = M('book');
      // $count = $book->where($findbookname)->count();
      // $p = getpage($count,8);
      $list = $book->where($findbookname)->order('claid')->select();
      $sort = M('sort');
      foreach ($list as $key => $value) {
      // var_dump($list[$key]['claid']);
        $a['claid'] = $list[$key]['claid'];
        $sortcla = $sort->where($a)->select();
        $list[$key]['claname'] = $sortcla[0]['cate_name'];
        // var_dump($sortcla[0]['cate_name']);
        $this->assign('selectbook', $list); // 赋值数据集
      }
    }else{
      $book = M('book');
      $where = "bookid>=0";
      $count = $book->where($where)->count();
      $p = getpage($count,8);
      $list = $book->field(true)->where($where)->order('claid')->limit($p->firstRow, $p->listRows)->select();
      $sort = M('sort');
      foreach ($list as $key => $value) {
      // var_dump($list[$key]['claid']);
        $a['claid'] = $list[$key]['claid'];
        $sortcla = $sort->where($a)->select();
        $list[$key]['claname'] = $sortcla[0]['cate_name'];
        // var_dump($sortcla[0]['cate_name']);
        $this->assign('selectbook', $list); // 赋值数据集
        $this->assign('page', $p->show()); // 赋值分页输出  
      }
    }
    // var_dump($list);die;
        // $this->assign('selectbook', $list); // 赋值数据集
        // $this->assign('page', $p->show()); // 赋值分页输出  

        //添加输出分类   
        $sortcla = $sort->where()->select();
        $this->assign('select', $sortcla); // 赋值数据集
        $this->display('bookindex');
      }

      public function addbookindex() {
        if (IS_POST) {
          $sort = D('sort');
          $book = D('book');
          $infoall = I('post.');
          $where['cate_name'] = I('post.cate_name');
          $sortid = $sort->where($where)->select();
          $infoall['claid'] = $sortid[0]['claid'];
          $bookclaid['claid'] = $infoall['claid'];
          $bookidnum = $book->where($bookclaid)->count();
          if ($bookidnum) {
            $infoall['id'] = $bookidnum;
        # code...
          }else{
            $infoall['id'] = 0;
          }

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

             if($_FILES['Imgone']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['Imgone']);
                if(!$info){
                  $this->error($upload->getError());
                }else{
                 $infoall['Imgone']=$info['savepath'].$info['savename'];
               }
             }
             if($_FILES['Imgtwo']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['Imgtwo']);
                if(!$info){
                  $this->error($upload->getError());
                }else{
                 $infoall['Imgtwo']=$info['savepath'].$info['savename'];
               }
             }

             $addbook = $book->where()->add($infoall);
             if ($addbook) {
              $this->success('添加书籍成功！',U('Admin/Bookindex/bookindex'));
            }else{
              $this->error('添加书籍失败！',U('Admin/Bookindex/bookindex'));
            }
          }
        }


        public function upbookindex(){
          if (IS_POST) {
            $sort = D('sort');
            $book = D('book');
            $infoall = I('post.');
            $wbookid['bookid'] = I("post.bookid");
            $selbookid = $book->where($wbookid)->select();
            $where['cate_name'] = I('post.cate_name');
            $sortid = $sort->where($where)->select();
            $udsortid['claid'] = $sortid[0]['claid'];
            if ($sortid[0]['claid'] != $selbookid[0]['claid']) {
              $bookidnum = $book->where($udsortid)->count();
              if ($bookidnum) {
                $infoall['id'] = $bookidnum;
              }else{
                $infoall['id'] = 0;
              }
            }
            $infoall['claid'] = $sortid[0]['claid'];
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

             if($_FILES['Imgone']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['Imgone']);
                if(!$info){
                  $this->error($upload->getError());
                }else{
                 $infoall['Imgone']=$info['savepath'].$info['savename'];
               }
             }
             if($_FILES['Imgtwo']['tmp_name']!=''){
                $upload = new \Think\Upload();// 实例化上传类
                $upload->maxSize   =     3145728 ;// 设置附件上传大小
                $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
                $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
                $upload->rootPath  =      './'; // 设置附件上传目录
                $info   =   $upload->uploadOne($_FILES['Imgtwo']);
                if(!$info){
                  $this->error($upload->getError());
                }else{
                 $infoall['Imgtwo']=$info['savepath'].$info['savename'];
               }
             }
             $upbook = $book->where($wbookid)->save($infoall);
             if ($upbook) {
              $this->success('更改书籍成功！',U('Admin/Bookindex/bookindex'));
            }else{
              $this->error('更改书籍失败！',U('Admin/Bookindex/bookindex'));
            }

          }
        }

        public function delbookindex(){
          if (IS_POST) {
            $book = D('book');
            $wherebookid['bookid'] = I('post.delbookid');
            $delsort = $book->where($wherebookid)->delete();
            if ($delsort) {
              $this->success('删除书籍成功！',U('Admin/Bookindex/bookindex'));
            }else{
              $this->error('删除书籍失败！',U('Admin/Bookindex/bookindex'));
            }
          }
        }
      }
