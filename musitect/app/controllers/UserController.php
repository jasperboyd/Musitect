<?php

class UserController extends BaseController {

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
		 return View::make('users.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$u = $this->user->create(Input::all());
 
  		if($u::isSaved())
  		{
    			return Redirect::route('users.index')
      			->with('flash', 'The new user has been created');
  		}
 
  		return Redirect::route('users.create')
    			->withInput()
    			->withErrors($u->errors());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$this->user->findOrFail($id);

		return View::make('users.show'); 
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return View::make('users.edit');
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$s = $this->user->update($id);
 
  		if($s->isSaved())
 		{
   				 return Redirect::route('users.show', $id)
      			 ->with('flash', 'The user was updated');
  		}
 
  		return Redirect::route('users.edit', $id)
    			 ->withInput()
    			 ->withErrors($s->errors());
		}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return $this->user->delete($id);
	}

}