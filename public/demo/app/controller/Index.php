<?php
namespace app\controller;

class Index extends Base
{
    public function index()
    {
        return '<br>这里是首页&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/index/logout">退出登陆</a>';
    }

    public function logout()
    {
        session('admin_id', null);//删除登陆状态

        return redirect('/login');//登录页面
    }
}
