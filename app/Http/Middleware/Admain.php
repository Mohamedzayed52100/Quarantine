<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Admain
{
    /**
     * Handle an incoming request.
     *logined
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(session('logined'))
        return $next($request);
    else {
            //return response('not allow', 401);   admain_go
            return redirect('/admain_login')->with(['message' =>'you are not logined in']);

        };
    }
}
