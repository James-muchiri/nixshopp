<?php

namespace App\Http\Middleware;

use Closure;

class EUsersMiddleware
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
        if(Auth::guard('e-users')->user('email')){

            return $next($request);
        }else{

            return redirect()->route('getadminSignIn');
        }
    }
}
