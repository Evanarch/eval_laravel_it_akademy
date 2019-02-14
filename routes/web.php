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

Route::get('/', 'VignetteController@index');
Route::get('/show/{id}', 'VignetteController@show');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'AdminVignetteController@index');
  Route::get('/vignettes', 'AdminVignetteController@displayAll');
  Route::get('/vignettes/create', 'AdminVignetteController@create');
  Route::get('/vignettes/{id}/edit', 'AdminVignetteController@edit');
  Route::get('/vignettes/{id}', 'AdminVignetteController@update');
});
