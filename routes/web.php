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

Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/', function () {
    return view('welcome');
});  
    Auth::routes();
Route::resource('places','PlacesController');


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/index', 'AdminController@index')->name('admin');

Route::get('/tables.blade.php', function () {
    return view('tables');
});

Route::get('/upgrade.blade.php', function () {
    return view('upgrade');
});
Route::get('/user.blade.php', function () {
    return view('user');
});

Route::get('/admin', function () {
    return view('admin/index');
}); 









