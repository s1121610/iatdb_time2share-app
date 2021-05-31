<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // if(Auth::user()->banned === false){
        //     return $next($request);
        // }else{
        //     echo "Uw account is geblokkeerd";
        // }
        if(Auth::user() !== null){
            if(Auth::user()->banned === false){
                return $next($request);
            }else{
                echo "Uw account is geblokkeerd";
            }
        }
        return $next($request);


    }
}
