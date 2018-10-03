<?php

namespace Enfa\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;
class CheckOwner

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            return redirect('/userAll');
        }

        return $next($request);
    }
}
