<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});


 Route::resource('addbook','ABookController',['only' => ['index','create','destroy','edit','show']]);

 Route::resource('apiroute','ApiController', ['only' => ['store','update','show']]);

    //Route::get('/api/books/{id}', 'BookController@show');
    //Route::post('/api/books', 'BookController@store');
    //Route::put('/api/books/{id}', 'BookController@update');
    //Route::delete('/api/books/{id}', 'BookController@destroy');
