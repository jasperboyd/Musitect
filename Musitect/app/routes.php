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
* Admin
*/
Route::get('admin/logout',  array('as' => 'admin.logout',      'uses' => 'App\Controllers\Admin\AuthController@getLogout'));
Route::get('admin/login',   array('as' => 'admin.login',       'uses' => 'App\Controllers\Admin\AuthController@getLogin'));
Route::post('admin/login',  array('as' => 'admin.login.post',  'uses' => 'App\Controllers\Admin\AuthController@postLogin'));

Route::group(array('prefix' => 'admin', 'before' => 'auth.admin'), function()
{
    Route::any('/',                'App\Controllers\Admin\PagesController@index');
    Route::resource('articles',    'App\Controllers\Admin\ArticlesController');
    Route::resource('pages',       'App\Controllers\Admin\PagesController');
});

/**
* Home 
*/

Route::get('/', 'HomeController@Welcome');
Route::get('/register', 'HomeController@Register'); 
Route::get('/login', 'HomeController@Login); 

/**
* User 
*/

Route::resource('user', 'UserController');

/**
* Login
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

/**
* Register
*/

Route::get('register', array(
  'uses' => 'RegisterController@index',
  'as' => 'register.index'
));
Route::post('register', array(
  'uses' => 'RegisterController@store',
  'as' => 'register.store'
));

/**
* Password Reset
*/

Route::get('password/reset', array(
  'uses' => 'PasswordController@remind',
  'as' => 'password.remind'
));
Route::post('password/reset', array(
  'uses' => 'PasswordController@request',
  'as' => 'password.request'
));
Route::get('password/reset/{token}', array(
  'uses' => 'PasswordController@reset',
  'as' => 'password.reset'
));
Route::post('password/reset/{token}', array(
  'uses' => 'PasswordController@update',
  'as' => 'password.update'
));

/**
* Songs
*/

Route::get('Song', array(
  'uses' => 'SongController@index',
  'as' => 'Song.index'
));
Route::get('Song/create', array(
  'before' => 'auth',
  'uses' => 'SongController@create',
  'as' => 'Song.create'
));
Route::get('Song/{id}', array(
  'uses' => 'SongController@show',
  'as' => 'Song.show'
));
Route::Song('Song', array(
  'before' => 'auth',
  'uses' => 'SongController@store',
  'as' => 'Song.store'
));
Route::get('Song/{id}/edit', array(
  'before' => 'auth',
  'uses' => 'SongController@edit',
  'as' => 'Song.edit'
));
Route::put('Song/{id}', array(
  'before' => 'auth',
  'uses' => 'SongController@update',
  'as' => 'Song.update'
));
Route::delete('Song/{id}', array(
  'before' => 'auth',
  'uses' => 'SongController@destroy',
  'as' => 'Song.destory'
));