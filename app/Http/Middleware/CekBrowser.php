<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CekBrowser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        $browser = 'Chrome';

        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape')) {
            $browser = 'Netscape';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox')) {
            $browser = 'Firefox';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome')) {
            $browser = 'Chrome';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera')) {
            $browser = 'Opera';
        } else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
            $browser = 'Internet Explorer';
        }

       
        if ($browser == 'Firefox') {
            return redirect('/');
        }

        return $next($request);
    }
}