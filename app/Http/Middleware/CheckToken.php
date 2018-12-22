<?php

namespace App\Http\Middleware;

use Closure;

class CheckToken
{
    // 在这个中间件中，我们只允许提供的 token 等于指定值 laravelacademy.org 的请求访问路由，否则，我们将跳转到 Laravel 学院网站：
    public function handle($request, Closure $next)
    {
        // 正如你所看到的，如果 token != 'laravelacademy.org'，中间件会返回一个 HTTP 重定向到 Laravel 学院；否则，请求会被传递下去。将请求往下传递可以通过调用回调函数 $next 并传入当前 $request。
        if($request->input('token') != 'vicky'){
            return redirect('login');
        }
        return $next($request);
    }
}
