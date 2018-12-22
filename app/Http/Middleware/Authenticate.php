<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    // 中间件名称为auth
    protected $redirectTo = '';

    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        return route('login');
    }

    protected function authenticate($request, array $guards)
    {   
        // Admin控制器传过来的参数 admin 
        // $guards是获取中间件传过来的参数
        if (empty($guards)) {
            $guards = [null];
        }

        foreach ($guards as $guard) {
            if ($this->auth->guard($guard)->check()) {
                // dd('来到了check');die;
                return $this->auth->shouldUse($guard);
            }
        }

        // 这里我们以 guards 传入的第一个参数为准选择跳转到的登录页面
        $guard = $guards[0];
        // dd($guard);die;
        if ($guard == 'admin') {

            // 访问get的showlogin  
            $this->redirectTo = route('admin.login');
        }

        throw new AuthenticationException(
            'Unauthenticated.', $guards, $this->redirectTo ? : $this->redirectTo($request)
        );
    }
}