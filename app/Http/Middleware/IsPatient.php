<?php

namespace App\Http\Middleware;

use Closure;

class IsPatient
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
        if (auth()->User()->is_patient == 1){
            return $next($request);
        }
        return redirect('patient.home')->with('error','You have no dietician access');
    }
}
