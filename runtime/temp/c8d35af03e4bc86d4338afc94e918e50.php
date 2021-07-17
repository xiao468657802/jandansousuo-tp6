<?php /*a:1:{s:42:"/www/wwwroot/tp6.com/view/token/index.html";i:1626442160;}*/ ?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <meta name="referrer" content="no-referrer" />
    <meta name="theme-color" content="#ffffff">

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="full-screen" content="yes"><!--UC强制全屏-->
    <meta name="browsermode" content="application"><!--UC应用模式-->
    <meta name="x5-fullscreen" content="true"><!--QQ强制全屏-->
    <meta name="x5-page-mode" content="app"><!--QQ应用模式-->
    <title>简单搜索</title>

</head>

<body>
<form action="/home/yanz" method="post">
<ul>
    <li>
    <div class="layui-form" lay-filter="">
        <div class="layui-form-item" >
            <label class="layui-form-label"> toekn</label>
            <div class="layui-input-inline">
                <input type="text" name="__token__" value="<?php echo token(); ?>" size="80">
            </div>
        </div>
    </div>
    <button class="layui-btn" lay-submit lay-filter="resmypass">重置密码</button>
    </li>
    </ul>
</form>

</body>
</html>










