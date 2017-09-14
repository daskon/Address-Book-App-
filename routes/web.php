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

Route::resource('addbook','ABookController');

Route::resource('api','ApiController');

Route::get('/dashboard', 'ABookController@index')->name('dashboard');

//Route::get('create_details', 'WebController@create');

//Route::post('store_details', 'ApiController@store');

//Route::get('update_details', 'WebController@EditDetails');

//Route::post('update_details', 'ApiController@UpdateDetails');

//Route::get('show_details', 'WebController@ShowDetails');

//Route::get('delete_details', 'WebController@DeleteDetails');

//Route::get('all_details', 'WebController@AllDetails');