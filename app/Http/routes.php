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

//default route
Route::get('/', function() {
	if (Auth::check()) {
		return redirect('dashboard');
	} else {
		return redirect('welcome');
	}
});

//auth


//Route::get('welcome', 'Auth\AuthController@getLogin');
//Route::post('login', 'Auth\AuthController@postLogin');

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
    Route::get('welcome', 'Auth\AuthController@getLogin');
	Route::post('login', 'Auth\AuthController@postLogin');
	Route::get('goodbye', 'Auth\AuthController@doLogout');
});

Route::group(['middleware' => ['web','auth']], function () {
   Route::get('dashboard', 'Dashboard@index');
   Route::get('messageboard', 'Messageboard@index');
   Route::post('messageboard', 'Messageboard@addMessage');
   Route::get('messages', 'Messageboard@getMessages');
});