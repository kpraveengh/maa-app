<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
Route::get('/', function () {
    return view('home');
});

Route::get('admins/adminusers', 'AdminController@getadmins');
Route::get('admins/', ['uses' => 'AdminController@index', 'as' => 'admins.index']);
Route::get('admins/endusers', ['uses' => 'AdminController@index', 'as' => 'admins.index']);
Route::get('admins/owners', ['uses' => 'AdminController@owners', 'as' => 'admins.owners']);
Route::get('admins/create', ['uses' => 'AdminController@create', 'as' => 'admins.create']);
Route::post('admins', ['uses' => 'AdminController@store', 'as' => 'admins.store']);
Route::get('admins/{admin}', ['uses' => 'AdminController@show', 'as' => 'admins.show']);
Route::get('admins/{admin}/edit', ['uses' => 'AdminController@edit', 'as' => 'admins.edit']);
Route::put('admins/{admin}', ['uses' => 'AdminController@update', 'as' => 'admins.update']);
Route::delete('admins/{admin}', ['uses' => 'AdminController@destroy', 'as' => 'admins.destroy']);

//Admin User
Route::post('adminuser', ['uses' => 'AdminUserController@store', 'as' => 'adminuser.store']);
Route::get('adminuser/{user}', ['uses' => 'AdminUserController@show', 'as' => 'adminuser.show']);
Route::get('adminuser/{user}/edit', ['uses' => 'AdminUserController@edit', 'as' => 'adminuser.edit']);
Route::put('adminuser/{user}', ['uses' => 'AdminUserController@update', 'as' => 'adminuser.update']);
Route::delete('adminuser/{user}', ['uses' => 'AdminUserController@destroy', 'as' => 'adminuser.destroy']);
Route::auth();

});

Route::group(['middleware' => ['web']], function () {
//User Login
Route::get('user/login', 'UserAuth\LoginController@showLoginForm');
Route::post('user/login', 'UserAuth\LoginController@login');
Route::post('user/logout', 'UserAuth\LoginController@logout');

//User Register
Route::get('user/register', 'UserAuth\RegisterController@showRegistrationForm');
Route::post('user/register', 'UserAuth\RegisterController@register');

//User Passwords
Route::post('user/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail');
Route::post('user/password/reset', 'UserAuth\ResetPasswordController@reset');
Route::get('user/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm');
Route::get('user/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');

Route::get('user/home', 'HomeController@index');
Route::get('user/', ['uses' => 'UserController@users', 'as' => 'user.allusers']);
Route::get('user/allusers', ['uses' => 'UserController@users', 'as' => 'user.allusers']);
Route::get('user/owners', ['uses' => 'UserController@owners', 'as' => 'user.index']);
Route::get('user/create', ['uses' => 'UserController@create', 'as' => 'user.create']);
Route::post('user', ['uses' => 'UserController@store', 'as' => 'user.store']);
//Route::get('user/{user}', ['uses' => 'UserController@show', 'as' => 'user.show']);
Route::get('user/{user}/edit', ['uses' => 'UserController@edit', 'as' => 'user.edit']);
Route::put('user/{user}', ['uses' => 'UserController@update', 'as' => 'user.update']);
Route::delete('user/{user}', ['uses' => 'UserController@destroy', 'as' => 'user.destroy']);



Route::get('user/createmember', ['uses' => 'UserController@createmember', 'as' => 'user.createmember']);
Route::post('user', ['uses' => 'UserController@storemember', 'as' => 'user.storemember']);

Route::auth();

});
