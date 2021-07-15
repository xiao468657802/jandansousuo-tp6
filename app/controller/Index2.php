<?php


namespace app\controller;


use app\BaseController;
// extends BaseController  继承基础控制器  $this->request->action() d当前方法名 $this->app->getBasePath() 当前实际路径
class Index2    //extends BaseController
{
    public function index()
    {

    return 'index2,方法名'.$this->request->action().', d当前实际路径 '.$this->app->getBasePath();
    //http://192.168.133.131:803/index2/index   //
        //index2,方法名index,d当前实际路径/www/wwwroot/tp66.cn/tp/app/
}  //http://192.168.133.131:803/index.php/index2/
    // index 控制器是默认的
    public function hello(){
        return 'hello';
    } //http://192.168.133.131:803/index.php/index2/hello
    public  function index2($value = ''){
        return 'Index2'."$value";
    }  //http://192.168.133.131:803/index.php/index2/index2
    // 传值写法      打印内容  Index2wordl
    //http://192.168.133.131:803/index.php/index2/index2/value/wordl
    //c重写后的URL
    //http://192.168.133.131:803/index2/index2/value/wordl
    public function arrayOutput(){
        $data= ['a'=>1,'b'=>2,'c'=>3];
       // halt('中断输出'); //^ "中断输出"
        return json($data);  //{"a":1,"b":2,"c":3}
    }

}