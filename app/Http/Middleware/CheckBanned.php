<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CheckBanned
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
        if(Auth::user() !== null){
            if (Auth::user()->banned === true) {
                auth()->logout();
                $message = 'Uw account is geblokkeerd. Neem contact op met de gebruiker.';
                return redirect()->route('login')->withMessage($message);
            }
            else{
                return $next($request);
            }
            return $next($request);
        }       
    }
}
