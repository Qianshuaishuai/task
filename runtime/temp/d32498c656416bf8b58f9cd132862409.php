<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:38:"./views/home/mobile/invite/index.phtml";i:1592420538;s:62:"/www/wwwroot/leye/public/views/home/mobile/common/footer.phtml";i:1592421926;}*/ ?>
﻿<!DOCTYPE HTML>
<html>

<head>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>邀请好友</title>
    <link href="/static/home/mobile/css/reset_5.css" rel="stylesheet" type="text/css" />
    <link href="/static/home/mobile/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/static/home/mobile/css/new_style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="/static/home/mobile/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/plugins/dialog/css/dialog.css" />
    <script src="/static/home/mobile/js/jquery-2.0.3.min.js"></script>
    <script src="/static/plugins/dialog/js/dialog.js"></script>
    <script type="text/javascript" src="/static/plugins/clipboard.min.js"></script>
    <script type="text/javascript" src="/static/home/mobile/js/global.js"></script>
    <style type="text/css">
        .button5, .button5:link, .button5:visited {
            width: 100%;
            height: auto;
            border-radius: 3px;
            outline: none;
            -webkit-appearance: none;
            font-weight: normal;
            line-height: 35px;
            font-weight: bold;
            color: #fff;
            font-size: 17px;
            background: #FE4B1C;
            border: none;
            border-radius: 15px;
            display: block;
            margin: 10px 0;
            padding: 0;
            float: none;
        }
        #qrcode{padding:20px;}
        #qrcode img{margin:0 auto;}
    </style>
</head>

<body>
<header class="site-header header-fixed">
    <a onclick="window.history.back();" class="back"></a>
    <div class="tit-name">邀请好友</div>
</header>
<div class="main inivteFriend">
    <div class="member-tab">
        <ul class="add_friend_tab">
            <li class="active">
                <span>邀请好友</span>
            </li>
            <li>
                <a href="/home/invite/silver.html"><span>邀请记录</span></a>
            </li>
            <li>
                <a href="/home/invite/gold.html"><span>邀请返利</span></a>
            </li>
        </ul>
    </div>
    <div class="bk10">
    </div>
    <div class="add-box">
        <div class="add-cont">
            <div class="sns_box">
                <img src="/static/home/mobile/picture/friends.png" />
                <div class="myMoney">
                    <p>累计邀请返利</p>
                    <p><span class="money"><?php echo $money; ?></span>元</p>
                </div>
            </div>
            <div class="bk10">
            </div>
            <div class="sns_box">
                <div id="qrcode"></div>
                <input type="hidden" id="text" value="<?php echo $domain; ?>home/auth/register.html?i=<?php echo $member['uid']; ?>">
                <!-- <textarea id="sharetext" class="text_box" style="color:#666;border:none;resize: none;width:90%;height:120px;margin: 10px auto;" readonly="true">我玩了很多天了，每天收入不算多，四五十元，就当赚点零花钱。提现速度快，几分钟内就能到账。推荐想赚小钱的朋友进来玩玩：<?php echo $domain; ?>home/auth/register.html?i=<?php echo $member['uid']; ?></textarea> -->
            </div>
            <div class="clipboards" style="width:96%;display:block;margin: 0 auto;overflow: hidden;text-align: center;">
                <a href="javascript:" id="copybtn" class="button5" onclick="copy(this)" data-copy="我玩了很多天了，每天收入不算多，四五十元，就当赚点零花钱。提现速度快，几分钟内就能到账。推荐想赚小钱的朋友进来玩玩：<?php echo $domain; ?>home/auth/register.html?i=<?php echo $member['uid']; ?>">复制内容</a>
            </div>
            <div class="bdsharebuttonbox" data-tag="share_1">
                <div style="width:96%;display:block;margin: 0 auto;overflow: hidden;text-align: center;">
                    <div style="display: inline-block;margin: 0 auto;">
                        <a class="bds_weixin" target="_blank" data-cmd="weixin" style="background:url(/static/home/mobile/picture/weixin.png) repeat 0 0;width:50px;height:50px;margin:0 5px 0 0;display:inline-block;float: none;padding: 0;"></a>
                        <a class="bds_qzone" target="_blank" data-cmd="qzone" href="#" style="background:url(/static/home/mobile/images/qzone.png) repeat 0 0;width:50px;height:50px;margin:0 5px 0 0;display:inline-block;float: none;padding: 0;"></a>
                        <a class="bds_tsina" target="_blank" data-cmd="tsina" style="background:url(/static/home/mobile/images/weibo.png) repeat 0 0;width:50px;height:50px;margin:0 5px 0 0;display:inline-block;float: none;padding: 0;"></a>
                        <a class="bds_sqq" target="_blank" data-cmd="sqq" style="background:url(/static/home/mobile/images/qq.png) repeat 0 0;width:50px;height:50px;margin:0 5px 0 0;display:inline-block;float: none;padding: 0;"></a>
                        <a class="bds_tqq" target="_blank" data-cmd="tqq" style="background:url(/static/home/mobile/images/tq.png) repeat 0 0;width:50px;height:50px;margin:0 5px 0 0;display:inline-block;float: none;padding: 0;"></a>
                    </div>
                </div>
            </div>
            <!--<div class="pro-info" style="height: 80px;width: 90%;margin: 20px auto;display: block;">
                <p style="padding:5px; font-size: 16px;color: #272727;font-family: 'Microsoft YaHei UI', 'Microsoft YaHei', SimSun, 'Segoe UI', Tahoma, Helvetica, Sans-Serif;">邀请徒弟加入推推，徒弟需绑定好邮箱与支付宝，徒弟每完成一个任务得到雇主通过，师父即可获得徒弟完成任务佣金的【25%奖励】</p>
            </div>-->
        </div>
        <div class="add-cont" style="display:none;">
            <div class="fan-money">
                <i class="sliver"></i>
                <span>总共获得返利金额<br>0.00元 </span>
                <span>积分<br>0分</span>
            </div>
            <div class="fanli-record">
                <ul>
                </ul>
            </div>
        </div>

    </div>
    <div id="error" style="display:none;"></div>
