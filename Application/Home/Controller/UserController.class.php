<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	//登录页面
	  public function showLogin(){
	  	$this->display('login');
	  }
	  public function login(){
	  	//$this->show();
	  	$user=M("User");
    	$arr['username']=I('post.user_name');
	    $arr['password']=I('post.user_pwd');
	    $user->create();
      $data = $user->field('user_pwd')->where("user_name='$arr[username]'")->find();
      if(md5($arr['password']) == $data['user_pwd']){
      	//$time = time();
      	$ip   = $_SERVER['SERVER_ADDR'];
      	$user->user_ip=$ip;
      	$user->where("user_name='$arr[username]'")->setInc('user_loginTimes',1);
      	$user->where("user_name='$arr[username]'")->save();
      	session('user',$arr['username']);
      	$this->success('登陆成功','../Index/index.html');
      }else{
      	$this->error('登陆失败');
      }

	  }


//注册页面
	  public function reg(){
	   	$this->display();
	  }

    public function insert(){
		  $User = D("User"); // 实例化User对象
		  if (!$User->create()){
			 // 如果创建失败 表示验证没有通过 输出错误提示信息
			   echo '<h1>'.$User->getError().' 点击此处 <a href="javascript:history.back(-1);">返回</a></h1>';
			 //exit($User->getError());
		  }else{
			 // 验证通过 可以进行其他数据操作
			   $User->add();// 插入数据库
			   $this->success("<h1>注册成功</h1>","../Index/index.html");
		  }
    }

//找回密码

    public function retrievePwd(){
    	$email=I('post.user_email');
    	$question=I('post.user_question');
	    $answer=I('post.user_answer');
	    $pwd = I('post.user_pwd');
	    $repwd=I('post.repass');
	    $user=M('user');
	    $result=$user->field('user_question,user_answer')->where("user_email='$email'")->find();
	    if($question==$result['user_question'] && $answer==$result['user_answer']){
	    	if($pwd==$repwd){
	    		$user->user_pwd=md5($pwd);
	    		$user->where("user_email='$email'")->save();
	    		$this->success('修改密码成功',"showLogin");
	    	}else{
	    		$this->error('两次的密码不一样');
	    	}
	    }else{
	      $this->error('问题或者答案错误');
	    }
    }

    public function Info(){
    	$user = M("user");
      $info = $user->where("user_name='".session('user')."'")->find();
      //dump($info);
    	$this->assign($info);
    	$this->display('Info');
    }
    
    public function changeInfo(){
    	$this->display();
    }
    
    public function gg(){
    	$info['user_trueName'] = I('post.trueName');
    	$info['user_email']    = I('post.email');
    	$info['user_qq']       = I('post.qq');
    	$info['user_address']  = I('post.address');
    	$user = M('user');
    	$result=$user->where("user_name='".session('user')."'")->save($info);    	
    	$upload = new \Think\Upload();
		  $upload->maxSize=9000000;
		  $upload->exts = array('jpg','gif','png','jpeg');
		  $upload->saveExt='jpg';
		  $upload->replace=true;
		  $upload->saveName=SESSION('user');  //用户名字
		  $upload->rootName="__Public__/uploads/";
		  $upload->autoSub=false;
		  $info = $upload->upload();
    	if(is_int($result)){
    		if($info){
    			$arr['user_photo']=session('user');
    			$user->where("user_name='".session('user')."'")->save($arr);
    			$this->success('修改信息成功','info');
    		}
    		else $this->error("can't upload plase try again because of".$upload->getError());
    	}else{
    		$this->error("can't changeinfo");
    	}
    }
    

}