<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>书店首页</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/2016/TPpro/mbook/Public/JQM/jquery-1.11.1.min.js"></script>
<script src="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.js"></script>

<style>
body {
	margin: 0 auto;
	text-align:center;
	padding:0;
}
div, ul, li, dl, dt, dd, h1, h2, h3, h4, p {
	margin:0;
	padding:0;
	list-style:none;
}
a {
	text-decoration:none;
}

.ui-bar-f
{
background-color:#FF6;
border:#FF0 1px solid;
}
.ui-bar-f .ui-btn
{
background-color:#FC0;
}
.ui-bar-f .ui-btn:hover
{
background-color:#FC9;
}
.ui-body-f
{
background-color:#FFC;
}
.ui-body-f .ui-btn
{
	background-color:#FC0;
}
.ui-body-f .ui-btn:hover
{
	background-color:#FC0;
}
</style>
</head>

<body>
<div data-role="page">
  <div data-role="header" data-theme="f">
    <h1>欢迎访问我的书店</h1>
    <a href="/2016/TPpro/mbook/index.php<?php echo ($url); ?>" data-role="button" data-icon="info"><?php echo ($user); ?></a>
  </div>
  <div data-role="content" data-theme="f">
    <div data-role="collapsible" data-collapsed="false">
      <h1 >今日特价</h1>
      <div>
         <a href='../book/book?book_id=<?php echo ($book["book_id"]); ?>' data-ajax="false"> <img src="/2016/TPpro/mbook/Public/images/<?php echo ($book['book_img']); ?>" /> <br/>
        <?php echo ($book['book_name']); ?><br/>
        <span>￥<?php echo ($book['book_newprice']); ?></span> </a>
      </div>
    </div>
    <div data-role="collapsible" data-collapsed="false">
      <h1>快捷工具</h1>
      <div class="ui-grid-b">
        <div class="ui-block-a"> <a href="/2016/TPpro/mbook/index.php/Home/index/type" data-ajax="false"> <img  src="/2016/TPpro/mbook/Public/images/neTool01.jpg" alt="spfl" /><br/>
          <span>商品分类</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-b"> <a href="#"> <img  src="/2016/TPpro/mbook/Public/images/neTool02.jpg" alt="lxwm" /><br/>
          <span>联系我们</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-c"> <a href="../user/reg" data-ajax="false"> <img  src="/2016/TPpro/mbook/Public/images/neTool03.jpg" alt="lxwm" /><br/>
          <span>用户注册</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-a"> <a href="#"> <img  src="/2016/TPpro/mbook/Public/images/neTool04.jpg" alt="lxwm" /><br/>
          <span>书店公告</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-b"> <a href="#"> <img  src="/2016/TPpro/mbook/Public/images/neTool05.jpg" alt="lxwm" /><br/>
          <span>帮助中心</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-c"> <a href="#"> <img  src="/2016/TPpro/mbook/Public/images/neTool06.jpg" alt="lxwm" /><br/>
          <span>意见反馈</span><br/>
          <br/>
          </a> </div>
      </div>
    </div>
  </div>
  <div data-role="footer" data-theme="f">
    <h1>机电书店</h1>
  </div>
</div>
</body>
</html>