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

Route::get('/', array(
	'uses' => 'HomeController@index',
	'as' => 'home.index'
));

Route::get('profile', array(
	'before' => 'auth',
	'uses' => 'HomeController@index', 
	'as' => 'home.profile'
));

Route::get('home/feed', array(
	'uses' => 'HomeController@index',
	'as' => 'home.feed'
));

Route::get('register', array(
  'uses' => 'RegistrationController@index',
  'as' => 'register.index'
));
Route::post('register', array(
  'uses' => 'RegistrationController@store',
  'as' => 'register.store'
));

Route::get('login', array(
  'uses' => 'SessionController@create',
  'as' => 'session.create'
));
Route::post('login', array(
  'uses' => 'SessionController@store',
  'as' => 'session.store'
));
Route::get('logout', array(
  'uses' => 'SessionController@destroy',
  'as' => 'session.destroy'
));

Route::resource('users', 'UserController'); 
Route::resource('song', 'SongController'); 
Route::resource('phrase', 'PhraseController'); 