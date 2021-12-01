<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LPMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //check user punya role, LP atau tidak
        if(auth()->user->role == 'lp'){
            return $next($request);
        }

        //abort(403);
        return redirect()->('/home');
    }
}
