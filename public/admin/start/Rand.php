<?php
   function index($code = '',$size='4', $width = 129, $height = 38)
    {
        if ($size <= 0 || empty($size) || !isset($size)) {
            $size = 4;
        }

//验证码内容
        $code_array = array(
            0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
        );

        $random_keys = array();
        for ($i = 0; $i < $size; $i++) {
            $keys = array_rand($code_array, 1);

            array_push($random_keys, $code_array[$keys]);
        }

//数组转成字符串
        $verification_code = implode('', $random_keys);

        $code = $verification_code;
        if (empty($code) || !isset($code)) {
            return false;
        }
//    define('ROOT_PATH','/public');
//    //判断文件夹是否存在，不存在则创建
//    $dir = ROOT_PATH . '/upload/ver_code_img';
//    if (!is_dir($dir)) {
//        mkdir($dir, 0777, true);
//    }

//验证码图片保存路径，文件名称
        $file_name = 'randimg_id_' . '1' . '.png';
//域名返回
        $domain_name = 'randimg_id_' . '1' . '.png';

        $img = imagecreatetruecolor($width, $height);
        $black = imagecolorallocate($img, 0x00, 0x00, 0x00);
        $green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
        $white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
        imagefill($img, 0, 0, $white);

        imagestring($img, 5, 22, 12, $code, $black);
//加入噪点干扰
        for ($i = 0; $i < 100; $i++) {
            imagesetpixel($img, rand(0, $width), rand(0, $width), $black);  //imagesetpixel — 画一个单一像素，语法: bool imagesetpixel ( resource $image , int $x , int $y , int $color )
            imagesetpixel($img, rand(0, $width), rand(0, $width), $green);
        }

//输出验证码
//        header("content-type: image/png");
        imagepng($img, $file_name);  //保存图片
       imagepng($img);
        imagedestroy($img);  //图像处理完成后，使用 imagedestroy() 指令销毁图像资源以释放内存，虽然该函数不是必须的，但使用它是一个好习惯。

        //return $domain_name;
       // echo "<img src='/randimg_id_1.png' alt='验证码'>";

    }
index();
?>
<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<div name="div1" id="div1"></div>-->
<!--<canvas id="c1"></canvas>-->
<!--<a href="javascript:void(0)" onclick="location.reload()">看不清?换一张</a>-->
<!--</body>-->
<!--</html>-->
<!--<script type="text/javascript">-->
<!---->
<!--    var w=120; //画布的宽-->
<!--    var h=30;  //画布的高-->
<!--    c1.width=w;-->
<!--    c1.height=h;-->
<!--    var ctx=c1.getContext('2d');-->
<!---->
<!--    //绘制随机的背景颜色---填充一个大的矩形-->
<!--    ctx.fillStyle=rc(180,230);-->
<!--    ctx.fillRect(0,0,w,h);-->
<!--    //绘制随机的文本--难点-->
<!--    ctx.textBaseline='top';-->
<!--    var pool='ABCDEFGHJKLMNPQRSTWXY3456789';-->
<!--    for(var i=0;i<4;i++){-->
<!--        var txt=pool[rn(0,pool.length)];-->
<!--        ctx.fillStyle=rc(80,180);-->
<!--        ctx.font=rn(10,20)+'px Arial';-->
<!--        var txtWidth=ctx.measureText(txt).width;-->
<!---->
<!--        ctx.save();-->
<!--        //平移原点+旋转画笔-->
<!--        ctx.translate(i*30+15,15);-->
<!--        ctx.rotate(rn(-15,15)*Math.PI/180);-->
<!--        ctx.fillText(txt,rn(-15,15-txtWidth),rn(-15,15-txtWidth));-->
<!--        ctx.restore();-->
<!--    }-->
<!--    //绘制6条随机干扰线-->
<!--    for(var i=0;i<6;i++){-->
<!--        ctx.beginPath();-->
<!--        ctx.moveTo(rn(0,w),rn(0,h));-->
<!--        ctx.lineTo(rn(0,w),rn(0,h));-->
<!--        ctx.strokeStyle=rc(80,180);-->
<!--        ctx.stroke();-->
<!--    }-->
<!--    //绘制50个干扰点--半径为1的圆-->
<!--    for(var i=0;i<50;i++){-->
<!--        ctx.beginPath();-->
<!--        ctx.arc(rn(0,w),rn(0,h),1,0,2*Math.PI);-->
<!--        ctx.fillStyle=rc(80,230);-->
<!--        ctx.fill();-->
<!--    }-->
<!--    // random number:生成指定范围内的随机整数-->
<!--    function rn(min,max) {-->
<!--        return Math.floor(Math.random()*(max-min)+min);-->
<!--    }-->
<!--    //random color:生成指定范围内的随机颜色-->
<!--    function rc(min,max) {-->
<!--        var r=rn(min,max);-->
<!--        var g=rn(min,max);-->
<!--        var b=rn(min,max);-->
<!--        return `rgb(${r},${g},${b})`;-->
<!--    }-->
<!---->
<!--</script>-->

