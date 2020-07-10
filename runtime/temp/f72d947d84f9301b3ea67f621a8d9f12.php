<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:39:"./views/home/mobile/auth/register.phtml";i:1541935409;}*/ ?>
<html>
<head>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>注册</title>
    <link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css">
    <link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/static/home/mobile/css/new_style.css">
    <link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">

    <script type="text/javascript" src="/static/home/mobile/js/jquery.min.js"></script>
    <!-- 弹出层 -->
    <link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
    <script src="/static/plugins/dialog/lib/zepto.min.js"></script>
    <script src="/static/plugins/dialog/js/dialog.js"></script>
    <!-- 弹出层 -->
    <script type="text/javascript" src="/static/home/mobile/js/global.js"></script>
</head>
<body>
    <style>
        .site-header .tit-name {
            overflow: initial;
        }
    </style>

    <div class="site-header registerTitle">
        <a href="/home.html" class="back"></a>
        <div class="tit-name"><img src="<?php echo to_media(!empty($site['logo'])?$site['logo']:''); ?>"></div>
    </div>
    <div class="main-cont">
        <div class="main registerMain">
            <div class="member-tab">
                <ul class="m_tab_tit">
                    <li class="nobg">
                        <a href="/home/auth/login.html">账号登录</a>
                    </li>
                    <li class="active libg">
                        <a href="/home/auth/register.html">免费注册</a>
                    </li>
                </ul>
            </div>
            <div class="denglu-box">
                <form id="register_form">
                    <div class="dl-form">
                    <div class="item-box">
                        <input name="username" placeholder="用户名" type="text" class="m_txt">
                    </div>
                    <div class="item-box">
                        <input name="email" placeholder="邮箱，可用于找回密码" type="email" class="m_txt">
                    </div>
                    <div class="item-box">
                        <input name="password" type="password" class="m_txt" placeholder="输入密码">
                    </div>
                    <div class="item-box">
                        <input name="password_confirm" type="password" class="m_txt" placeholder="确认密码">
                    </div>
                    <div class="item-box">
                        <input type="text" class="m_txt" placeholder="输入验证码" name="captcha">
                        <div class="yzm">
                            <img style="width:90px; height:30px;"  src="<?php echo captcha_src(); ?>" onclick="this.src='<?php echo captcha_src(); ?>?'+Math.random()" alt="captcha" />
                        </div>
                    </div>
                </div>
                <input type="hidden" name="parent_uid" value="<?php echo $parent_uid; ?>" />
                </form>
            </div>
        </div>
        <div class="member-btn">
            <input type="button" class="button1 active js-register" value="确认注册">
        </div>
    </div>
    <script type="text/javascript">
        $(function () {
            //确认注册
            $('.js-register').click(function () {
                $.post(
                    window.location.href,
                    $('#register_form').serialize(),
                    function(res) {
                        $('.yzm img').click();
                        message(res.message,res.redirect,res.type);
                    },'json'
                );
            });

            //回车登录
            $(document).keyup(function(event){
                if(event.keyCode ==13){
                    $('.js-register').click();
                }
            });
        });
    </script>
</body>
</html>