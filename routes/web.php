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

Auth::routes();

Route::resource('addbook','ABookController',['only' => ['index','create','destroy','edit','show']]);

Route::resource('api','ApiController', ['only' => ['store','update','show']]);

Route::get('/dashboard', 'ABookController@index')->name('dashboard');
