<?php


namespace app\controller;

use app\model\User;

use think\facade\Db;
use think\facade\Request;
use think\facade\View;

function className($data,$dataa){
    switch ($dataa){
        case 10:
            $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'Page'])
            ;break;
        case 1:
            $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'视频媒体'])
            ;break;
        case 2:
            $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'邮箱'])
            ;break;
        case 3:
            $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'社交资讯'])
            ;break;
        case 4:
            $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'购物'])
            ;break;
        case 5: $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'设计视觉'])
        ;break;
        case 6:  $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'搜索引擎'])
        ;break;
        case 7:  $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'工具'])
        ;break;
        case 8:  $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'开发'])
        ;break;
        case 9: $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'效率分类'])
        ;break;
        case 11:  $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'新增'])
        ;break;
        default:
            $upret = Db::name('ss_links')->where('uid',$data['uid'])->update(['class_name'=>'其他']);   break;
    }
}

class links
{
    public function index(){

        $ret = Db::name('ss_links')->select();
        //dump($ret);


        return json(['code'=>0,'msg'=>'ok','data'=>$ret]);//
        //return $this->fetch('index/index');

    }

    public function save(){
        $data = Request::instance()->param();
       // dump($data);

//        $params['links'] =$data['links'];                        1 方法
//        $params['xlinksico'] = $data['xlinksico'];
//        $params['linkname'] = $data['linkname'];

        $params = ['links'=>$data['links'],'xlinksico'=>$data['xlinksico'],'linkname'=>$data['linkname'],'uid'=>$data['uid']];  //2 fang法
        $ret= Db::name('ss_links')->insert($params);
//        var_dump($dataa);
////        print_r($dataa);
        $dataa = $data['uid'];
        className($data,$dataa);

        if($ret){
            return json(['code'=>0,'status'=>0,'msg'=>'添加成功','data'=>'']); //pa判断上面ret执行成功返回
        }
        return json(['code'=>0,'status'=>1,'msg'=>'error','data'=>'']);
    }
    public function del(){
        $data = Request::instance()->param();
        // dump($data);
        //$params['title'] = $data['title'];
        $ret= Db::name('ss_links')->where('id',$data['id'])->delete();
        if($ret){
            return json(['code'=>0,'status'=>0,'msg'=>'删除成功','data'=>'']); //pa判断上面ret执行成功返回
        }
        return json(['code'=>0,'status'=>1,'msg'=>'error','data'=>'']);
    }
    public function update()
    {
        $data = Request::instance()->param();
        // dump($data);
        //$params['title'] = $data['title'];
        $ret= Db::name('ss_links')->where('id',$data['id'])->update(['links'=>$data['links'],'xlinksico'=>$data['xlinksico'],'linkname'=>$data['linkname'],'uid'=>$data['uid']]);
        $dataa = $data['uid'];
        className($data,$dataa);
        if($ret){
            return json(['code'=>0,'status'=>0,'msg'=>'编辑成功','data'=>'']); //pa判断上面ret执行成功返回
        }
        return json(['code'=>0,'status'=>1,'msg'=>'error','data'=>'']);
    }

    public function musicselect()
    {

        $ret = Db::name('music_gedan')->select();
        //dump($ret);
        return json(['code'=>0,'msg'=>'ok','data'=>$ret]);//
        //return $this->fetch('index/index');
    }

    public function musicinsert(){
        $data = Request::instance()->param();

        $params = ['music'=>$data['music'],'moren_uid'=>$data['moren_uid'],'remarks'=>$data['remarks']];  //2 fang法
        $ret= Db::name('music_gedan')->insert($params);
        if($ret){
            return json(['code'=>0,'status'=>0,'msg'=>'添加成功','data'=>'']); //pa判断上面ret执行成功返回
        }
        return json(['code'=>0,'status'=>1,'msg'=>'error','data'=>'']);
    }
    public function musicdel(){
        $data = Request::instance()->param();
        // dump($data);
        //$params['title'] = $data['title'];
        $ret= Db::name('music_gedan')->where('id',$data['id'])->delete();
        if($ret){
            return json(['code'=>0,'status'=>0,'msg'=>'删除成功','data'=>'']); //pa判断上面ret执行成功返回
        }
        return json(['code'=>0,'status'=>1,'msg'=>'error','data'=>'']);
    }
    public function musicupdate()
    {
        $data = Request::instance()->param();
        // dump($data);
        //$params['title'] = $data['title'];
        $ret= Db::name('music_gedan')->where('id',$data['id'])->update(['music'=>$data['music'],'moren_uid'=>$data['moren_uid'],'remarks'=>$data['remarks']]);
        if($ret){
            return json(['code'=>0,'status'=>0,'msg'=>'编辑成功','data'=>'']); //pa判断上面ret执行成功返回
        }
        return json(['code'=>0,'status'=>1,'msg'=>'error','data'=>'']);
    }


}