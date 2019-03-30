<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html class="no-js fixed-layout">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>226safe job</title>
  <meta name="description" content="这是一个 index 页面">
  <meta name="keywords" content="index">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="/zhaopin_admin/Public/Admin/assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="/zhaopin_admin/Public/Admin/assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="" />
  <link rel="stylesheet" href="/zhaopin_admin/Public/Admin/assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/zhaopin_admin/Public/Admin/assets/css/admin.css">
</head>
<body>
<!--[if lte IE 9]>
<p class="browsehappy">你正在使用<strong>过时</strong>的浏览器，Wereport 暂不支持。 请 <a href="http://browsehappy.com/" target="_blank">升级浏览器</a>
  以获得更好的体验！</p>
<![endif]-->

<header class="am-topbar am-topbar-inverse admin-header">
  <div class="am-topbar-brand">
    <strong>226safe job</strong> <small>后台管理</small>
  </div>

  <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

  <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

    <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
      <!-- <li><a href="javascript:;"><span class="am-icon-envelope-o"></span> 收件箱 <span class="am-badge am-badge-warning">5</span></a></li> -->
<!--       <li class="am-dropdown" data-am-dropdown>
        <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
          <span class="am-icon-users"></span> 管理员 <span class="am-icon-caret-down"></span>
        </a>
        <ul class="am-dropdown-content">
          <li><a href="#"><span class="am-icon-user"></span> 资料</a></li>
          <li><a href="#"><span class="am-icon-cog"></span> 设置</a></li>
          <li><a href="#"><span class="am-icon-power-off"></span> 退出</a></li>
        </ul> -->
      <!-- </li> -->
      <li class="am-hide-sm-only"><a href="javascript:;" id="admin-fullscreen"><span class="am-icon-arrows-alt"></span> <span class="admin-fullText">开启全屏</span></a></li>
    </ul>
  </div>
</header>

<div class="am-cf admin-main">
  <!-- sidebar start -->
  <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
    <div class="am-offcanvas-bar admin-offcanvas-bar">
      <ul class="am-list admin-sidebar-list">
        <li><a href="<?php echo U('Index/index');?>"><span class="am-icon-home"></span> 招聘列表</a></li>
        <li><a href="<?php echo U('Index/add_job');?>"><span class="am-icon-shield"></span> 发布招聘</a></li>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-bookmark"></span> 公告</p>
          <p>226safe job -- 226招聘</p>
        </div>
      </div>

      <div class="am-panel am-panel-default admin-sidebar-panel">
        <div class="am-panel-bd">
          <p><span class="am-icon-tag"></span> 226safe job</p>
          <p>Welcome to the 226safe job!</p>
        </div>
      </div>
    </div>
  </div>
  <!-- sidebar end --> 
<link href="/zhaopin_admin/Public/Admin/ueditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">

