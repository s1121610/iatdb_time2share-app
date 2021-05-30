<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

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
        // if(auth()->user() !== null){
            if (auth()->user()->banned === true) {
                auth()->logout();
                $message = 'Uw account is geblokkeerd. Neem contact op met de gebruiker.';
                return redirect()->route('login')->withMessage($message);
            }
        //}       
        return $next($request);
    }
}
