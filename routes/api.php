<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
    return ['text' => 'test endpoint'];
});

Route::post('testpost', function (Request $request) {
    $data = $request->all();
    return response()->json($data);
});


Route::get('/courses', function() {
    $data = DB::table('courses')->get();
    return $data;
});

Route::get('/jobs', function() {
    $data = DB::table('jobs')->get();
    return $data;
});

Route::get('/sites', function() {
    $data = DB::table('sites')->get();
    return $data;
});

// Route::apiResource('categories', 'CategoriesController');

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
