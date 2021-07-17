<?php /*a:1:{s:36:"/www/wwwroot/tp6.com/view/index.html";i:1626414589;}*/ ?>
<?php
//禁用错误报告
error_reporting(0);
$t=htmlspecialchars($_GET["t"]);
$q=htmlspecialchars($_POST["q"]);
if (empty($q)) {
}else{
  if ($t=="b"){
    //echo'<script>window.location.href="//www.baidu.com/s?ie=utf-8&word='.$q.'";</script>';
echo'<script>window.location.href="https://www.google.com.hk/search?hl=zh&q='.$q.'";</script>';
}else{
//默认谷歌
//echo'<script>window.location.href="https://www.google.com.hk/search?hl=zh&q='.$q.'";</script>';
echo'<script>window.location.href="//www.baidu.com/s?ie=utf-8&word='.$q.'";</script>';
}
};
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="referrer" content="no-referrer" />
    <meta name="theme-color" content="#ffffff">
    <link rel="icon" href="index/icon/icon/280.png?v=1.0.1" sizes="280x280" />
    <link rel="apple-touch-icon-precomposed" href="index/icon/icon/280.png?v=1.0.1" />
    <meta name="msapplication-TileImage" content="icon/icon/280.png?v=1.0.1" />
    <link rel="shortcut icon" href="index/icon/icon/32.png?v=1.0.1"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes"><!--UC强制全屏-->
    <meta name="browsermode" content="application"><!--UC应用模式-->
    <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
    <title>简单搜索</title>
    <link href="index/style.css?t=<?php echo date("ymdhi"); ?>" rel="stylesheet">
    <link href="index/wea.css?t=<?php echo date("ymdhi"); ?>" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
    <script src="//at.alicdn.com/t/font_400990_j21lstb4wx.js"></script>
    <script src="index/sou.js?t=<?php echo date("ymdhi"); ?>"></script>
    <script src="index/wea.js?t=<?php echo date("ymdhi"); ?>"></script>
</head>

<body>
<script>
    /*随机bing背景start,如无需求可注释掉*/
    $.ajax({
        url: 'index/bg/',
        dataType: 'json',
        error: function() {
            console.log('网络错误！');
        },
        success: function(res) {
            //var bgimg;
            var x=Math.floor(Math.random()*9);
            $("body").append('<style> body{background:url("https://cn.bing.com'+res.images[x].url+'") no-repeat center/cover;}</style>');
        }
    });
    /*随机bing背景end*/
</script>
<div id="menu"><i></i></div>
<div class="list closed">
    <ul>

        <?php echo shopToken(); ?>
        <li class="title"><i class="icon iconfont icon-gongxiang"></i> Page</li>
        <?php if(is_array($page) || $page instanceof \think\Collection || $page instanceof \think\Paginator): $i = 0; $__LIST__ = $page;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-shipin"></use></svg> 视频媒体</li>
        <?php if(is_array($shipin) || $shipin instanceof \think\Collection || $shipin instanceof \think\Paginator): $i = 0; $__LIST__ = $shipin;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-youxiang"></use></svg> 邮箱</li>
        <?php if(is_array($email) || $email instanceof \think\Collection || $email instanceof \think\Paginator): $i = 0; $__LIST__ = $email;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-msg"></use></svg> 社交资讯</li>
        <?php if(is_array($emsg) || $emsg instanceof \think\Collection || $emsg instanceof \think\Paginator): $i = 0; $__LIST__ = $emsg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-gouwuche"></use></svg> 购物</li>
        <?php if(is_array($gouwuche) || $gouwuche instanceof \think\Collection || $gouwuche instanceof \think\Paginator): $i = 0; $__LIST__ = $gouwuche;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sheji"></use></svg> 设计视觉</li>
        <?php if(is_array($sheji) || $sheji instanceof \think\Collection || $sheji instanceof \think\Paginator): $i = 0; $__LIST__ = $sheji;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg> 搜索引擎</li>
        <?php if(is_array($sousuo) || $sousuo instanceof \think\Collection || $sousuo instanceof \think\Paginator): $i = 0; $__LIST__ = $sousuo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-ai-tool"></use></svg> 工具</li>
        <?php if(is_array($tool) || $tool instanceof \think\Collection || $tool instanceof \think\Paginator): $i = 0; $__LIST__ = $tool;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-kongzhitai"></use></svg> 开发</li>
        <?php if(is_array($kongzhitai) || $kongzhitai instanceof \think\Collection || $kongzhitai instanceof \think\Paginator): $i = 0; $__LIST__ = $kongzhitai;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-feedly"></use></svg> 效率</li>
        <?php if(is_array($feedly) || $feedly instanceof \think\Collection || $feedly instanceof \think\Paginator): $i = 0; $__LIST__ = $feedly;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-shilaimu"></use></svg> 其他</li>
        <?php if(is_array($other) || $other instanceof \think\Collection || $other instanceof \think\Paginator): $i = 0; $__LIST__ = $other;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($new1) || $new1 instanceof \think\Collection || $new1 instanceof \think\Paginator): $i = 0; $__LIST__ = $new1;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
        <li><a rel="nofollow" href="<?php echo htmlentities($obj['links']); ?>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="<?php echo htmlentities($obj['xlinksico']); ?>"></use></svg><?php echo htmlentities($obj['linkname']); ?></a></li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>

