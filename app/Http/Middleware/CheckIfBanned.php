<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Auth;

class CheckIfBanned 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $requests
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->banned == false){
            return $next($request);
        }else{
            return redirect('/account/block/message');
        }
    }
}
