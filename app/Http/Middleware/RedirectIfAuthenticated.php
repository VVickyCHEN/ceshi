<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
	// 这个在kemel中命名为guest
    public function handle($request, Closure $next, $guard = null)
    {
        // if (Auth::guard($guard)->check()) {
        //     return redirect('/home');
        // }

        // 另外，我们在中间件 guest 中也传入了 admin 参数，表示判断后台是否登录。为此，我们还要修改 guest 中间件对应类 RedirectIfAuthenticated 的处理方法 handle，当传入 guard 是 admin 时，跳转到后台主页：
        if (Auth::guard($guard)->check()) {
	        if ($guard == 'admin') {
	            return redirect('/admin');
	        }
	        return redirect('/home');
	    }

        return $next($request);
    }
}
