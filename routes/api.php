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
Route::get('/', function(){
  return 'Ciao siamo nell\'api';
});

Route::middleware('api.auth')->namespace('Api')->group(function(){

  Route::get('/products','ProductController@index');
  Route::post('/products','ProductController@create');
  Route::get('/products/{id}','ProductController@show');
  Route::post('/products/{id}','ProductController@update');
  Route::post('/products/{id}/delete','ProductController@destroy');

});
