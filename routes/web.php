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

//zlecenia
Route::get('/', 'ZleceniaController@index');
Route::get('/zlecenia', 'ZleceniaController@index');
Route::get('/zlecenia/{id}', 'ZleceniaController@show');
Route::get('/zlecenie/dodaj', 'ZleceniaController@create');
Route::post('/zlecenia', 'ZleceniaController@store');
Route::get('/zlecenia/edytuj/{id}', 'ZleceniaController@edit');
Route::put('/zlecenia/update/{id}', 'ZleceniaController@update');


//
Route::post('/dologin', 'ZleceniaController@dologin');
//Route::get('/zlecenia', 'ZleceniaController@index');
//Route::get('/zlecenia', 'ZleceniaApiController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//obiekty

Route::get('/obiekty', 'ObiektyController@index');
Route::get('/obiekty/{id}', 'ObiektyController@show');
Route::delete('/obiekty/{id}', 'ObiektyController@destroy');
Route::get('/obiekt/dodaj', 'ObiektyController@create');
Route::post('/obiekty', 'ObiektyController@store');
Route::get('/obiekty/edytuj/{id}', 'ObiektyController@edit');
Route::put('/obiekty/update/{id}', 'ObiektyController@update');