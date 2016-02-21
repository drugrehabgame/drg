<?php

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

Route::group(['middleware' => ['web', 'guest']], function () {
    Route::get('/', 'Auth\AuthController@getLogin');
    Route::get('/register', 'Auth\AuthController@getRegister');
	Route::post('/login', 'Auth\AuthController@postLogin');
    Route::post('/register', 'Auth\AuthController@postRegister');
});

Route::group(['middleware' => ['web','auth']], function () {
    Route::get('dashboard', 'Dashboard@index');
    Route::get('goodbye', 'Auth\AuthController@doLogout');
    Route::get('messageboard', 'Messageboard@index');
    Route::post('messageboard', 'Messageboard@addMessage');
    Route::get('messages', 'Messageboard@getMessages');
    Route::get('quests', 'QuestsController@index');
    Route::get('journal', 'JournalController@index');
    Route::post('journal', 'JournalController@store');
    Route::get('allies', 'AlliesController@index');
    Route::get('rewards', 'RewardsController@index');
    Route::get('stats', 'StatsController@index');
    Route::get('history', 'HistoryController@index');
    Route::post('dotask', 'QuestsController@dotask');
});
