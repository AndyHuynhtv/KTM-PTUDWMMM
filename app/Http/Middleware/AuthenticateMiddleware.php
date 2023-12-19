<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AuthenticateMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        if (!Auth::check()) {
            // Nếu người dùng chưa đăng nhập, chuyển hướng về trang đăng nhập
            return redirect('/login');
        }

        // Nếu đã đăng nhập, cho phép truy cập tiếp theo
        return $next($request);

        // Nếu không có vai trò hoặc không đủ quyền, chuyển hướng về trang /login

    }
}
