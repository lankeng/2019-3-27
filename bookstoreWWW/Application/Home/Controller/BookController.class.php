<?php
namespace Home\Controller;
use Think\Controller;
class BookController extends Controller {

	//获取用户信息
	public function bookInfo() {
		//echo 'qwe';die;
		$sort = M('sort');
		$book = M('book');
		$image = M('image');


		$title = I('title');
		$where['title'] = array('like','%'.$title.'%') ;
		 //$sortInfo = $sortInfo->where($where)->select();

		$sortInfo = $sort->where()->order('claid')->select();
		$bookInfo = $book->where($where)->select();
		//exit(json_encode($bookInfo));die;
		$imageInfo = $image->where()->select();

		foreach ($sortInfo as $key => $value) {
			if($sortInfo[$key]['ishavechild'] == '1') {
				$sortInfo[$key]['ishaveChild'] = true;
			}elseif($sortInfo[$key]['ishavechild'] == '0') {
				$sortInfo[$key]['ishaveChild'] = false;
			}			 
		}
		foreach ($sortInfo as $key => $value) {
			foreach ($bookInfo as $k => $v) {
				if($sortInfo[$key]['claid'] == $bookInfo[$k]['claid']) {
					//$sortInfo[$key]['children'][$k] = $bookInfo[$k]['id']
					$k1 = $bookInfo[$k]['id'];
					$sortInfo[$key]['children'][$k1]['id'] = $bookInfo[$k]['id'];
					$sortInfo[$key]['children'][$k1]['claid'] = $bookInfo[$k]['claid'];
					$sortInfo[$key]['children'][$k1]['title'] = $bookInfo[$k]['title'];
					//$sortInfo[$key]['children']['titleTwo']=$bookInfo['titleTwo'];
					$sortInfo[$key]['children'][$k1]['value'] = $bookInfo[$k]['value'];
					$sortInfo[$key]['children'][$k1]['image'] = 'http://localhost/bookstore/'.$bookInfo[$k]['image'];
					$sortInfo[$key]['children'][$k1]['Imgone'] = 'http://localhost/bookstore/'.$bookInfo[$k]['imgone'];
					$sortInfo[$key]['children'][$k1]['Imgtwo'] = 'http://localhost/bookstore/'.$bookInfo[$k]['imgtwo'];
					if($bookInfo[$k]['selected'] == '1') {
						$sortInfo[$key]['children'][$k1]['selected'] = true;
					}elseif($bookInfo[$k]['selected'] == '0') {
						$sortInfo[$key]['children'][$k1]['selected'] = false;
					}
					
					$sortInfo[$key]['children'][$k1]['author'] = $bookInfo[$k]['author'];
					$sortInfo[$key]['children'][$k1]['publisher'] = $bookInfo[$k]['publisher'];
					$sortInfo[$key]['children'][$k1]['pubTime'] = $bookInfo[$k]['pubtime'];
					$sortInfo[$key]['children'][$k1]['currentprice'] = $bookInfo[$k]['currentprice'];
					$sortInfo[$key]['children'][$k1]['price'] = $bookInfo[$k]['price'];
					$sortInfo[$key]['children'][$k1]['discount'] = $bookInfo[$k]['discount'];
				}	
			}
		}
		foreach ($sortInfo as $kk => $vv) {
			foreach ($imageInfo as $k => $v) {
				foreach ($sortInfo[$kk]['children'] as $key => $value) {
					if($sortInfo[$kk]['children'][$key]['claid'] == $imageInfo[$k]['claid'] ) {
						if($sortInfo[$kk]['children'][$key]['id'] == $imageInfo[$k]['id']) {
							//$k2 = $imageInfo['id'];
							$sortInfo[$kk]['children'][$key]['img'][$k]['image'] = 'http://localhost/bookstore/'.$imageInfo[$k]['image'];
							$sortInfo[$kk]['children'][$key]['img'][$k]['mode'] = $imageInfo[$k]['mode'];
						}
				
					}
				}					
			}			
		}

		//search
		 //$search = I('post.');
		 //$title = I('title');
		 //exit(json_encode($title));die;

		 //$where['title'] = $title ;
		 //$sortInfo = $sortInfo->where($where)->select();


		exit(json_encode($sortInfo));
		// exit(json_encode($sortInfo));

	}
}