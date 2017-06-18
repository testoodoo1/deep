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



Route::get('hello', function () {
    return "hello world";
});




Route::get('/todo', 'TodoController@index' );

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
