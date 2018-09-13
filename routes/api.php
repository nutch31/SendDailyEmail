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

Route::get('index', 'SendDailyEmail@index');
Route::post('sendEmail', 'SendDailyEmail@sendEmail');
Route::post('sendEmail2', 'SendDailyEmail@sendEmail2');
Route::post('sendEmail3', 'SendDailyEmail@sendEmail3');
Route::get('view', 'SendDailyEmail@view');
