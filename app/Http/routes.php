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

    return View::make('index');

});

Route::get('/about', function () {

    return View::make('about');

});

Route::get('/contact', function () {

    return View::make('contact');

});


Route::get('hello/{id?}', 'HelloController@hello');

Route::get('film/id/{id?}', 'FilmController@DajFilm');
Route::get('film/dodaj/{id?}', 'FilmController@PostaviFilm');
Route::get('film/svi', 'FilmController@DajSveFilmove');
Route::get('film/ocjena/{id?}', 'FilmController@DajFilmByOcjena');
Route::get('film/zanr/{id?}', 'FilmController@DajFilmByZanr');
Route::get('film/vrsta/{id?}', 'FilmController@DajFilmByVrsta');
Route::get('dashboard', 'UserController@Wellcome');
Route::post('film/dodaj', 'FilmController@DodajFilm');
Route::delete('film/delete/{id}', 'FilmController@IzbrisiFilm');

#Route::get('loguj', 'UserController@LogujSe');
Route::resource('users', 'UserController');

Route::group(['middleware' => ['jwt.auth']], function () {

    Route::get('/admin', function()
    {
        return View::make ("admin");
    });
});
Route::group(['middleware' => ['web']], function () {
    Route::post('/dashboard', function()
    {
        return View::make ("dashboard");
    });
/*        'before' => 'jwt-auth',
        function () {
            $token = JWTAuth::getToken();
            $user = JWTAuth::toUser($token);

            return Response::json([
                'data' => [
                    'email' => $user->email,
                    'registered_at' => $user->created_at->toDateTimeString()
                ]
            ]);
        }
    ]);*/

    #Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('login', 'UserController@login');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');

    Route::get('password/email', 'Auth\PasswordController@getEmail');
    Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');

    Route::get('idx', ['middleware' => 'auth.basic', function() {
        // Only authenticated users may enter...
    }]);

});

Route::post('/korisnik/banuj', function()
{
    $k = intval (\Illuminate\Support\Facades\Input::get("id", "-1"));
    if ($k == -1)
        return "{ \"ok\":\"0\", \"msg\":\"Parametar ID nije proslijedjen!\"}";
    $u = \App\User::find($k);
    if (!isset ($u) || $u == null)
        return "{ \"ok\":\"0\", \"msg\":\"Korisnik sa tim ID-om ne postoji!\"}";
    $u->banovan = true;
    $u->save();
    return "{ \"ok\":\"1\", \"msg\":\"OK, banovan\"}";
});
Route::post('/korisnik/unbanuj', function()
{
    $k = intval (\Illuminate\Support\Facades\Input::get("id", "-1"));
    if ($k == -1)
        return "{ \"ok\":\"0\", \"msg\":\"Parametar ID nije proslijedjen!\"}";
    $u = \App\User::find($k);
    if (!isset ($u) || $u == null)
        return "{ \"ok\":\"0\", \"msg\":\"Korisnik sa tim ID-om ne postoji!\"}";
    $u->banovan = false;
    $u->save();
    return "{ \"ok\":\"1\", \"msg\":\"OK, unbanovan\"}";
});
Route::get('/welcome', 'HelloController@welcome');

Route::controllers ([
    'auth'=> 'Auth\AuthController',
    'password'=>'Auth\PasswordController',
]);
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

#Route::auth();
