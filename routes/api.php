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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data/', 'App\Http\Controllers\postController@index')->name('api.index');
Route::post('/data/id', 'App\Http\Controllers\postController@show')->name('api.show');
Route::get('/ayuda/', 'App\Http\Controllers\postController@ayuda')->name('api.ayuda');