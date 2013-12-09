<?php

/*
Home
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

/*
Register
*/

Route::get('register', array(
  'uses' => 'RegistrationController@index',
  'as' => 'register.index'
));
Route::post('register', array(
  'uses' => 'RegistrationController@store',
  'as' => 'register.store'
));

/*
Session
*/

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

Route::get('song/{song}/destroy', array(
  'before' => 'auth', 
  'uses' => 'SongController@showDestroy',
  'as' => 'song.showdestroy'
));

/*
Phrases
*/

Route::get('phrases/create', array(
  'before' => 'auth',
  'uses' => 'PhraseController@create',
  'as' => 'phrases.create'
));

Route::post('song/{song}/phrases', array(
  'before' => 'auth',
  'uses' => 'PhraseController@store',
  'as' => 'phrases.store'
)); 

Route::get('song/{song}/phrases/{phrase}', array(
  'before' => 'auth',
  'uses' => 'PhraseController@destroy',
  'as' => 'phrases.destroy'
));




