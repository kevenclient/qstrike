<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PreventBackHistory
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        $response->headers->add([
            'Cache-Control' => 'no-cache, no-store, max-age=0, must-revalidate,',
            'Pragma' => 'no-cache',
            'Expires' => 'Sat, 26 Jul 1997 05:00:00 GMT',
        ]);

        return $response;
    }
}
