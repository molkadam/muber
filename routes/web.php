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
    return view('home');
});
Route::get('about', function () {
    return view('about');
});
Route::get('as','AjaxController@index');

Route::get('/register','RegisterController@create');
Route::get('/login','SessionController@create');

Route::post('/register','RegisterController@store');
Route::get('/logout','SessionController@destroy');

Route::post('/login','SessionController@store');

//Route::get('/dregister','DriveregisterController@create');

Route::resource('driver','DriverController');
