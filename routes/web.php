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

Route::group(['prefix' => 'adm', 'as' => 'adm.'], function () {
    Route::get('/', ['as' => 'index', 'uses' => function () {
        return "ADM HOME";
    }]);
});

Route::group(['prefix' => 'account', 'as' => 'account.', 'namespace' => 'Website'], function () {
    Route::get('login', ['as' => 'login', 'uses' => 'UsersController@login']);
});


Route::get('/', function () {
    return view('welcome');
});
