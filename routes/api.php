<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', function() {

    // https://gist.github.com/jeffochoa/540190d881a7e0bc76e9bc234f2c6ff2
    $routes = collect(Route::getRoutes())->map(function ($route) {
        return [
            'host'   => $route->domain(),
            'method' => implode('|', $route->methods()),
            'uri'    => $route->uri(),
            'name'   => $route->getName(),
            'action' => $route->getActionName(),
        ];
    });
    //$routes = Route::getRoutes();
    return $routes;
});


// TODO: Separate into controllers


/* COURSES */

Route::get('/courses', function() {
    $data = DB::table('courses')->get();
    return $data;
});
Route::post('/courses', function(Request $request) {
    $result = DB::table('courses')
    ->insert([ $request->all() ]);
    return $result;
})->middleware('auth');
Route::delete('/courses', function(Request $request) {
    $result = DB::table('courses')
    ->where('id', '=', $request->only(['id']))
    ->delete();
    return $result;
})->middleware('auth');
Route::put('/courses', function(Request $request) {
    $index = $request->only(['index']);
    $what = $request->only(['what']);
    $newvalue = $request->only(['newvalue']);
    $result = DB::table('courses')
    ->where('id', '=', $index['index'])
    ->update([$what['what'] => $newvalue['newvalue']]);
    return $result;
})->middleware('auth');



/* JOBS */

Route::get('/jobs', function() {
    $data = DB::table('jobs')->get();
    return $data;
});
Route::post('/jobs', function(Request $request) {
    $result = DB::table('jobs')
    ->insert([ $request->all() ]);
    return $result;
});
Route::delete('/jobs', function(Request $request) {
    $result = DB::table('jobs')
    ->where('id', '=', $request->only(['id']))
    ->delete();
    return $result;
});
Route::put('/jobs', function(Request $request) {
    $index = $request->only(['index']);
    $what = $request->only(['what']);
    $newvalue = $request->only(['newvalue']);
    $result = DB::table('jobs')
    ->where('id', '=', $index['index'])
    ->update([$what['what'] => $newvalue['newvalue']]);
    return $result;
});



/* SITES */

Route::get('/sites', function() {
    $data = DB::table('sites')->get();
    return $data;
});
Route::post('/sites', function(Request $request) {
    $result = DB::table('sites')
    ->insert([ $request->all() ]);
    return $result;
});
Route::delete('/sites', function(Request $request) {
    $result = DB::table('sites')
    ->where('id', '=', $request->only(['id']))
    ->delete();
    return $result;
});
Route::put('/sites', function(Request $request) {
    $index = $request->only(['index']);
    $what = $request->only(['what']);
    $newvalue = $request->only(['newvalue']);
    $result = DB::table('sites')
    ->where('id', '=', $index['index'])
    ->update([$what['what'] => $newvalue['newvalue']]);
    return $result;
});


function authenticate() {
    $user = Auth::user();

    if ($user === 'admin') {
        return true;
    } else {
        return false;
    }
}


/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
