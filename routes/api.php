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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/v1/cars', 'CarController@getList')->name('api.listCars');
Route::get('/v1/carsToApproved', 'CarController@getListToApproved')->name('api.listCarsToApproved');

Route::get('/exemplaries/{id}','TestController@getStates')->name('car.exemplaries');

