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
        if (Auth::check()) {
            $user = Auth::user();
            if ($user->role == 1) {
                return $next($request);
            } else {
                return redirect()->route('adminlogin')->with('message', 'Bạn phải có quyền Admin để đăng nhập');
            }
        } else {
            return redirect()->route('adminlogin');
        }
        return $next($request);
    }
}
