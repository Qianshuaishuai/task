<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:36:"./views/home/mobile/help/index.phtml";i:1541935409;}*/ ?>
﻿<!DOCTYPE html>
<html>

	<head>
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
		<title>公告列表</title>
		<link rel="shortcut icon" href="clientapp/images/new_images/favicon.ico" />
		<link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
		<link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css" />
		<link href="/static/home/mobile/css/new_style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/static/home/mobile/js/jquery.min.js"></script>
	</head>
	<style type="text/css">
		* {
			margin: 0px;
			padding: 0px;
		}
		
		html {
			font-size: 62.5%;
		}
		
		body {
			font-family: "微软雅黑", "Microsoft Yahei", "Arial";
			font-size: 1.4rem;
			background: #F5F5F5;
			line-height: 1.5;
			color: #333;
			overflow-x: hidden;
			overflow-y: auto;
			-webkit-overflow-scrolling: touch;
		}
		
		a {
			text-decoration: none;
			-webkit-transition: all 0.3s ease-in-out;
			transition: all 0.3s ease-in-out;
			color: #333;
		}
		.help-cont{
			width: 96%;
			margin: 60px 2% 0;
		}
		.help-cont ul{
			overflow: hidden;
		}
		.help-cont ul li{
			width: 46%;
			margin: 10px 2%;
			float: left;
			border-radius: 3px;
			line-height: 30px;
			text-align: center;
			color: #fff;
			background-color: #F58D1F;
		}
		.help-cont ul li.active{
			background-color: #FE4B1C;
		}
		.help-cont-box .item{
			display: none;
			text-align: center;
		}
		.help-cont-box .item h2{
			text-align: left;
		}
		.help-cont-box .item img{
			width: 70%;
			max-width: 377px;
			margin: 0 auto 20px;
		}
		.help-cont-box .item.active{
			display: block;
		}
	</style>
	<body>
		<div class="site-header header-fixed">
			<a onclick="window.history.back();" class="back"></a>
			<div class="tit-name">新手教程</div>
		</div>
		<div class="help-cont">
			<ul class="navs">
				<li class="active">我要接任务</li>
				<li>我要发任务</li>
			</ul>
			<div class="help-cont-box">
				<div class="item active">
                    <?php echo !empty($site['join_task_detail'])?$site['join_task_detail']:''; ?>
				</div>
                <div class="item">
                    <?php echo !empty($site['push_task_detail'])?$site['push_task_detail']:''; ?>
                </div>
			</div>
		</div>
        <script type="text/javascript">
            $(function () {
                $('.navs li').click(function () {
                    var obj = $('.navs li');
                    var index = obj.index(this);
                    obj.removeClass('active').eq(index).addClass('active');
                    $('.item').removeClass('active').eq(index).addClass('active');
                });
            });
        </script>
    </body>
</html>