<!-- content start -->
<div class="admin-content">
  <div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
      <div class="am-fl am-cf">
        <strong class="am-text-primary am-text-lg">发布招聘</strong> /
        <small>add_job</small>
      </div>
    </div>

    <hr>

    <div class="am-tabs am-margin" data-am-tabs>
      <ul class="am-tabs-nav am-nav am-nav-tabs">
        <li class="am-active"><a href="#tab1">招聘信息</a></li>
      </ul>
      <div class="am-tabs-bd">
      <form action="<?php echo U('Index/edit_job');?>" method="post">
        <div class="am-tab-panel am-fade am-in am-active" id="tab1">
          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">招聘企业</div>
            <div class="am-form-group">
            <div class="am-u-sm-8 am-u-md-10">
                <input type="text" name="company_name" value="<?php echo ($job_info["company_name"]); ?>">
            </div>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">招聘职位</div>
            <div class="am-form-group">
            <div class="am-u-sm-8 am-u-md-10">
                <input type="text" name="job_name" value="<?php echo ($job_info["job_name"]); ?>">
            </div>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">职位诱惑</div>
            <div class="am-form-group">
            <div class="am-u-sm-8 am-u-md-10">
                <input type="text" name="job_welf" value="<?php echo ($job_info["job_welf"]); ?>">
            </div>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">薪资范围</div>
            <div class="am-form-group">
            <div class="am-u-sm-8 am-u-md-10">
                <input type="text" name="price" value="<?php echo ($job_info["price"]); ?>">
            </div>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">学历</div>
            <div class="am-form-group">
            <div class="am-u-sm-8 am-u-md-10">
               <input type="text" name="job_edu" value="<?php echo ($job_info["job_edu"]); ?>">
            </div>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">工作地址</div>
            <div class="am-form-group">
            <div class="am-u-sm-8 am-u-md-10">
                <input type="text" name="city" value="<?php echo ($job_info["city"]); ?>">
            </div>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">招聘人数</div>
            <div class="am-form-group">
            <div class="am-u-sm-8 am-u-md-10">
                <input type="text" name="job_number" value="<?php echo ($job_info["job_number"]); ?>">
            </div>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">投递邮箱</div>
            <div class="am-form-group">
            <div class="am-u-sm-8 am-u-md-10">
                <input type="text" name="job_email" value="<?php echo ($job_info["job_email"]); ?>">
            </div>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">工作状态</div>
            <div class="am-u-sm-8 am-u-md-10">
              <select data-am-selected="{btnSize: 'sm'}" name="work_status">
                <option value="0" <?php echo ($job_info['work_status'] == 0 ?selected:''); ?>>全职</option>
                <option value="1" <?php echo ($job_info['work_status'] == 1 ?selected:''); ?>>实习</option>
                <option value="2" <?php echo ($job_info['work_status'] == 2 ?selected:''); ?>>兼职</option>
              </select>
            </div>
          </div>

          <div class="am-g am-margin-top">
            <div class="am-u-sm-4 am-u-md-2 am-text-right">招聘状态</div>
            <div class="am-u-sm-8 am-u-md-10">
              <select data-am-selected="{btnSize: 'sm'}" name="job_status">
                <option value="0" <?php echo ($job_info['job_status'] == 0 ?selected:''); ?>>进行中</option>
                <option value="1" <?php echo ($job_info['job_status'] == 1 ?selected:''); ?>>已结束</option>
              </select>
            </div>
          </div>

          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              岗位描述
            </div>
            <div class="am-u-sm-12 am-u-md-10">
              <textarea name="job_desc" id="job_desc" style="width:800px;height:300px;"><?php echo ($job_info["job_desc"]); ?></textarea>  
            </div>
          </div>
          <div class="am-g am-margin-top-sm">
            <div class="am-u-sm-12 am-u-md-2 am-text-right admin-form-text">
              职位要求
            </div>
            <div class="am-u-sm-12 am-u-md-10">
              <textarea name="job_req" id="job_req" style="width:800px;height:300px;"><?php echo ($job_info["job_req"]); ?></textarea>  
            </div>
          </div>
        </div>

  <center>
    <div class="am-margin">
      <input type="hidden" value="<?php echo ($job_info["id"]); ?>" name="id">
      <button type="submit" class="am-btn am-btn-primary am-radius">保存</button>
    </div>
    </center>
      </form>

      </div>
    </div>

  </div>


    <footer class="admin-content-footer">
      <hr>
      <p class="am-padding-left">© 2018 226safe job</p>
    </footer>

  </div>
  <!-- content end -->
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2018 226safe job</p>
</footer>

<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<!--[if (gte IE 9)|!(IE)]><!-->
<script src="//s.amazeui.org/assets/2.x/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="/zhaopin_admin/Public/Admin/assets/js/amazeui.min.js"></script>
<script src="/zhaopin_admin/Public/Admin/assets/js/app.js"></script>
</body>
</html>
<script type="text/javascript" charset="utf-8" src="/zhaopin_admin/Public/Admin/ueditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/zhaopin_admin/Public/Admin/ueditor/umeditor.min.js"></script>
<script type="text/javascript" src="/zhaopin_admin/Public/Admin/ueditor/lang/zh-cn/zh-cn.js"></script>

<script>
    var um = UM.getEditor('job_desc');
    var um = UM.getEditor('job_req');
</script>