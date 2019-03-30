<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="/zhaopin/Public/Home/config/bootstrap.min.css" rel="stylesheet"><link href="/zhaopin/Public/Home/config/site.css" rel="stylesheet"><link href="/zhaopin/Public/Home/config/base.css" rel="stylesheet">
</script><script src="/zhaopin/Public/Home/config/jquery-1.8.3.min.js"></script>
<title>
226safe - 人才招聘
</title><style>html{_background-image:url(about:blank);_background-attachment:fixed}</style></head>
<body>
<div class="aspNetHidden">
</div>
<div class="aspNetHidden">
</div>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
<span class="sr-only">Toggle navigation</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
</div>
<div class="collapse navbar-collapse">
<ul class="nav navbar-nav">
<li><a href="<?php echo U('Index/index');?>">首页</a></li>
<li><a href="http://www.226safe.com">226官网</a></li>
<li><a href="http://www.webug.org">WeBug</a></li>
<li><a href="http://www.we-report.cn/">WeReport</a></li>
</ul>
</div>

</div>
</div>
<link type="text/css" rel="stylesheet" href="/zhaopin/Public/Home/config/simplePagination.css">
<script type="text/javascript" src="/zhaopin/Public/Home/config/jquery.simplePagination.js"></script>
<link href="/zhaopin/Public/Home/config/jobs.css" rel="stylesheet">
<style type="text/css">
    .navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus {
        color: #000;
    }

    .row {
        margin-left: 0;
    }

body {
 margin:0;
 padding:0;
 font-size:14px;
 font-family:"Hiragino Sans GB","Microsoft Yahei",SimSun,Arial,"Helvetica Neue",Helvetica;
 color:#333;
 word-wrap:break-word;
 -webkit-font-smoothing:antialiased;
 -moz-osx-font-smoothing:grayscale;
}
em,i {
 font-style:normal;
}
ul,ol {
 margin:0;
 padding:0;
 list-style:none
}

.job_list_226 .con_list_item{position:relative;color:#555;border:1px solid #ededed;margin-top:18px;margin-bottom: 20px;}

.job_list_226 .list_item_top{width:928px;height:68px;padding:14px 15px 0}
.job_list_226 .list_item_top .position{float:left;width:528px;margin-right:20px}

.job_list_226 .list_item_top .position .p_top h3{float:left;margin:0;font-size:16px;color:#00b38a;white-space:nowrap;word-wrap:normal}
.job_list_226 .list_item_top .company{float:left;width:310px;margin-right:15px}
.job_list_226 .list_item_top .company .company_name a{display:inline-block;white-space:nowrap;word-wrap:normal;color:#00b38a;font-size:16px;vertical-align:middle;text-decoration: none;margin-bottom: 10px;}
.job_list_226 .list_item_bot{height:40px;padding:0 15px;background-color:#fafafa}
.job_list_226 .list_item_bot .li_b_l span{display:inline-block;padding:0 5px;font-size:12px;line-height:20px;color:#555;border:1px solid #dcdcdc;border-radius:3px;text-overflow:ellipsis;white-space:nowrap;word-wrap:normal;margin-left:20px;background-color: #ebf1f4;}
.job_list_226 .list_item_bot .li_b_l{float:left;height:40px;margin-right:20px;line-height:40px;}

</style>
<link href="/zhaopin/Public/Home/config/font-awesome.min.css" rel="stylesheet">
<div class="container">
<div class="center">
<div class="row" style="margin-top: 30px">
<div class="col-md-9 col-sm-8 clearfix">
<nav class="navbar navbar-inverse" role="navigation" style="border:1px solid #ededed;height: 20px; background-color: #fff;">
<div class="container">
<div class="navbar-header">
<span class="navbar-brand">职位列表</span>
</div>
</div>
</nav>


<div id="job_list_226" class="job_list_226">

<ul class="item_con_list">
<?php if(is_array($job_list)): foreach($job_list as $key=>$vo): ?><li class="con_list_item">
        <div class="list_item_top">
            <div class="position">
                <div class="p_top">
                    <a href="<?php echo U('Index/details',array('id'=>$vo[id]));?>">
                        <h3><?php echo ($vo["job_name"]); ?> - [<?php echo ($vo["job_edu"]); ?>]</h3>
                    </a>
                </div>
            </div>
            <div class="company">
                <div class="company_name">
                    <a><?php echo ($vo["company_name"]); ?></a>
                </div>
                <div class="industry" style="color: #0070c0;font-weight: bold;">
                    “<?php echo ($vo["job_welf"]); ?>”
                </div>
            </div>
        </div>
        <div class="list_item_bot">
            <div class="li_b_l">
                <span>招聘状态：<font color="#6593c3"><?php echo ($vo["job_status"]); ?></font></span>
                <span>薪资范围：<font color="#fd5f39"><?php echo ($vo["price"]); ?></font></span>
                <span>工作地址：<?php echo ($vo["city"]); ?></span> 
                <span>工作状态：<?php echo ($vo["work_status"]); ?></span>
                <span>发布时间：<?php echo ($vo["add_time"]); ?></span>
            </div>
        </div>
    </li><?php endforeach; endif; ?>
</ul>


</div>



<div class="clearfix">
<nav aria-label="Page navigation" class="226_page">
<ul class="pagination">
<?php echo ($page); ?>
</ul>
</nav>
</div>

</div>
<script>
$('.226_page ul div a').unwrap('div').wrap('<li></li>');
$('.226_page ul span').wrap('<li class="active"></li>');
</script>
<aside class="col-md-3 col-sm-4">
<section class="panel panel-index" style="border:1px solid #ededed;">
    <div class="panel-body">
        <ul class="list-unstyled whitehat-right-banner">
        <li class="active"><a href="http://wpa.qq.com/msgrd?v=3&uin=123456&site=qq&menu=yes">发布招聘</a></li>
        </ul>
    </div>
</section>
    <section class="panel" style="border:1px solid #ededed;">
        <div class="panel-heading">
            <h3 class="panel-title">热门招聘</h3>
        </div>
        <div class="panel-body">
            <ul class="list-unstyled">
            <?php if(is_array($top)): foreach($top as $key=>$vo): ?><li>
                    <dl>
                        <dd class="avatar"><a href="<?php echo U('Index/details',array('id'=>$vo[id]));?>">
                            <img src="/zhaopin/Public/Home/config/images/default.png"></a></dd>
                        <dt style="text-overflow:ellipsis;overflow:hidden;"><a href="<?php echo U('Index/details',array('id'=>$vo[id]));?>" title="<?php echo ($vo["job_name"]); ?>"><?php echo ($vo["job_name"]); ?></a></dt>
                        <dd class="description"><?php echo ($vo["company_name"]); ?></dd>
                    </dl>
                </li><?php endforeach; endif; ?>
            </ul>
        </div>
    </section>

</aside>
</div>
</div>

</div>



<div class="col-md-5 col-md-offset-4">
<div class="center1">
© 2018 <em>226safe team</em> All Rights Reserved
<br>
</div>
</div>

<script src="/zhaopin/Public/Home/job.js"></script>
<script src="/zhaopin/Public/Home/base.js"></script>
<script src="/zhaopin/Public/Home/jquery.js"></script>
<script type="text/javascript" src="/zhaopin/Public/Home/bootstrap.js"></script>
</form>


</body></html>