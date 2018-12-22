<?php

namespace App\Http\Middleware;

use Closure;

class Checkrole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next ,$role)
    {   
        dd($role);die;
        if (! $request->user()->hasRole($role)) {
            return route('login');
        }
        return $next($request);
    }
}
