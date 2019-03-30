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

  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content">
    <div class="admin-content-body">
      <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">招聘列表</strong> / <small>job_list</small></div>
      </div>

      <hr>
  
    <form action="<?php echo U('Index/search_job');?>" method="get">
      <div class="am-g">
        <div class="am-u-sm-12 am-u-md-3">
          <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field" name="keywords" value="<?php echo ($keywords); ?>" placeholder="输入招聘企业名称">
          <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="submit">搜索</button>
          </span>
          </div>
        </div>
      </div>
    </form>
      <div class="am-g">
        <div class="am-u-sm-12">
          <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
              <thead>
              <tr>
                <th class="table-id">ID</th><th class="table-title">招聘企业</th><th class="table-type">招聘职位</th><th class="table-author am-hide-sm-only">招聘状态</th><th class="table-date am-hide-sm-only">发布时间</th><th class="table-set">操作</th>
              </tr>
              </thead>
              <tbody>
              <?php if(is_array($job_list)): foreach($job_list as $key=>$vo): ?><tr>
                  <td><?php echo ($vo["id"]); ?></td>
                  <td><a href="#"><?php echo ($vo["company_name"]); ?></a></td>
                  <td><?php echo ($vo["job_name"]); ?></td>
                  <td class="am-hide-sm-only"><?php echo ($vo["job_status"]); ?></td>
                  <td class="am-hide-sm-only"><?php echo ($vo["add_time"]); ?></td>
                  <td>
                    <div class="am-btn-toolbar">
                      <div class="am-btn-group am-btn-group-xs">
                      <a href="<?php echo U('Index/edit_job',array('id'=>$vo[id]));?>"><button type="button" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button></a>
                      <a><button id="<?php echo ($vo["id"]); ?>" onclick="confirm_del_job(this)"   type="button"  class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button></a>
                      </div>
                    </div>
                  </td>
                </tr><?php endforeach; endif; ?>
              </tbody>
            </table>
            <div class="am-cf">
              共 <?php echo ($count); ?> 条招聘
              <div class="am-fr">
                <ul class="am-pagination">
                  <?php echo ($page); ?>
                </ul>
              </div>
            </div>
            <hr />
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
<script>
  $('.am-fr ul div a').unwrap('div').wrap('<li></li>');
  $('.am-fr ul span').wrap('<li class="am-active"></li>');

  function confirm_del_job(_this)
  {
    if (confirm("确定要删除该招聘吗?该操作不可逆!")) {
      var my_this = _this;
      var id = $(my_this).attr('id');
      $.ajax({
        url:"<?php echo U('Index/del_job');?>",
        type:"post",
        data:'id='+id,
        success:function(data){
          if (data == 1) {
            alert("删除成功");window.location.reload();
          } else {
            alert("删除失败");window.location.reload();
          }
        }
      });

    } else {
      return false;
    }
  }
</script>