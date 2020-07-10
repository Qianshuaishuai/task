<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:36:"./views/admin/pc/recharge/post.phtml";i:1541935409;s:59:"/www/wwwroot/leye/public/views/admin/pc/common/header.phtml";i:1541935409;s:60:"/www/wwwroot/leye/public/views/admin/pc/common/sidebar.phtml";i:1592312768;s:58:"/www/wwwroot/leye/public/views/admin/pc/recharge/nav.phtml";i:1541935409;s:59:"/www/wwwroot/leye/public/views/admin/pc/recharge/tabs.phtml";i:1541935409;s:59:"/www/wwwroot/leye/public/views/admin/pc/common/footer.phtml";i:1592313406;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>管理系统 | 管理后台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- 弹出框 -->
    <link rel="stylesheet" type="text/css" href="/static/plugins/SmallPop/spop.min.css">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="/static/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/static/plugins/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/static/plugins/Ionicons/css/ionicons.min.css">
    <!-- 图片展示插件样式 -->
    <link rel="stylesheet" href="/static/plugins/magnify/dist/jquery.magnify.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/static/plugins/AdminLTE/css/skins/_all-skins.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="/static/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/static/plugins/html5shiv.min.js"></script>
    <script src="/static/plugins/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript" src="/static/plugins/SmallPop/spop.min.js"></script>
    <!-- jQuery 3 -->
    <script src="/static/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="/static/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="/static/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- 剪切板 -->
    <script type="text/javascript" src="/static/plugins/clipboard.min.js"></script>
    <!-- 图片展示插件 -->
    <script type="text/javascript" src="/static/plugins/magnify/dist/jquery.magnify.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/static/plugins/AdminLTE/js/adminlte.min.js"></script>
    <!--引入JS-->
    <script src="/static/admin/web/js/global.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="/admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>系统</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>管理系统</b></span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img onerror="this.src='/static/admin/web/images/avatar.png'" src="<?php echo to_media($admin['avatar']); ?>" class="user-image" alt="User Image">
                            <span class="hidden-xs"><?php echo $admin['username']; ?></span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img onerror="this.src='/static/admin/web/images/avatar.png'" src="<?php echo to_media($admin['avatar']); ?>" class="img-circle" alt="User Image">
                                <p>
                                    <?php echo $admin['username']; ?>
                                    <small><?php echo date('Y年m月d日'); ?></small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="<?php echo U('index/profile'); ?>" class="btn btn-default btn-flat">资料设置</a>
                                </div>
                                <div class="pull-right">
                                    <a href="<?php echo U('auth/login'); ?>" class="btn btn-default btn-flat">退出</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img onerror="this.src='/static/admin/web/images/avatar.png'" src="<?php echo to_media($admin['avatar']); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $admin['username']; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i>&#22312;&#32447;</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">&#21151;&#33021;&#33756;&#21333;</li>

            <?php if(is_array($treeMenu) || $treeMenu instanceof \think\Collection || $treeMenu instanceof \think\Paginator): $i = 0; $__LIST__ = $treeMenu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$oo): $mod = ($i % 2 );++$i;if($oo['childnum'] == '0'): ?>
                <li <?php if(menuActive($oo['name'], $oo['level'])): ?>class="active"<?php endif; ?>><a href="<?php echo U($oo['name']); ?>"><i class="<?php echo $oo['icon']; ?>"></i><span><?php echo $oo['title']; ?></span></a></li>
                <?php elseif($oo['level'] == '1'): ?>
                <li class="treeview <?php if(menuActive($oo['name'], $oo['level'])): ?>active<?php endif; ?>">
                    <a href="javascript:void(0);">
                        <i class="<?php echo $oo['icon']; ?>"></i><span><?php echo $oo['title']; ?></span>
                    <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                </a>
                <ul class="treeview-menu">
                        <?php if(is_array($oo['children']) || $oo['children'] instanceof \think\Collection || $oo['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $oo['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$to): $mod = ($i % 2 );++$i;?>
                        <li <?php if(menuActive($to['name'])): ?>class="active"<?php endif; ?>><a href="<?php echo U($to['name']); ?>"><i class="<?php echo $to['icon']; ?>"></i><?php echo $to['title']; ?></a></li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </li>
                <?php endif; endforeach; endif; else: echo "" ;endif; ?>

         

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<div class="content-wrapper">
    <section class="content-header">
    <h1>
        充值管理
        <small>
            <?php if($action == 'index'): ?>
            充值列表
            <?php else: if(empty($item)): ?>添加充值<?php else: ?>修改充值<?php endif; endif; ?>
        </small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>充值管理</a></li>
        <li class="active">
            <?php if($action == 'index'): ?>
            充值列表
            <?php else: ?>
            审核充值
            <?php endif; ?>
        </li>
    </ol>
</section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="nav-tabs-custom">
                    <ul class="nav nav-tabs">
    <li <?php if(in_array($action,['index'])): ?>class="active"<?php endif; ?>>
        <a href="<?php echo U('index'); ?>" >充值列表</a>
    </li>
    <?php if(in_array($action,['post']) && !empty($item)): ?>
        <li class="active">
            <a href="<?php echo U('post', 'id=' . $item['id']); ?>">审核管理</a>
        </li>
    <?php endif; ?>
</ul>
                    <div class="tab-content">
                        <form method="post" class="form-horizontal form" id="post_form">
                            <div class="panel panel-info">
                                <div class="panel-heading">
                                    充值详情
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">用户名</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" readonly="readonly" value="<?php echo !empty($item['username'])?$item['username']:''; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">账号</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" readonly="readonly" value="<?php echo !empty($item['account'])?$item['account']:''; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">充值金额</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" readonly="readonly" value="<?php echo !empty($item['credit2'])?$item['credit2']:''; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">支付时间</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" readonly="readonly" value="<?php echo !empty($item['pay_time'])?$item['pay_time']:''; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">支付截图</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <div class="input-group " style="margin-top:.5em;">
                                                <img src="<?php echo to_media($item['thumbs']); ?>" onerror="this.src='/static/admin/web/images/nopic.jpg'; this.title='图片未找到.'" class="img-responsive img-thumbnail" width="150">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">真实姓名</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" readonly="readonly" value="<?php echo !empty($item['realname'])?$item['realname']:''; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">提交时间</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <input type="text" class="form-control" readonly="readonly" value="<?php echo !empty($item['create_time'])?$item['create_time']:''; ?>" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">状态</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <label class="radio-inline">
                                                <input type="radio" name="status" <?php if(1==$item['status']): ?>checked<?php endif; ?> value="1">
                                                已发放
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="status" <?php if(-1==$item['status']): ?>checked<?php endif; ?> value="-1">
                                                审核未通过
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-xs-12 col-sm-3 col-md-2 control-label">备注</label>
                                        <div class="col-sm-6 col-xs-12">
                                            <textarea class="form-control" name="note" maxlength="1000" rows="5" placeholder="请输入审核备注"><?php echo !empty($item['note'])?$item['note']:''; ?></textarea>
                                        </div>
                                    </div>
                                    <?php if($origin['update_time'] == 0): ?>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-xs-12 col-sm-offset-2">
                                            <input type="hidden" name="id" value="<?php echo !empty($item['id'])?$item['id']:0; ?>">
                                            <button type="button" id="submit" name="submit" class="btn btn-primary">审核</button>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </form>
                        <link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
                        <script src="/static/plugins/dialog/js/dialog.js"></script>
                        <style type="text/css">
                            .dialog {
                              position: fixed;
                              left: 0;
                              top: 0;
                              z-index: 10001;
                              width: 100%;
                              height: 100%;
                            }
                            .dialog-content {
                                width: 200px;
                            }
                            .dialog-overlay {
                              position: absolute;
                              top: 0;
                              left: 0;
                              z-index: 10002;
                              width: 100%;
                              height: 100%;
                              background-color: rgba(0, 0, 0, 0.5);
                            }
                        </style>
                        <script type="text/javascript">
                            $(function () {
                                $("#submit").click(function () {
                                    var val=$('input:radio[name="status"]:checked').val();
                                     if(val==null){
                                        $(document).dialog({
                                            titleText: '审核充值',
                                            content: '还未选择审核状态',
                                        });
                                        return;
                                    }

                                    $(document).dialog({
                                        type : 'confirm',
                                        titleText: '审核充值',
                                        content: '确定要审核此充值吗？审核后无法修改。',
                                        onClickConfirmBtn: function(){
                                            $.post(
                                                '/admin/recharge/save',
                                                $('#post_form').serialize(),
                                                function (res) {
                                                    message(res.message,res.redirect,res.type)
                                                },'json'
                                            );
                                        }
                                    });
                                });
                            });
                        </script>
                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.nav-tabs-custom -->
            </div>
            <!-- /.col -->
        </div>
    </section>
</div>
            <!-- /.content-wrapper -->
            <footer class="main-footer"><div class="pull-right hidden-xs"></div>Copyright &copy; 2020 All rights reserved.</footer>
            <div class="control-sidebar-bg"></div>
        </div>
    </body>
</html>

