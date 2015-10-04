<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return redirect()->route('sign_up');
});

Route::get('/home', ['middleware' => 'auth', function () {
    $user = Auth::user();
    return view('welcome', ['first_name' => $user->first_name, 'last_name' => $user->last_name]);
}]);

Route::get('/auth/login', function () {
    return redirect()->route('sign_up');
});

Route::get('auth/register', ['as' => 'sign_up', 'uses' => 'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
