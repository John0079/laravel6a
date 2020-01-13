<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', 'Auth\ApiController@register');
Route::post('/login', 'Auth\ApiController@login');
Route::post('/refresh', 'Auth\ApiController@refresh');
Route::post('/logout', 'Auth\ApiController@logout');


Route::get('/aa', function () {
    return '12aa3';
});