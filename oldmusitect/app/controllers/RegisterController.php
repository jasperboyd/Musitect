<?php

class RegisterController extends BaseController {

  protected $user;

  public function __construct(User $user)
  {
    $this->user = $user;
  }

  public function index()
  {
    return View::make('register.index');
  }

  public function store()
  {
    $s = $this->user->create(Input::all());

    if($s->isSaved())
    {
      return Redirect::route('home.feed')
        ->with('flash', 'The new user has been created');
    }

    return Redirect::route('register.index')
      ->withInput()
      ->withErrors($s->errors());
  }

}