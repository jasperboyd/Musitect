<?php

class CollectivePassController extends \BaseController {

	/**
	* Collective Repository
	*/
 	protected $collectivepass;

    /**
	* Inject the phrase Repository
	*/
  	public function __construct(CollectivePass $collectivepass)
  	{
    	$this->beforeFilter('auth', array('except' => 'getLogin'));
    	$this->collectivepass = $collectivepass;
  	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('collectivepasses.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$s = $this->collectivepass->create(Input::all());

        if($s->isSaved())
   		{
      		return Redirect::action('CollectiveController@edit', $s->collective_id)
        		->with('flash', 'A new phrase has been created!');
      	}

      	return Redirect::action('CollectiveController@edit', $s->collective_id)
      		->withInput()
      		->withErrors($s->errors());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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