</div>

<link rel="stylesheet" href="/index/common/weui.css"><!--官方css-->
<footer class="new-footer">
    <div class="weui-tabbar">
        <a href="/index.html" class="weui-tabbar__item js_item weui-bar__item_on" data-id="one">
            <img src="/index/common/tab1.png" alt="" class="weui-tabbar__icon">
            <p class="weui-tabbar__label">首页</p>
        </a>
        <a href="/task.html" class="weui-tabbar__item js_item" data-id="two" >
            <img src="/index/common/tab2.png" alt="" class="weui-tabbar__icon">
            <p class="weui-tabbar__label">任务中心</p>
        </a>
        <a href="/home/account.html" class="weui-tabbar__item js_item" data-id="three" >
            <img src="/index/common/tab3.png" alt="" class="weui-tabbar__icon">
            <p class="weui-tabbar__label">个人中心</p>
        </a>
    </div>
</footer>
<script>
    window._bd_share_config = {
        common : {
            bdText : '我玩了很多天了，每天收入不算多，四五十元，就当赚点零花钱。提现速度快，几分钟内就能到账。推荐想赚小钱的朋友进来玩玩：<?php echo $domain; ?>home/auth/register.html?i=<?php echo $member['uid']; ?>',
            bdDesc : '我玩了很多天了，每天收入不算多，四五十元，就当赚点零花钱。提现速度快，几分钟内就能到账。推荐想赚小钱的朋友进来玩玩：<?php echo $domain; ?>home/auth/register.html?i=<?php echo $member['uid']; ?>',
            bdUrl : '<?php echo $domain; ?>home/auth/register.html?i=<?php echo $member['uid']; ?>',
            bdPic : ''
        },
        share : [{
            "bdSize" : 16
        }],
        image : [{
            viewType : 'list',
            viewPos : 'top',
            viewColor : 'black',
            viewSize : '16',
            viewList : ['weixin','qzone','tsina','huaban','tqq','renren']
        }]
    }
    with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
</script>
<script type="text/javascript" src="/static/home/mobile/js/qrcode.min.js"></script>
<script type="text/javascript">
    var qrcode = new QRCode(document.getElementById("qrcode"), {
        width : 185,
        height : 185
    });

    function makeCode () {
        var elText = document.getElementById("text");

        if (!elText.value) {
            return;
        }

        qrcode.makeCode(elText.value);
    }

    makeCode();

</script>
</body>

</html>