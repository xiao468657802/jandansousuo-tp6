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
  <link rel="icon" href="icon/icon/280.png?v=1.0.1" sizes="280x280" />
  <link rel="apple-touch-icon-precomposed" href="icon/icon/280.png?v=1.0.1" />
  <meta name="msapplication-TileImage" content="icon/icon/280.png?v=1.0.1" />
  <link rel="shortcut icon" href="icon/icon/32.png?v=1.0.1"/>
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-touch-fullscreen" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="full-screen" content="yes"><!--UC强制全屏-->
  <meta name="browsermode" content="application"><!--UC应用模式-->
  <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
  <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
  <title>简单搜索</title>
  <link href="style.css?t=<?php echo date("ymdhi"); ?>" rel="stylesheet">
  <link href="wea.css?t=<?php echo date("ymdhi"); ?>" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.3.1/dist/jquery.min.js"></script>
  <script src="//at.alicdn.com/t/font_400990_j21lstb4wx.js"></script>
  <script src="sou.js?t=<?php echo date("ymdhi"); ?>"></script>
  <script src="wea.js?t=<?php echo date("ymdhi"); ?>"></script>
</head>

<body>
    <script>
    /*随机bing背景start,如无需求可注释掉*/
    $.ajax({
        url: './bg/',
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

            {foreach $list as $key=>$obj}
            <li><a rel="nofollow" href="{$obj.links}" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="{$obj.xlinksico}"></use></svg>{$obj.linkname}</a></li>
            {/foreach}
<!--            <li class="title"><i class="icon iconfont icon-gongxiang"></i> Page</li>-->
<!--            <li><a rel="nofollow" href="http://blog.vwlin.cn" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-bolezaixian"></use></svg>站主博客</a></li>-->
<!--            <li><a rel="nofollow" href="https://blog.vwlin.cn/tools/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-ai-tool"></use></svg>在线工具站</a></li>-->
<!--            <li><a rel="nofollow" href="https://blog.vwlin.cn/ss/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg>搜搜</a></li>-->
<!--            <li><a rel="nofollow" href="http://tools.vwlin.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-daohang"></use></svg>工具站2.0</a></li>-->
<!--            <li><a rel="nofollow" href="http://tcu.vwlin.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-instagram"></use></svg>小小图床</a></li>-->
<!--            <li><a rel="nofollow" href="http://blog.vwlin.cn/tools/one/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-youhuiquan"></use></svg>合成收款码</a></li>-->
<!--<li><a rel="nofollow" href="http://vwlin.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wangluo1"></use></svg>短网址API</a></li>-->
<!--            <li><a rel="nofollow" href="http://ti.vwlin.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-jiaocheng"></use></svg>爱刷题</a></li>-->
<!--          <!------>-->
<!--            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-shipin"></use></svg> 视频媒体</li>-->
<!--            <li><a rel="nofollow" href="https://www.youtube.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-youtube"></use>-->
<!--</svg> Youtube</a></li>-->
<!--            <li><a rel="nofollow" href="https://v.qq.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-tengxunshipin"></use></svg>腾讯视频</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.youku.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-youku"></use></svg>优酷</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.iqiyi.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-aiqiyi"></use></svg>爱奇艺</a></li>-->
<!--            <li><a rel="nofollow" href="http://www.acfun.cn/index.html" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-acfun"></use></svg>ACFUN</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.bilibili.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-bili"></use></svg>哔哩哔哩</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.nfmovies.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-netflix"></use></svg>奈非影视</a></li>-->
<!--            <li><a rel="nofollow" href="https://k1080.net/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-yingshi"></use></svg>K1080</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.yunbtv.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-yunbo"></use></svg>云播TV</a></li>-->
<!--          <!------> -->
<!--            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-youxiang"></use></svg> 邮箱</li>-->
<!--            <li><a rel="nofollow" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-gmail"></use></svg>Gmail</a></li>-->
<!--            <li><a rel="nofollow" href="https://outlook.live.com/mail/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-windows"></use></svg>Hotmail</a></li>-->
<!--            <li><a rel="nofollow" href="https://mail.163.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wangyi"></use></svg>网易邮箱</a></li>-->
<!--            <li><a rel="nofollow" href="https://mail.sina.com.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-xinlangwang"></use></svg>新浪邮箱</a></li>-->
<!--            <li><a rel="nofollow" href="https://mail.qq.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-QQ"></use></svg>QQ邮箱</a></li>-->
<!--            <li><a rel="nofollow" href="https://qiye.aliyun.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-yunyouxiang"></use></svg>阿里邮箱</a></li>-->
<!--          <!------>-->
<!--            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-msg"></use></svg> 社交资讯</li>-->
<!--            <li><a rel="nofollow" href="https://www.weibo.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-weibo"></use></svg>微博</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.zhihu.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-zhihu"></use></svg>知乎</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.douban.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-douban"></use></svg>豆瓣</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.jianshu.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-jianshu"></use></svg>简书</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.v2ex.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-v2ex"></use></svg>V2EX</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.instagram.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-instagram"></use></svg>Instagram</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.twitter.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-twitter"></use></svg>Twitter</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.facebook.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-facebook"></use></svg>Facebook</a></li>-->
<!--          <!------>-->
<!--            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-gouwuche"></use></svg> 购物</li>-->
<!--            <li><a rel="nofollow" href="https://www.taobao.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-taobao"></use></svg>淘宝网</a></li>-->
<!--            <li><a rel="nofollow" href="https://dyartstyle.com/juhuasuan/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-juhuasuan"></use></svg>聚划算</a></li>-->
<!--            <li><a rel="nofollow" href="https://dyartstyle.com/temai/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-temai"></use></svg>淘宝特卖</a></li>-->
<!--            <li><a rel="nofollow" href="https://mobile.yangkeduo.com/duo_cms_mall.html?pid=8742514_71211367&cpsSign=CM_190605_8742514_71211367_92fdd9f7fb637fec599bf556f263ed1f&duoduo_type=2&launch_wx=1" title="拼多多手机端专属商城，超低价商品火热抢购中，更有超多大额优惠券持续发放，一键立抢>>" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-99"></use></svg>拼多多</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.jd.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-jingdong"></use></svg>京东</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.suning.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-suning"></use></svg>苏宁易购</a></li>-->
<!--            <li><a rel="nofollow" href="http://you.163.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-yanxuan"></use></svg>网易严选</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.amazon.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-amazon"></use></svg>亚马逊</a></li>-->
<!--            <li><a rel="nofollow" href="http://www.dangdang.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-dangdang"></use></svg>当当</a></li>-->
<!--            <li><a rel="nofollow" href="https://wat.dyartstyle.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wat"></use></svg>吾爱淘</a></li>-->
<!--          <!------>-->
<!--            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sheji"></use></svg> 设计视觉</li>-->
<!--            <li><a rel="nofollow" href="https://hao.5iux.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-daohang1"></use></svg>设计导航</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.pinterest.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-pinterest"></use></svg>Pinterest</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.behance.net/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-behance"></use></svg>Behance</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.dribbble.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-dribbble"></use></svg>Dribbble</a></li>-->
<!--            <li><a rel="nofollow" href="https://huaban.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-huaban"></use></svg>花瓣</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.zcool.com.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-zhanku"></use></svg>站酷</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.iconfont.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-iconfont"></use></svg>阿里图标</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.iconfinder.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-eye"></use></svg>IconFinder</a></li>-->
<!--            <li><a rel="nofollow" href="https://uiiiuiii.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-jiaocheng"></use></svg>优设教程</a></li>-->
<!--          <!------>-->
<!--            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg> 搜索引擎</li>-->
<!--            <li><a rel="nofollow" href="https://www.google.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-google"></use></svg>Google</a></li>-->
<!--            <li><a rel="nofollow" href="https://duckduckgo.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-duck"></use></svg>DuckGo</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.bing.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-bing"></use></svg>Bing</a></li>-->
<!--            <li><a rel="nofollow" href="https:/m.baidu.com/?pu=sz%401321_480&wpo=btmfast" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-icon_baidulogo"></use></svg>百度</a></li>-->
<!--            <li><a rel="nofollow" href="https://hk.yahoo.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-yahoo"></use></svg>雅虎</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.sogou.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sougou"></use></svg>搜狗</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.naver.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-icon-test"></use></svg>NAVER</a></li>-->
<!--            <li><a rel="nofollow" href="https://mijisou.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-miji"></use></svg>秘迹</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.dogedoge.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-gougou"></use></svg>多吉</a></li>-->
<!--            <li><a rel="nofollow" href="https://seeres.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg>seeres</a></li>-->
<!--            <!------>-->
<!--            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-ai-tool"></use></svg> 工具</li>-->
<!--            <li><a rel="nofollow" href="https://tools.miku.ac/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-ai-tool"></use></svg>Miku工具</a></li>-->
<!--            <li><a rel="nofollow" href="https://jiema.wwei.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wode"></use></svg>二维码解码</a></li>-->
<!--            <li><a rel="nofollow" href="/ip/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wangluo"></use></svg>IP查询</a></li>-->
<!--            <li><a rel="nofollow" href="https://translate.google.cn/?hl=zh-CN" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-fanyi"></use></svg>谷歌翻译</a></li>-->
<!--            <li><a rel="nofollow" href="http://www.slimego.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-shilaimu"></use></svg>史莱姆</a></li>-->
<!--            <li><a rel="nofollow" href="https://feedly.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-feedly"></use></svg>Feedly</a></li>         -->
<!--            <li><a rel="nofollow" href="https://pan.baidu.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-baiduyun"></use></svg>百度网盘</a></li>-->
<!--            <li><a rel="nofollow" href="http://www.mdeditor.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-md"></use></svg>MD编辑器</a></li>-->
<!--            <li><a rel="nofollow" href="http://cubic-bezier.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-quxian"></use></svg>贝赛尔曲线</a></li>-->
<!--            <li><a rel="nofollow" href="/base64/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-base64"></use></svg>Base64</a></li>-->
<!--            <li><a rel="nofollow" href="https://javascriptobfuscator.com/Javascript-Obfuscator.aspx" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-jshunxiao"></use></svg>JS混淆器</a></li>-->
<!--            <li><a rel="nofollow" href="https://ping.pe" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wangluo1"></use></svg>Ping.pe</a></li>-->
<!--            <li><a rel="nofollow" href="https://ping.chinaz.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-pingup"></use></svg>站长Ping</a></li>-->
<!--            <li><a rel="nofollow" href="https://apkdl.in/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-anzhuo"></use></svg>APK下载</a></li>-->
<!--            <!------>-->
<!--            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-kongzhitai"></use></svg> 开发</li>-->
<!--            <li><a rel="nofollow" href="http://www.w3school.com.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-h5"></use></svg>W3school</a></li>-->
<!--            <li><a rel="nofollow" href="https://github.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-github"></use></svg>Github</a></li>-->
<!--            <li><a rel="nofollow" href="https://codepen.io/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-codepen"></use></svg>Codepen</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.52pojie.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-theater-masks"></use></svg>吾爱破解</a></li>-->
<!--            <li><a rel="nofollow" href="https://bbs.binmt.cc/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-bolezaixian"></use></svg>MT论坛</a></li>-->
<!--            <li><a rel="nofollow" href="http://www.cnhonkerarmy.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-bolezaixian"></use></svg>红客联盟</a></li>-->
<!--            <li><a rel="nofollow" href="https://blog.csdn.net/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-bolezaixian"></use></svg>CSDN</a></li>-->
<!--            <li><a rel="nofollow" href="https://segmentfault.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-msg"></use></svg>SF思否</a></li>-->
<!--            <li><a rel="nofollow" href="https://cdnjs.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-cdnjs"></use></svg>CdnJs</a></li>-->
<!--            <li><a rel="nofollow" href="https://fontawesome.com/icons?d=gallery&m=free" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-font-awesome"></use></svg>Font A.</a></li>-->
<!--            <li><a rel="nofollow" href="https://msdn.itellyou.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-windows"></use></svg>MSDN下载</a></li>-->
<!--            <li><a rel="nofollow" href="https://dash.cloudflare.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-cloudflare"></use></svg>C. flare</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.swiper.com.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-S"></use></svg>Swiper</a></li>-->
<!--            <li class="title"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-feedly"></use></svg> 效率</li>-->
<!--            <li><a rel="nofollow" href="https://letsview.com/zh/?apptype=plopco" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-pinterest"></use></svg>幕享投屏</a></li>-->
<!--            <li><a rel="nofollow" href="http://dict.youdao.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wangyi"></use></svg>有道词典</a></li>-->
<!--            <li><a rel="nofollow" href="https://www.yinxiang.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wode"></use></svg>印象笔记</a></li>-->
<!--            <li><a rel="nofollow" href="http://note.youdao.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wangyi"></use></svg>有道云笔记</a></li>-->
<!--            <li><a rel="nofollow" href="https://naotu.baidu.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wode"></use></svg>百度脑图 </a></li>-->
<!--            <li><a rel="nofollow" href="https://docs.qq.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wode"></use></svg>腾讯文档</a></li>-->
<!--            <li><a rel="nofollow" href="https://new.qq.com/ch/ent/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wode"></use></svg>腾讯娱乐</a></li>-->
<!--            <li><a rel="nofollow" href="https://ent.163.com/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wangyi"></use></svg>网易娱乐</a></li>-->
<!--            <li><a rel="nofollow" href="https://ent.sina.com.cn/" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wode"></use></svg>新浪娱乐</a></li>-->
<!--            <li><a rel="nofollow" href="https://ent.huanqiu.com" target="_blank"><svg class="icon" aria-hidden="true"><use xlink:href="#icon-wode"></use></svg>环球娱乐</a></li>-->
<!--        </ul>-->
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
            <div class="shlogo" style="background: url(icon/logojiu.svg) no-repeat center/cover;"></div>
            <div class="sou">
                <form action="" method="post" target="_self">
                   <?php 
                   if ($t=="b"){
                     echo'<div class="lg" style="background: url(icon/g.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=\';"></div>';
                   }else{
                    //上面知道把默认谷歌改成百度，这里不知道改吗大佬们？。。
                     echo'<div class="lg" style="background: url(icon/baidu.svg) no-repeat center/cover;" onclick="window.location.href=\'?t=b\';"></div>';
                   }
                    ?>
                    <!--input class="t" type="text" value="" name="t" hidden-->
                    <input class="wd" type="text" placeholder="请输入搜索内容" name="q" x-webkit-speech lang="zh-CN" autocomplete="off">
                    <button><svg class="icon" style=" width: 21px; height: 21px; opacity: 0.5;" aria-hidden="true"><use xlink:href="#icon-sousuo"></use></svg></button>
                </form>
                <div id="word"></div>
            </div>
        </div>
        <link rel="stylesheet" href="icon/icon/font_css/iconfont.css"> <?php //github  icon tu图标等  icon/icon/font_css/demo_index.html?>

<script type="text/javascript">
     createSnow('src/', 60);
</script>

        <!-- 鼠标部分   只有css nei rong     鼠标部分-->
        <!--网易云外链部分 网易云部分 -->
        <div class="tooltips">
            <span>
                <?php

                echo "https://music.163.com/outchain/player?type=0&id=5088694682&auto=0&height=430"
                ?>
                 <iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=450 height=520 src="https://music.163.com/outchain/player?type=0&id=5088694682&auto=0&height=430">
                 </iframe>
           </span>
        </div>
        <?php /*   下面这条原来的已注释
<iframe src="https://music.163.com/outchain/player?type=0&id=3052064923&auto=0&height=280" width=430 height="500" frameborder="no" marginwidth="0" marginheight="0"></iframe>
//<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=450 height=86 src="//music.163.com/outchain/player?type=2&id=414706265&auto=0&height=66"></iframe>  */?>



        <div class="foot" style="height: 40px;">
       <?php /*ef="https://blog.5iux.cn/" style="color: #777;">博客</a> |
          <a href="https://hao.5iux.cn/" style="color: #777;">设计导航</a> | 
          <a href="https://dyartstyle.com/" style="color: #777;">设计资讯</a> | 
          <a href="https://wat.dyartstyle.com/" style="color: #777;">吾爱淘</a> | 
          <a href="https://github.com/5iux/sou/" style="color: #777;">Github</a><br> */?>
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










