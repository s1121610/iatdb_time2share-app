<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckIfBanned
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
        if(Auth::user()->banned === false){
            return $next($request);
        }else{
            echo "Uw account is geblokkeerd";
        }
        // if(Auth::user() !== null){
        //     if(Auth::user()->banned === false){
        //         return $next($request);
        //     }else{
        //         echo "Uw account is geblokkeerd";
        //     }
        // }
        // return $next($request);


    }
}
