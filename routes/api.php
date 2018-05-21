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

Route::middleware('jwt.auth')->get('users', function(Request $request) {
    return auth()->user();
});

// Route::middleware('jwt.auth')->get('/mojezlecenia/{id}', 'ZleceniaApiController@zleceniausera');

Route::get('/zlecenia', 'ZleceniaApiController@index');
// Route::get('/mojezlecenia/{id}', 'ZleceniaApiController@zleceniausera');
// Route::get('/mojezlecenia/dane/{id}', 'ZleceniaApiController@pokazzlecenie');
Route::post('/mojezlecenia/zrealizuj/{id}/{user}', 'ZleceniaApiController@zrealizujzlecenie');
Route::post('/dobazy', 'ZleceniaApiController@dobazy');

Route::post('user/register', 'UserController@register');
Route::post('user/login', 'UserController@logowanie');

// Route::post('auth/login', 'APILoginController@login');
// Route::group(['middleware' => 'jwt.auth'], function(){
//   Route::get('auth/user', 'APILoginController@user');
// });
Route::get('auth/user', function(Request $request) {
    return auth()->user();
});

Route::group(['middleware' => 'jwt.refresh'], function(){
  Route::get('auth/refresh', 'APILoginController@refresh');
});
// Route::get('/mojezlecenia/{id}', 'ZleceniaApiController@zleceniausera');
Route::group(['middleware' => 'jwt.auth'], function(){
    // Route::get('/mojezlecenia/{id}', 'ZleceniaApiController@zleceniausera');
    Route::get('/mojezlecenia/dane/{id}', 'ZleceniaApiController@pokazzlecenie');
    Route::get('/materialy', 'MaterialyController@indexapi');
});
Route::get('/mojezlecenia/{id}', 'ZleceniaApiController@zleceniausera');
Route::post('/materialy', 'MaterialyController@dodajdozapiszapi');
Route::get('/materialywzleceniu/{id}', 'MaterialyController@materialywzleceniu');