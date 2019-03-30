<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link href="/zhaopin/Public/Home/config/bootstrap.css" rel="stylesheet"><link href="/zhaopin/Public/Home/config/site.css" rel="stylesheet"><link href="/zhaopin/Public/Home/config/base.css" rel="stylesheet">
<script src="/zhaopin/Public/Home/config/jquery-1.js"></script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="/zhaopin/Public/Home/config/jquery-1.js"></script>

<title>
<?php echo ($job_details["job_name"]); ?> - 226safe
</title><script src="/zhaopin/Public/Home/config/share.js"></script><link rel="stylesheet" href="/zhaopin/Public/Home/config/share_style1_24.css"></head>
<body>
<form method="post" action="jobdetail.aspx?id=366" id="form1">
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
            <!--/.nav-collapse -->
        </div>
    </div>

    
<link href="/zhaopin/Public/Home/config/jobs.css" rel="stylesheet">
<style type="text/css">
    .navbar-inverse .navbar-brand:hover, .navbar-inverse .navbar-brand:focus {
        color: #000;
    }

    .container .navbar-inverse {
        height: 20px;
        background-color: #fff;
        border: 0;
    }
</style>

<div class="container">
    <div class="center" style="display: block;">
        <div class="row" style="margin-top: 30px">
            <div class="col-md-9 col-sm-8 clearfix">

                <nav class="navbar navbar-inverse" role="navigation" style="border:1px solid #ededed;">
                    <div class="container">
                        <div class="navbar-header">
                            <span class="navbar-brand">职位详情</span>
                        </div>
                    </div>
                </nav>

<div class="job-detail" style="border:1px solid #ededed;">
    <div class="row job-detail-manipulate">
        <div id="ContentPlaceHolder1_content">
            <div class="row job-detail-header">            
                <h2 class="col-xs-10"><?php echo ($job_details["job_name"]); ?> <small><?php echo ($job_details["job_status"]); ?></small></h2>            
                <p class="col-xs-2 text-right"><span class="job-property"><?php echo ($job_details["work_status"]); ?></span></p>        
            </div>        
            <ul class="list-unstyled job-summary">            
                <li class="job-summary-item-1"><i></i><span>职位诱惑：<?php echo ($job_details["job_welf"]); ?></span></li>            
                <li class="job-summary-item-1"><i></i><span>招聘企业：<?php echo ($job_details["company_name"]); ?></span></li>            
                <li class="job-summary-item-6"><i></i>招聘人数：<?php echo ($job_details["job_number"]); ?></li>            
                <li class="job-summary-item-2"><i></i>工作地址：<?php echo ($job_details["city"]); ?></li>           
                <li class="job-summary-item-3 want-money"">薪资范围：<span style="color:#fd5f39;""><?php echo ($job_details["price"]); ?></span>
                <li class="job-summary-item-3 want-money"">学历要求：<?php echo ($job_details["job_edu"]); ?>
                </li>            
                <li class="job-summary-item-4"><i></i>发布日期：<?php echo ($job_details["add_time"]); ?></li>        
            </ul>        
            <ul class="row list-unstyled job-tags">            
                <li class="col-xs-10 job-tags-list">招聘职位：<?php echo ($job_details["job_name"]); ?></li>        
            </ul>        
                <h3 class="clearfix"><strong>岗位描述</strong></h3>        
                <section class="job-description">           
                    <pre class="job-detail-content">
<?php echo ($job_details["job_desc"]); ?>
                    </pre>       
                </section>       
                <h3 class="clearfix"><strong>职位要求</strong></h3>       
                <section class="job-condition">           
                    <pre class="job-detail-content">
<?php echo ($job_details["job_req"]); ?>
                    </pre>       
                </section>
                <h3 class="clearfix"><strong>简历投递（注明来自226招聘)</strong></h3>       
                <section class="job-condition">           
                    <pre class="job-detail-content">
<?php echo ($job_details["job_email"]); ?>
                    </pre>       
                </section>
            </div>
            
        <div class="col-xs-9">
            <label class="job-share pull-left">分享到：</label><div class="bdsharebuttonbox bdshare-button-style1-24" data-bd-bind="1517487118653"><a href="#" class="bds_more" data-cmd="more"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_tqq" data-cmd="tqq" title="分享到腾讯微博"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_renren" data-cmd="renren" title="分享到人人网"></a></div>
        </div>
        <div class="col-xs-3">
            <a href="#" data-toggle="modal" data-target="#report-info">举报</a>
        </div>
    </div>
</div>

            </div>
            <script>
                var title = $('.job-detail-header h2').html();
                console.log(title);
                window._bd_share_config = {
                    "common":
                    {
                        "bdSnsKey": {},

                        "bdText": "我在226safe（226 Job）发现了一个好职位" + title + "快来看看！",

                        "bdMini": "2",
                        "bdMiniList": false,
                        "bdPic": "",
                        "bdStyle": "1",
                        "bdSize": "24"
                    },
                    "share": {}
                };
                with (document) 0[(getElementsByTagName('head')[0] || body).appendChild(createElement('script')).src = 'http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion=' + ~(-new Date() / 36e5)];
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