</div>
<?php  /*
天气-
    <div class="mywth">
<div class="wea_hover">
    <div class="wea_in wea_top"></div>
    <div class="wea_in wea_con">
        <ul></ul>
    </div>
    <div class="wea_in wea_foot">
        <ul></ul>
    </div>
</div>
天气插件，基于和风天气接口制作
</div>
<div class="mywth" style="width: 200px;">
    <div id="he-plugin-simple">
    </div>
    <script>WIDGET = {CONFIG:{"modules":"10234","background":5,"tmpColor":"4A4A4A","tmpSize":"14","cityColor":"4A4A4A","citySize":"14","aqiSize":"14","weatherIconSize":"20","alertIconSize":"16","padding":"0px","shadow":"0","language":"auto","borderRadius":5,"fixed":"false","vertical":"middle","horizontal":"left","key":"f60588bd99d94495b907562a23e05666"}}</script> <script src="https://widget.heweather.net/simple/static/js/he-simple-common.js?v=1.1"></script>
</div> */   ?>

<div id="tp-weather-widget" class="mywth"></div> <!--老版本和风天气的标签-->
<script>
    (function(a,h,g,f,e,d,c,b){b=function(){d=h.createElement(g);c=h.getElementsByTagName(g)[0];d.src=e;d.charset="utf-8";d.async=1;c.parentNode.insertBefore(d,c)};a["SeniverseWeatherWidgetObject"]=f;a[f]||(a[f]=function(){(a[f].q=a[f].q||[]).push(arguments)});a[f].l=+new Date();if(a.attachEvent){a.attachEvent("onload",b)}else{a.addEventListener("load",b,false)}}(window,document,"script","SeniverseWeatherWidget","//cdn.sencdn.com/widget2/static/js/bundle.js?t="+parseInt((new Date().getTime() / 100000000).toString(),10)));
    window.SeniverseWeatherWidget('show', {
        flavor: "slim",
        location: "WX4FBXXFKE4F",
        geolocation: true,
        language: "zh-Hans",
        unit: "c",
        theme: "auto",
        token: "fd08684d-bf66-4982-999d-4d0f260c236d",
        hover: "enabled",
        container: "tp-weather-widget"
    })
</script>

<div id="content">
    <div class="con">
        <div class="shlogo" style="background: url(index/icon/logojiu.svg) no-repeat center/cover;"></div>
        <div class="sou">
            <form action="" method="post" target="_self">
                <?php
                   if ($t=="b"){
                     echo'<div class="lg" style="background: url(icon/g.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=\';"></div>';
        }else{
        //上面知道把默认谷歌改成百度，这里不知道改吗大佬们？。。
        echo'<div class="lg" style="background: url(index/icon/baidu.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=b\';"></div>';
        }
        ?>
        <!--input class="t" type="text" value="" name="t" hidden-->
        <input class="wd" type="text" placeholder="请输入搜索内容" name="q" x-webkit-speech lang="zh-CN" autocomplete="off">
        <button><svg class="icon" style=" width: 21px; height: 21px; opacity: 0.5;" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg></button>
        </form>
        <div id="word"></div>
    </div>
</div>
<link rel="stylesheet" href="index/icon/icon/font_css/iconfont.css"> <?php //github  icon tu图标等  icon/icon/font_css/demo_index.html?>

<script type="text/javascript">
    createSnow('index/src/', 60);
</script>

<!-- 鼠标部分   鼠标部分只有css有内容 -->
<!--网易云外链部分 网易云部分 -->
<div class="tooltips">
            <span>
                 <?php if(is_array($gedan_id) || $gedan_id instanceof \think\Collection || $gedan_id instanceof \think\Paginator): $i = 0; $__LIST__ = $gedan_id;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$obj): $mod = ($i % 2 );++$i;?>
<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=450 height=520 src="<?php echo htmlentities($obj['music']); ?>">
                 </iframe>        <?php endforeach; endif; else: echo "" ;endif; ?>
           </span>
</div>

<div class="foot" style="height: 40px;">
    © 2016-<?php echo date("Y") ?> by <a href="https://blog.5iux.cn/">5iux</a> . All rights reserved.
    <a rel="nofollow" href="https://5iux.github.io/sou/" target="_blank" style="font-size: 12px;"><i class="iconfont icon-github"></i></a></div>
</div>
<!--
作者:D.Young
主页：https://blog.5iux.cn/
github：https://github.com/5iux/sou
日期：2020-11-23
版权所有，请勿删除
-->
</body>
</html>










