<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckPage
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $restrictedId): Response
    {
        if ($request->route('employee')->active and $request->route('employee')->id != $restrictedId) {
            return $next($request);
        } else {
            return redirect()->route('home.restricted');
        }
    }
}
