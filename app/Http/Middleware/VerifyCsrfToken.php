<?php

namespace Enfa\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use Closure;
use Illuminate\Session\TokenMismatchException;
use Cookie;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/landing',
    ];
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     *
     * @throws \Illuminate\Session\TokenMismatchException
     */
    public function handle($request, Closure $next)
    {
        if (
            $this->isReading($request) ||
            $this->runningUnitTests() ||
            $this->inExceptArray($request) ||
            $this->tokensMatch($request)
        ) {
            return tap($next($request), function ($response) use ($request) {
                if ($this->addHttpCookie) {
                    $this->addCookieToResponse($request, $response);
                }
            });
        }

        throw new TokenMismatchException;
    }
/*
    public function handle($request, Closure $next)
    {
    if (Session::check())
            {
                if (Session::getUser()->roles()->first()->slug == 'admin' ||
                    Session::getUser()->roles()->first()->slug == 'superuser' )
                {
                    return $next($request);
                }
            }

            return redirect('/login')
                ->with(['error' => "You do not have the permission to enter this site. Please login with correct user."]);
    }
    */

/**
 * Add the CSRF token to the response cookies.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  \Symfony\Component\HttpFoundation\Response  $response
 * @return \Symfony\Component\HttpFoundation\Response
 */
protected function addCookieToResponse($request, $response)
{
    $config = config('session');
    

  /*  $response->headers->setCookie(
        new Cookie(
            'XSRF-TOKEN', $request->session()->token(), $this->availableAt(60 * $config['lifetime']),
            $config['path'], $config['domain'], $config['secure'], false, false, $config['same_site'] ?? null
        )
    );


    return $response;
*/
}


}
