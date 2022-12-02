<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Session;
use Closure;
use Illuminate\Http\Request;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // echo "hy sns";
        $path=$request->path();
        //  dd(session::get('user'));
        if(($path=='auth/login' || $path=='auth/register') && session::get('user')){

            return redirect('/admin/display');
        }
        return $next($request);
    }
}
