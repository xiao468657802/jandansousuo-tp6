<?php
namespace app\controller;

use app\BaseController;

class Login extends BaseController
{
    public function index()
    {
    	//  已登录访问登录页面重定向到首页
    	if (session('?admin_id')) return redirect('/index');

    	if ($this->request->isPost()) {
    		// 处理登陆请求
    		// 实际应从数据查询 为了演示就写死了
    		$username = input('post.username', '', 'trim');
    		$password = input('post.password', '', 'trim');
    		if ($username == 'admin' && $password == '123456') {
    			session('admin_id', 1);
    			return redirect('/index');//首页
    		} else {
    			return '<br>用户名或密码错误&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="">返回登陆页面</a>';
    		}
    	} else {
    		// 登录页面显示
    		return view();	
    	}
    }
}
