<?php
namespace Home\Controller;
use Think\Controller;
class BookController extends Controller {
	public function booklist(){
		$Model=M('Book');
		$data= $Model->where('s_id='.$_GET["sid"])->select();

		//$count = $Model->where('s_id=2')->count();
		/*$Page = new\Think\Page($count,3);
		$show = $Page->show();
		$list=$Model->where('s_id=2')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);*/

		$this->assign('blist',$data);	
		//dump($data);	
		$this->display();
	}
   
	
	public function book(){
		$Model=M('Book');
		$data= $Model->where('book_id='.$_GET["book_id"])->find();
		$this->assign('book',$data);	
		//dump($data);	
		$this->display();
	}

	public function fenye(){
		$Model = M('Book');
		$count = $Model->where('sid=2')->count();
		$Page = new\Think\Page($count,3);
		$show = $Page->show();
		$list=$Model->where('sid=2')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('list',$list);
		$this->assign('page',$show);
		$this->display();
	}	

}