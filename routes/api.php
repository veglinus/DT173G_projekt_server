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
    //$request->offsetUnset('api_token');
    $data = $request->except('api_token');
    $result = DB::table('courses')
    ->insert([ $data->all() ]);
    return $result;
})->middleware('api_token');
Route::delete('/courses', function(Request $request) {
    $result = DB::table('courses')
    ->where('id', '=', $request->only(['id']))
    ->delete();
    return $result;

})->middleware('api_token');
Route::put('/courses', function(Request $request) {
    $request->offsetUnset('api_token');
    $index = $request->only(['index']);
    $what = $request->only(['what']);
    $newvalue = $request->only(['newvalue']);
    $result = DB::table('courses')
    ->where('id', '=', $index['index'])
    ->update([$what['what'] => $newvalue['newvalue']]);
    return $result;
})->middleware('api_token');



/* JOBS */

Route::get('/jobs', function() {
    $data = DB::table('jobs')->get();
    return $data;
});
Route::post('/jobs', function(Request $request) {
    $request->offsetUnset('api_token');
    $result = DB::table('jobs')
    ->insert([ $request->all() ]);
    return $result;
})->middleware('api_token');
Route::delete('/jobs', function(Request $request) {
    $result = DB::table('jobs')
    ->where('id', '=', $request->only(['id']))
    ->delete();
    return $result;
})->middleware('api_token');
Route::put('/jobs', function(Request $request) {
    $request->offsetUnset('api_token');
    $index = $request->only(['index']);
    $what = $request->only(['what']);
    $newvalue = $request->only(['newvalue']);
    $result = DB::table('jobs')
    ->where('id', '=', $index['index'])
    ->update([$what['what'] => $newvalue['newvalue']]);
    return $result;
})->middleware('api_token');



/* SITES */

Route::get('/sites', function() {
    $data = DB::table('sites')->get();
    return $data;
});
Route::post('/sites', function(Request $request) {
    $request->offsetUnset('api_token');
    $result = DB::table('sites')
    ->insert([ $request->all() ]);
    return $result;
})->middleware('api_token');
Route::delete('/sites', function(Request $request) {
    $result = DB::table('sites')
    ->where('id', '=', $request->only(['id']))
    ->delete();
    return $result;
})->middleware('api_token');
Route::put('/sites', function(Request $request) {
    $request->offsetUnset('api_token');
    $index = $request->only(['index']);
    $what = $request->only(['what']);
    $newvalue = $request->only(['newvalue']);
    $result = DB::table('sites')
    ->where('id', '=', $index['index'])
    ->update([$what['what'] => $newvalue['newvalue']]);
    return $result;
});



Route::get('/example/{api_token}', function (Request $request) {
    return true;
})->middleware('api_token');

