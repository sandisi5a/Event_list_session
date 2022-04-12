<?php

namespace App\Http\Middleware;

use Closure;

class CheckPosition
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$position)
    {
        if($request->user()->position == $position){
            return $next($request);

        }
        return redirect('/');
    }
}
