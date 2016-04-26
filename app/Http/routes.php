<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {

    echo 'hello';

});

Route::get('hello/{id?}', 'HelloController@hello');

Route::get('film/id/{id?}', 'FilmController@DajFilm');
Route::get('film/svi', 'FilmController@DajSveFilmove');
Route::get('film/ocjena/{id?}', 'FilmController@DajFilmByOcjena');
Route::get('film/zanr/{id?}', 'FilmController@DajFilmByZanr');
Route::get('film/vrsta/{id?}', 'FilmController@DajFilmByVrsta');
Route::post('film/dodaj', 'FilmController@DodajFilm');
Route::delete('film/delete/{id}', 'FilmController@IzbrisiFilm');

Route::post('login', 'UserController@login');
Route::resource('users', 'UserController');

Route::group(['middleware' => ['web']], function () {
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
