<?php

use Musitect\Storage\User\UserRepository as User;

class UsersController extends \BaseController {

	/**
 	* Display a listing of the resource.
 	*
	 * @return Response
	 */
	public function index()
	{
  		return $this->user->all();
	}
	
	public function __construct(User $user)
	{
  		$this->user = $user;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		 $v = new Musitect\Services\Validators\User;
 
  		 if($v->passes())
  	{
    	$this->user->create($input);
 
   		return Redirect::route('users.index')
 	   ->with('flash', 'The new user has been created');
    }
 
  	   return Redirect::route('users.create')
   	 	 ->withInput()
   		 ->withErrors($v->getErrors());
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}