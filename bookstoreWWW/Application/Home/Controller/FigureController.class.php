<?php
namespace Home\Controller;
use Think\Controller;
class FigureController extends Controller {
	
	public function figure() {
		$figure = M('figure');
		$figureb = $figure->where()->select();
		$figureb[0]['figureone']='http://localhost/bookstore/'.$figureb[0]['figureone'];
		$figureb[0]['figuretwo']='http://localhost/bookstore/'.$figureb[0]['figuretwo'];
		$figureb[0]['figurethree']='http://localhost/bookstore/'.$figureb[0]['figurethree'];
		exit(json_encode($figureb));die;
	}
}