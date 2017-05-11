<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>详细信息</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/2016/TPpro/mbook/Public/JQM/jquery-1.11.1.min.js"></script>
<script src="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.js"></script>
<style>
	.img-circle{
	    width:50px;
	    height:50;
	    border-radius:100px;
     	background-color: #ccc;
	    background-repeat: no-repeat;
	}
</style>
</head>

<body>
<div data-role="page" id="page1">
  <div data-role="header"> 
  
    <h3 id="reg"> 详细信息 </h3>
  </div>
  <div data-role="content">
      <!--<div data-role="fieldcontain">
        <label for="username"> 用户名 </label>
        <input name="user_name" id="username"  value="" type="text" required>
      </div>
      
     
      <div data-role="fieldcontain">
      <fieldset data-role="controlgroup" data-type="horizontal"  >
        <legend>性别</legend>
        <label for="male">男</label>
        <input type="radio" name="user_sex" id="male" value="男">
        <label for="female">女</label>
        <input type="radio" name="user_sex" id="female" value="女">
      </fieldset>
      </div>-->
      
      <div data-role="fieldcontain">
        <label for="email"> 头像</label>
        <img class="img-circle"  alt="140x140" src="/2016/TPpro/mbook/Public/../uploads/<?php echo ($user_photo); ?>.jpg">
      </div>
      
      <div data-role="fieldcontain">
        <label for="username"> 昵称</label>
        <?php echo ($user_name); ?>
      </div>      
      
      <div data-role="fieldcontain">
        <label for="trueName"> 真实姓名： </label>
        <?php echo ($user_truename); ?>
      </div>
      
      <div data-role="fieldcontain">
        <label for="sex"> 性别： </label>
        <?php echo ($user_sex); ?>
      </div>
      
      <div data-role="fieldcontain">
        <label for="email"> 邮箱: </label>
        <?php echo ($user_email); ?>
      </div>
      
      
      <!--<div data-role="fieldcontain">
        <label for="email"> 问题 </label>
        <?php echo ($question); ?>
      </div>
      
      <div data-role="fieldcontain">
        <label for="email"> 答案 </label>
        <?php echo ($answer); ?>
      </div>-->
      

      
        <div data-role="fieldcontain">
        <label for="repass"> qq： </label>
        <?php echo ($user_qq); ?>
      </div>
      
      <div data-role="fieldcontain">
        <label for="repass"> 地址： </label>
        <?php echo ($user_address); ?>
      </div>
      
      <div > 
        <!--<input data-inline="true" type="submit" name="submit" value="确定"  />-->
        <a data-inline="true"  data-role="button"  href="changeInfo" data-ajax="false""> 更改信息 </a>
        <a data-inline="true"  data-role="button"  href="../index/index" data-ajax="false""> 返回 </a> 
      </div>
  </div>
</div>
</body>
</html>