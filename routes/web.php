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


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin')->name('login');
Route::get('auth/logout', 'Auth\AuthController@getLogout')->name('logout');

Route::get('/', 'Auth\AuthController@getLogin');

Route::get('/home', function(){
    return view('home.index');
})->middleware('auth')->name('home');