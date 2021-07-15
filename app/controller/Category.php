<?php


namespace app\controller;


use \think\facade\Request;
use \think\facade\Db;

class Category
{
    public function index(){
    $ret = \think\facade\Db::name('category')->select();
    //dump($ret);
        return json(['code'=>0,'msg'=>'ok','data'=>$ret]);
    }
    public function save(){
        $data = Request::instance()->param();
       // dump($data);
        $params['title'] = $data['title'];
        $ret= Db::name('category')->insert($params);
        if($ret){
            return json(['code'=>0,'status'=>0,'msg'=>'添加成功','data'=>'']); //pa判断上面ret执行成功返回
        }
        return json(['code'=>0,'status'=>1,'msg'=>'error','data'=>'']);
    }
    public function del(){
        $data = Request::instance()->param();
        // dump($data);
        //$params['title'] = $data['title'];
        $ret= Db::name('category')->where('id',$data['id'])->delete();
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
        $ret= Db::name('category')->where('id',$data['id'])->update(['title'=>$data['title']]);
        if($ret){
            return json(['code'=>0,'status'=>0,'msg'=>'编辑成功','data'=>'']); //pa判断上面ret执行成功返回
        }
        return json(['code'=>0,'status'=>1,'msg'=>'error','data'=>'']);
    }
}