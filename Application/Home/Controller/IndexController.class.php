<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
		$Model=M('Book');
		$data= $Model->field('book_id, book_name, book_newPrice ,book_img')->where('book_isSepprice=1')->find();
		$this->assign('book',$data);	
    if(session('user')!=null){
    	$arr['user']=session('user');
    	$arr['url']="/Home/user/Info";
    	$this->assign($arr);
    	$this->display();
    }else{
    	$arr['user']="登陆";
    	$arr['url']="/Home/user/showLogin";
    	$this->assign($arr);
    	$this->display();
    }
    }
	
	public function type(){
		$Model=M('Bigtype');
		$bdata= $Model->field('b_id, b_name')->select();
		$this->assign('b',$bdata );
		$data = $Model->join('tb_smalltype on tb_smalltype.b_id = tb_bigtype.b_id')->select();
		$this->assign('s',$data );
    $this->display();
	}
}