<?php

namespace App\Http\Middleware;

use Closure;

class IsDietician
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
        if (auth()->User()->is_patient == 0){
            return $next($request);
        }
        return redirect('dietician.home')->with('error','You have no dietician access');
    }
}

