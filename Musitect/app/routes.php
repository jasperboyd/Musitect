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

/*
Collectives & CollectivePasses
*/

//Add User Interface Function
Route::get('user/{userid}/collectives/{collectiveid}', array(
  'before' => 'auth',
  'uses' => 'CollectiveController@addUser', 
  'as' => 'collectives.user.add'
));

//Custom store function
Route::post('user/{userid}/collective', array(
  'before' => 'auth',
  'uses' => 'CollectiveController@store', 
  'as' => 'collectives.store'
));

Route::resource('collectives', 'CollectiveController',  array('except' => ['store'])); 


/*Collective::saved(function($collective){ 
    
    $pass = new CollectivePass; 
    $pass->user_id = $collective->founder_id; 
    $pass->collective_id = $collective->id;
    $pass->role = 1;//founder defualts to admin
    $pass->save(); 

});*/


/*
Users
*/

Route::resource('users', 'UserController'); 

/*
Songs
*/

//Add Song Interface Function
Route::get('collectives/{collectiveid}/song/{songid}', array(
  'before' => 'auth',
  'uses' => 'songController@setCollective', 
  'as' => 'song.collective.set'
));

//Custom destroy function
Route::get('song/{song}/destroy', array(
  'before' => 'auth', 
  'uses' => 'SongController@showDestroy',
  'as' => 'song.showdestroy'
));

Route::resource('song', 'SongController'); 

/*
Phrases
*/

//Custom create function
Route::get('song/{songid}/phrases', array(
  'before' => 'auth',
  'uses' => 'PhraseController@create', 
  'as' => 'phrases.store'
));
//Custom store function
Route::post('song/{songid}/phrases', array(
  'before' => 'auth',
  'uses' => 'PhraseController@store', 
  'as' => 'phrases.store'
));

//Custom edit function
Route::get('phrases/{phrase}/edit', array(
  'before' => 'auth',
  'uses' => 'PhraseController@edit', 
  'as' => 'phrases.edit'
));

Route::any('song/{songid}/edit/{phraseid}', array(
  'before' => 'auth',
  'uses' => 'PhraseController@update', 
  'as' => 'phrases.update'
));

Route::resource('phrases', 'PhraseController', array('except' => ['store', 'edit', 'create', 'update']));




