<?php

namespace App\Http\Middleware;

use Closure;

class checkrol
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$positions)
    {
        if(in_array($request->user()->position,$positions)){
            return $next($request);

        }
        return redirect('/login');
    }

}
