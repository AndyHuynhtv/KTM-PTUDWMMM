<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class checklogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check())
        {
            if(Auth::user()->roles_id ==1 || Auth::user()->roles_id ==2)
            {
                return $next($request);
            }
            return redirect()->route('index')->with('error','Không được phép');
        }
        return redirect()->route('index')->with('error','Tài khoản hoặc mật khẩu không đúng');

    }
}
