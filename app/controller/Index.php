<?php
namespace app\controller;

use app\BaseController;
use think\facade\Db;
use think\facade\View;

class Index extends BaseController
{
    public function index()
    {
      //return '<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px;} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:) </h1><p> ThinkPHP V' . \think\facade\App::version() . '<br/><span style="font-size:30px;">14载初心不改 - 你值得信赖的PHP框架</span></p><span style="font-size:25px;">[ V6.0 版本由 <a href="https://www.yisu.com/" target="yisu">亿速云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="https://tajs.qq.com/stats?sId=64890268" charset="UTF-8"></script><script type="text/javascript" src="https://e.topthink.com/Public/static/client.js"></script><think id="ee9b1aa918103c4fc"></think>';

        $list = Db::name('ss_links')->select();
        $page = Db::name('ss_links')->where('uid','=','10')->select();
        $shipin = Db::name('ss_links')->where('uid','=','1')->select();  //视频媒体
        $email = Db::name('ss_links')->where('uid','=','2')->select();  //邮箱
        $emsg = Db::name('ss_links')->where('uid','=','3')->select();    //社交资讯
        $gouwuche = Db::name('ss_links')->where('uid','=','4')->select();  //购物
        $sheji = Db::name('ss_links')->where('uid','=','5')->select();  //设计视觉
        $sousuo = Db::name('ss_links')->where('uid','=','6')->select();  //搜索引擎
        $tool= Db::name('ss_links')->where('uid','=','7')->select();  //工具
        $kongzhitai = Db::name('ss_links')->where('uid','=','8')->select();  // 开发
        $feedly = Db::name('ss_links')->where('uid','=','9')->select(); // 效率分类
        $new1 = Db::name('ss_links')->where('uid','=','11')->select();  // 新增
        $other = Db::name('ss_links')->where('uid','=','12')->select();  // 其他或新增
        $gedan_id = Db::name('music_gedan')->where('moren_uid','=','1')->select(); // 歌单选项 ID 为 1
        return View::fetch('/index',[
            'list' => $list
            ,'page' => $page
            ,'shipin' =>$shipin
            ,'email' => $email
            ,'emsg' => $emsg
            ,'gouwuche' => $gouwuche
            ,'sheji' => $sheji
            ,'sousuo' => $sousuo
            ,'tool' => $tool
            ,'kongzhitai' => $kongzhitai
            ,'feedly' => $feedly
            ,'other' => $other
            ,'new1' => $new1
            ,'gedan_id' => $gedan_id
        ]);
        // return "<script>location.href = './index'</script>";

    }
    public function fenlei(){

        $page = Db::name('ss_links')->where('uid','=','0')->select();
        return View::fetch('/index',[
            'page' => $page

        ]);
      //  return json($lista);
    }
    public function wea(){
        /*
作者:D.Young
主页：https://blog.5iux.cn/
github：https://github.com/5iux/sou
日期：2020-05-19
版权所有，请勿删除

使用前请注意务必设置好白名单和apikey
本天气插件为申请地址：和风天气-https://dev.heweather.com/
*/
        header('Content-Type:application/json; charset=utf-8');
//防跨域调用
        $allow_origin = array(
            //域名白名单 改成自己的
            'http://192.168.133.131',
            'https://www.5iux.cn'
        );
        header('Access-Control-Allow-Origin:'.$allow_origin);
        header('Access-Control-Allow-Methods:POST');
        header('Access-Control-Allow-Headers:x-requested-with,content-type');
//获取当前ip
        $address=$_SERVER["REMOTE_ADDR"];
//你的申请的apikey
        $key="1c50fcf03a8c41c6855daa50ef069131";


        $jsonlist = file_get_contents("https://free-api.heweather.net/s6/weather/?location=".$address."&key=".$key);
        echo $_GET["callback"].$jsonlist;
    }


//    public function hello($name = 'ThinkPHP6')
//    {
//
//        $this->controllerName;
//        return 'hello,' . $name;
//    }
//    public function menu()
//    {
//        App::getRootPath();
//        echo App::getRootPath();
//        $data = [
//            ['title' => "主页一", 'name'=>'home','icon' => 'layui-icon-home', 'jump' => 'home/homepage1'],
//            ['title' => "主页二", 'name'=>'cateegory','icon' => 'layui-icon-home', 'jump' => 'home/homepage2']
//
//        ];
//        return json(['code' => 0, 'msg' => 'ok', 'data' => $data]);
//    }


} // class end
