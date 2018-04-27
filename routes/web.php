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

Route::get('/plik','ZleceniaController@plik');
Route::post('/uploads','ZleceniaController@uploads');

//zleceniodawca
Route::get('/zleceniodawcy', 'ZleceniodawcyController@index');
Route::get('/zleceniodawcy/{id}', 'ZleceniodawcyController@show');
Route::get('/zleceniodawcy/edytuj/{id}', 'ZleceniodawcyController@edit');
Route::put('/zleceniodawcy/update/{id}', 'ZleceniodawcyController@update');
Route::get('/zleceniodawca/dodaj', 'ZleceniodawcyController@create');
Route::post('/zleceniodawcy', 'ZleceniodawcyController@store');

//pracownicy

Route::get('/pracownicy/dodajdo/{id}', 'PracownicyController@dodajpracownika');
Route::get('/pracownicy/dodajdozapisz/{idprac}/{idzlec}', 'PracownicyController@dodajdozapisz');
Route::get('/pracownicy/odlacz/{idprac}', 'PracownicyController@odlacz');
//



//materialy
// Route::get('/materialy', 'MaterialyController@index');
Route::get('/material/dodaj', 'MaterialyController@create');
Route::post('/materialy', 'MaterialyController@store');

Route::get('/materialy/dodajdo/{id}', 'MaterialyController@dodajmaterial');
Route::get('/materialy/dodajdozapisz/{idmat}/{idzlec}', 'MaterialyController@dodajdozapisz');

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



//mobilne 
Route::get('/appmobile/{any}', function () {
    return view('mobilne.index');
})->where('any', '.*');
Route::post('/appmobile/pliki','PlikiController@store');
// Route::post('/appmobile/pliki', function () {
//     return 'ttt';
// });

Route::get('/materialy', function () {
    return view('mobilne.mat');
});
