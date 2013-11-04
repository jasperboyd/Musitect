<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| Direct links to the Welcome Page, Register, and Login 
	|
	*/

	public function Welcome()
	{
		return View::make('welcome');
	}
	
	public function Register() 
	{ 
		return View::make('register'); 
	} 
	
	public function Login()
	{ 
		return View::make('login');
	} 

}