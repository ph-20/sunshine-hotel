<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class CustomerLoginMiddleware
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
        if (Auth::user()->role == 0 && Auth::user()->active == 0) {
            return $next($request);
        } else {
            if (Auth::user()->role == 1) {
                return redirect()->route('rooms.index')->with('message', 'Hệ Thống Tự Động Chuyển Bạn Về Trang Với
                Quyền Quản Lý Tương Ứng');
            } elseif (Auth::user()->active == 1) {
                return redirect()->route('adminlogin')->with('message', 'Tài khoản bạn đã bị khóa');
            }
        }
    }
}