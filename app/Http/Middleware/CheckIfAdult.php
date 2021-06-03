<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIfAdult
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
        if(Auth::user()->name == "klaas"){
            return $next($request);
        }
        else{
            echo "Je moet ten minste 18 jaar oud zijn om deze pagina te bekijken";
            return redirect('/');
        }
    }
}
