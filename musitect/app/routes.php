<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/**
* Home 
*/

Route::get('/', array(
  'uses' => 'HomeController@Welcome',
  'as' => 'home.welcome'
));

Route::resource('user', 'UserController');

Route::get('songs', array(
	'uses' => 'SongsController@index',
	'as' => 'songs.index'
));

Route::get('{username}', array (
	'users' => 'UserController@show', 
	'as' => 'user.show'
));

Route::get('{username}/library', array(
	'uses' => 'LibraryController@index', 
	'as' => 'library.index' 
));

Route::get('{username}/libraries', array(
	'uses' => 'LibraryController@index', 
	'as' => 'library.index' 
));

Route::get('{username}/{library}', array(
	'uses' => 'LibraryController@show', 
	'as' => 'library.show' 
));