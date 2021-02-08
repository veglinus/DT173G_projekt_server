<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiToken
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
        error_log('handling, key on server is: ' . env('API_KEY'));
        error_log('token sent is: ' . $request->api_token);
        if ($request->api_token != env('API_KEY')) {
            //error_log($request->api_token);
            return response()->json('Fel API-token', 401);
        } else {
            return $next($request);
        } 
    
        
    }
}
