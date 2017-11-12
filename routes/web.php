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
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});

Route::post('logout', [
    'as' => 'logout',
    'uses' => 'Auth\LoginController@logout'
]);

// Password Reset Routes...
Route::post('password/email', [
    'as' => 'password.email',
    'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail'
]);
Route::get('password/reset', [
    'as' => 'password.request',
    'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm'
]);
Route::post('password/reset', [
    'as' => '',
    'uses' => 'Auth\ResetPasswordController@reset'
]);
Route::get('password/reset/{token}', [
    'as' => 'password.reset',
    'uses' => 'Auth\ResetPasswordController@showResetForm'
]);

// Registration Routes...


Route::get('/', function () {
    return view('index');
});
Route::post('login', [
    'as' => 'login',
    'uses' => 'Auth\LoginController@login'
]);
Route::get('/login', function () {
    return view('login');
});
Route::post('signup', [
    'as' => 'signup',
    'uses' => 'Auth\RegisterController@register'
]);
Route::get('/signup', function () {
    return view('signup');
});
Route::get('/reset', function () {
    return view('password-reset');
});

/*Single page app routes*/

Route::get('/app.diary', function () {
    return view('newentry');
});
Route::get('/app.diary', function () {
    return view('allentry');
});
/*Route::get('/entries', function () {
    return App\Diary::with('user')->latest()->get();
});*/
Route::get('/entries', 'DiaryCOntroller@index');
Route::get('/searchentries', 'DiaryCOntroller@search');
