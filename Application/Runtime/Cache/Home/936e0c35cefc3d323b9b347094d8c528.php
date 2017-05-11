<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>详细信息</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/2016/TPpro/mbook/Public/JQM/jquery-1.11.1.min.js"></script>
<script src="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
<div data-role="page" id="page1">
  <div data-role="header"> 
  
    <h3 id="reg"> 详细信息 </h3>
  </div>
  <div data-role="content">
    <form  method="post" action="/2016/TPpro/mbook/index.php/Home/User/gg"  data-ajax="false" enctype="multipart/form-data"> 
      
      <div data-role="fieldcontain">
        <label for="email"> 头像</label>
        <input name="photo" id="photo"  type="file" >
      </div>
      
      <div data-role="fieldcontain">
        <label for="trueName"> 真实姓名： </label>
        <input type="text" name="trueName" id="female" >
      </div>
      
      
      <div data-role="fieldcontain">
        <label for="email"> 邮箱: </label>
        <input type="email" name="email" id="female" >
      </div>

        <div data-role="fieldcontain">
        <label for="repass"> qq： </label>
        <input type="text" name="qq" id="female">
      </div>
      
      <div data-role="fieldcontain">
        <label for="repass"> 地址： </label>
        <input type="text" name="address" id="female" >
      </div>
      
      <div > 
        <input data-inline="true" type="submit" name="submit" value="确定"  />
        <a data-inline="true"  data-role="button"  href="Info" data-ajax="false""> 返回 </a> 
      </div>
    </form>
  </div>
</div>
</body>
</html>