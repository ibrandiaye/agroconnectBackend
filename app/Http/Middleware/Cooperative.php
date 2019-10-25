<?php

namespace App\Http\Middleware;

use Closure;

class Cooperative
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
        if(auth()->user()->role_id==4 ){
            return $next($request);

        }
        return redirect('/')->with('error','Vous n\'êtes pas autorisé');
    }
}
