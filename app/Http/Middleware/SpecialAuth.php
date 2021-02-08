<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class SpecialAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    
     /*
    public function handle(Request $request, Closure $next)
    {
        error_log('SpecialAuth init');
        //if($request->session()->has('admin')) {
        if (Session::has('admin')) {
            error_log('true');
            
            return [
                'auth' => true
            ];
            return $next($request);
        } else {
            error_log('false');
            return response()->json(['message' => 'Not authorized'], 401);
        }
    }*/
}
