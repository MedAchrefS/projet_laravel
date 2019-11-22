<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/places.blade.php', function () {
    return view('places');
});

Route::get('/map.blade.php', function () {
    return view('map');
});

Route::get('/notifications.blade.php', function () {
    return view('notifications');
});

Route::get('/tables.blade.php', function () {
    return view('tables');
});

Route::get('/upgrade.blade.php', function () {
    return view('upgrade');
});
Route::get('/user.blade.php', function () {
    return view('user');
});
