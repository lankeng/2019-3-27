<?php
namespace Home\Controller;
use Think\Controller;
class AddressController extends Controller {

	//获取用户信息	
	public function maaddress() {
		$info = I('post.');
		$openid = I('openid');
		$addid = I('addid');
		$deladdid = I('deladdid');
		$address = M('address');
		$where['openid'] = $openid ;
		$whereup['addid'] = $addid ;
		$wheredel['addid'] = $deladdid ;
		$addresstofwd = $address->where($where)->select();
		$updateaddress = $address->where($whereup)->select();
		$deladdress = $address->where($wheredel)->delete();


		if($addid) {
			$add_address = $address->where($whereup)->save($info);
			exit(json_encode(array('msg'=>'had openid to save','showaddress'=>$addresstofwd,'updateads'=>$updateaddress)));
		}else{
			$add_address = $address->where()->add($info);
			exit(json_encode(array('msg'=>'success to add','showaddress'=>$addresstofwd,'updateads'=>$updateaddress)));
		}
	}
}