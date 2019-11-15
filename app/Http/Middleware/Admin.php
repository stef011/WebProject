<?php

namespace App\Http\Middleware;

use Auth;

use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::guest())
        {
            return redirect(route('login'))->with('info', 'You need to be connected');
        }

        if(Auth::user()->role_id > 1)
        {
            return redirect(route('home'))->with('info', 'Access denied');
        }
        return $next($request);
    }
}
