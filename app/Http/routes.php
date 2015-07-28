<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('/', 'WelcomeController@index');


Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', 'Auth\AuthController@getLogin');
//Route::get('/home', 'HomeController@index');
Route::post('home/unirse', 'HomeController@unirse');
Route::resource('home', 'HomeController');
Route::get('/tablero', 'HomeController@tablero');
//Route::post('/songs/{id}/enqueue', 'SongsController@enqueue');
//Route::resource('songs', 'SongsController');
//Route::resource('users', 'UsersController');

//get( '/Songs' , [
 //   'as' => 'User' ,
  //  'uses' => 'SongsController@index'
//] );