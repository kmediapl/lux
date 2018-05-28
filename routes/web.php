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

Route::get('/', 'ZleceniaController@index')->middleware('web','admin')->name('zlecenia');
Route::get('/zlecenia', 'ZleceniaController@index')->middleware('web','admin')->name('zlecenia');
Route::get('/zlecenia/{id}', 'ZleceniaController@show')->middleware('web','admin')->name('zlecenia');
Route::get('/zlecenie/dodaj', 'ZleceniaController@create')->middleware('web','admin')->name('zlecenia');
Route::post('/zlecenia', 'ZleceniaController@store')->middleware('web','admin')->name('zlecenia');
Route::delete('/zlecenia/{id}', 'ZleceniaController@destroy')->middleware('web','admin')->name('zlecenia');
Route::get('/zlecenia/edytuj/{id}', 'ZleceniaController@edit')->middleware('web','admin')->name('zlecenia');
Route::put('/zlecenia/update/{id}', 'ZleceniaController@update')->middleware('web','admin')->name('zlecenia');
Route::get('/zrealizujzlecenie/{id}', 'ZleceniaController@zrealizujzlecenie')->middleware('web','admin')->name('zlecenia');
Route::post('/dodajobiekt', 'ZleceniaController@dodajobiekt')->middleware('web','admin')->name('zlecenia');
Route::get('/szukajzlecenia','ZleceniaController@szukaj')->middleware('web','admin')->name('zlecenia');


// Route::get('/plik','ZleceniaController@plik');
// Route::post('/uploads','ZleceniaController@uploads');

//zleceniodawca
Route::get('/zleceniodawcy', 'ZleceniodawcyController@index')->middleware('web','admin')->name('zlecenia');
Route::get('/zleceniodawcy/{id}', 'ZleceniodawcyController@show')->middleware('web','admin')->name('zlecenia');
Route::get('/zleceniodawcy/edytuj/{id}', 'ZleceniodawcyController@edit')->middleware('web','admin')->name('zlecenia');
Route::put('/zleceniodawcy/update/{id}', 'ZleceniodawcyController@update')->middleware('web','admin')->name('zlecenia');
Route::get('/zleceniodawca/dodaj', 'ZleceniodawcyController@create')->middleware('web','admin')->name('zlecenia');
Route::post('/zleceniodawcy', 'ZleceniodawcyController@store')->middleware('web','admin')->name('zlecenia');
Route::delete('/zleceniodawcy/{id}', 'ZleceniodawcyController@destroy')->middleware('web','admin')->name('zlecenia');
//pracownicy

Route::get('/pracownicy/dodajdo/{id}', 'PracownicyController@dodajpracownika')->middleware('web','admin')->name('zlecenia');
Route::get('/pracownicy/dodajdozapisz/{idprac}/{idzlec}', 'PracownicyController@dodajdozapisz')->middleware('web','admin')->name('zlecenia');
Route::get('/pracownicy/odlacz/{idprac}', 'PracownicyController@odlacz')->middleware('web','admin')->name('zlecenia');
Route::post('/pracownicy/zapiszpracownika','PracownicyController@zapiszpracownika')->middleware('web','admin')->name('zlecenia');
Route::get('/pracownicy', 'PracownicyController@index')->middleware('web','admin')->name('zlecenia');
Route::delete('/pracownicy/{id}', 'PracownicyController@destroy')->middleware('web','admin')->name('zlecenia');
// Route::get('/pracownicy/zarejestruj','\App\Http\Controllers\Auth\RegisterController@showRegistrationForm');

//


Route::get('/pracownicy/dodaj', 'PracownicyController@dodaj')->middleware('web','admin')->name('zlecenia');

//materialy
Route::get('/materialyzmien', 'MaterialyController@zmien')->middleware('web','admin')->name('zlecenia');
Route::get('/materialy', 'MaterialyController@index')->middleware('web','admin')->name('zlecenia');
Route::get('/material/dodaj', 'MaterialyController@create')->middleware('web','admin')->name('zlecenia');
Route::post('/materialy', 'MaterialyController@store')->middleware('web','admin')->name('zlecenia');
Route::delete('/materialy/{id}', 'MaterialyController@destroy')->middleware('web','admin')->name('zlecenia');
Route::get('/materialy/dodajdo/{id}', 'MaterialyController@dodajmaterial')->middleware('web','admin')->name('zlecenia');
Route::get('/materialy/dodajdozapisz/{idmat}/{idzlec}', 'MaterialyController@dodajdozapisz')->middleware('web','admin')->name('zlecenia');
Route::get('/materialy/odlacz/{idmat}/{idzlec}/{idrec}', 'MaterialyController@odlacz')->middleware('web','admin')->name('zlecenia');
//
Route::post('/dologin', 'ZleceniaController@dologin')->middleware('web','admin')->name('zlecenia');
//Route::get('/zlecenia', 'ZleceniaController@index');
//Route::get('/zlecenia', 'ZleceniaApiController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//obiekty

Route::get('/obiekty', 'ObiektyController@index')->middleware('web','admin')->name('zlecenia');
Route::get('/obiekty/{id}', 'ObiektyController@show')->middleware('web','admin')->name('zlecenia');
Route::delete('/obiekty/{id}', 'ObiektyController@destroy')->middleware('web','admin')->name('zlecenia');
Route::get('/obiekt/dodaj', 'ObiektyController@create')->middleware('web','admin')->name('zlecenia');
Route::post('/obiekty', 'ObiektyController@store')->middleware('web','admin')->name('zlecenia');
Route::get('/obiekty/edytuj/{id}', 'ObiektyController@edit')->middleware('web','admin')->name('zlecenia');
Route::put('/obiekty/update/{id}', 'ObiektyController@update')->middleware('web','admin')->name('zlecenia');



//mobilne 
// Route::get('/appmobile/{any}', function () {
//     return view('mobilne.index');
// })->where('any', '.*');
// Route::post('/appmobile/pliki','PlikiController@store');
// Route::post('/appmobile/pliki', function () {
//     return 'ttt';
// });

// Route::get('/materialy', function () {
//     return view('mobilne.mat');
// });

//raporty

Route::get('/raporty/zrealizowanezlecenia', 'RaportyController@zrealizowanezlecenia')->middleware('web','admin')->name('zlecenia');




//testy
 Route::get('/brakuprawnien', function(){
    return View::make("brakuprawnien");
 });
// Route::get('/testpivot', 'MaterialyController@testpivot');
// Route::post('/testpivot2', 'MaterialyController@testpivot2');