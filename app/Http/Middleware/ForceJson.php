<?php
// Source: https://medium.com/@tsubasakondo_36683/make-laravel-api-only-2da47a0f92b7

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;

class ForceJson
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');
        return $next($request);
    }
}