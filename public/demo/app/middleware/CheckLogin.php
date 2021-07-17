<?php
declare (strict_types = 1);

namespace app\middleware;

class CheckLogin
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        if (!session('?admin_id')) {
            //  未登录重定向到登陆页面
            return redirect('/login');
        }

        // 已登录继续执行请求
        return $next($request);
    }
}
