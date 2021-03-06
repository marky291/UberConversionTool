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
        if (auth()->user()->level > 0 && !app()->environment('local')) {
            return redirect()->route('overview')->with(['middleware' => 'You cannot convert items from a GM Account!']);
        }

        return $next($request);
    }
}
