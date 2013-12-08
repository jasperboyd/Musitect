<?php

use Musitect\Storage\User\UserRepository as User; 

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
  /**
  * User Repository
  */
  protected $user;

  /**
  * Inject the User Repository
  */
  public function __construct(User $user)
  {
    $this->user = $user;
  }

  public function index()
  {
    if (Auth::check())
    {
      $user = Auth::user();

      $songs = $this->user->feed();

      return View::make('home.dashboard', compact('user', 'songs'));
    }
    
     return View::make('home.landing');
   }
}