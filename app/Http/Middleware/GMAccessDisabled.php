<?php

namespace App\Http\Middleware;

use Closure;

class GMAccessDisabled
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
        if (auth()->user()->level > 0) {
            redirect()->route('overview')->withErrors('You are not allowed to access this resource as a GM');
        }

        return $next($request);
    }
}
