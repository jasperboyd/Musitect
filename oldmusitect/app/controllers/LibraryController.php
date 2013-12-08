<?php

class LibraryController extends BaseController {

	/**
	 * Display a listing of the library.
	 *
	 * @return Response
	 */
	public function index($username)
	{
		$library = User::whereUsername($username)->first()->library;

        return View::make('userlibraries.index', compact('library'));
	}

	/**
	 * Show the form for creating a new library.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('userlibraries.create');
	}

	/**
	 * Store a newly created library in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified library.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        return View::make('userlibraries.show');
	}

	/**
	 * Show the form for editing the specified library.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return View::make('userlibraries.edit');
	}

	/**
	 * Update the specified library in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified library from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function songs(){
		return $this->hasMany('song');
	}
}
