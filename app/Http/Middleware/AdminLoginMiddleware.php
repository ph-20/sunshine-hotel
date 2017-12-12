<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class AdminLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user()->role == 1 && Auth::user()->active == 0) {
            return $next($request);
        } elseif (Auth::user()->active == 1) {
            return redirect()->route('adminlogin')->with('message', 'Tài khoản bạn đã bị khóa');
        }
    }
}
