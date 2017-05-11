<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>图书分类</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/2016/TPpro/mbook/Public/JQM/jquery-1.11.1.min.js"></script>
<script src="/2016/TPpro/mbook/Public/JQM/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
<div data-role="page">
  <div data-role="header"> <a href="index.html" data-role="button" data-icon="home">首页</a>
    <h1>图书分类</h1>
  </div>
  <div data-role="content">
    <div data-role="collapsible-set">
      <?php if(is_array($b)): $i = 0; $__LIST__ = $b;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bdata): $mod = ($i % 2 );++$i;?><!--读取大类-->
        <div data-role="collapsible" data-collapsed="true">
          <h1><?php echo ($bdata['b_name']); ?></h1>
          <ul data-role="listview"  data-inset="false">
            <?php if(is_array($s)): foreach($s as $key=>$sdata): ?><!--读取小类-->
              <?php if($bdata['b_id'] == $sdata['b_id']): ?><!--条件判断-->
               <li><a data-ajax="false" href="../book/booklist?sid=<?php echo ($sdata['s_id']); ?>" ><span><?php echo ($sdata['s_name']); ?></span></a></li><?php endif; endforeach; endif; ?>
          </ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div>
  <div data-role="footer">
    <h1>机电书店</h1>
  </div>
</div>
</body>
</html>