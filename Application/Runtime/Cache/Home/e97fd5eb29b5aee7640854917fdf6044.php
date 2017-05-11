<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户注</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/2016/TPpro/mbook/Public/JQM/jquery-1.11.1.min.js"></script>
<script src="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
<div data-role="page" id="page1">
  <div data-role="header"> 
    <a href="../Index/index.html" data-ajax="false" data-role="button" data-icon="home">首页</a>
    <a href="../user/showLogin" data-ajax="false" data-role="button" data-icon="info">登陆</a>
    <h3 id="reg"> 用户注册 </h3>
  </div>
  <div data-role="content">
    <form name="RegForm" method="post" action="/2016/TPpro/mbook/index.php/Home/User/insert" data-ajax="false">
      <div data-role="fieldcontain">
        <label for="username"> 用户名 </label>
        <input name="user_name" id="username"  value="" type="text" required>
      </div>
      <div data-role="fieldcontain">
        <label for="password"> 密码 </label>
        <input name="user_pwd" id="password" placeholder="" value="" type="password" required>
      </div>
      <div data-role="fieldcontain">
        <label for="repass"> 确认密码 </label>
        <input name="repass" id="repass" placeholder="" value="" type="password" required>
      </div>
      
      <div data-role="fieldcontain">
      <fieldset data-role="controlgroup" data-type="horizontal"  >
        <legend>性别</legend>
        <label for="male">男</label>
        <input type="radio" name="user_sex" id="male" value="男">
        <label for="female">女</label>
        <input type="radio" name="user_sex" id="female" value="女">
      </fieldset>
      </div>
      <div data-role="fieldcontain">
        <label for="email"> 邮箱 </label>
        <input name="user_email" id="email"  value="" type="email">
      </div>
      
      
      <div data-role="fieldcontain">
        <label for="question"> 问题 </label>
        <input name="user_question" id="email"  value="" type="text">
      </div>
      
      <div data-role="fieldcontain">
        <label for="answer"> 答案 </label>
        <input name="user_answer" id="email"  value="" type="text">
      </div>
      
      <div >
        <input data-inline="true" type="submit" name="submit" value="提交"  />
        <a data-inline="true"  data-role="button"  href="#"> 取消 </a> 
      </div>
    </form>
  </div>
</div>
</body>
</html>