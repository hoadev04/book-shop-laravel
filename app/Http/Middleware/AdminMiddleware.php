<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()) {
            // Nếu chưa đăng nhập, chuyển hướng đến trang đăng nhập
            return redirect()->route('login');
        }
        if(Auth::user()->role == 'admin'){
            return $next($request);
        }else{
            return Redirect()->route('home')->with('ok', 'Bạn đã đăng nhập thành công');
        }
    }
}
