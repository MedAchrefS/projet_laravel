<?php

use Illuminate\Http\Request;
Use App\Places;
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

Route::get('places', 'PlacesController@index');
Route::get('places/{id}', 'PlacesController@show');
Route::post('places', 'PlacesController@store');
Route::put('places/{id}', 'PlacesController@update');
Route::delete('places/{id}', 'PlacesController@delete');