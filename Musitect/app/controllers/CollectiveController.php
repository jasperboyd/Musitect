<?php

use Musitect\Storage\Collective\CollectiveRepository as Collective; 

class CollectiveController extends \BaseController {

	
	/**
	* Collective Repository
	*/
 	protected $collective;

    /**
	* Inject the phrase Repository
	*/
  	public function __construct(Collective $collective)
  	{
    	$this->beforeFilter('auth', array('except' => 'getLogin'));
    	$this->collective = $collective;
  	}


	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('collectives.index');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('collectives.create');
	}

	/**
	* Additional Tom-foolery
	*/ 

	public function addUser($collectiveid, $userid)
	{
		$this->collective->addUser($collectiveid, $userid);
		return $this->show($collectiveid); 	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($userid)
	{
		$s = $this->collective->create(Input::all(), $userid);

    if($s->isSaved())
    {
      return Redirect::action('CollectiveController@show', $s->id)
        ->with('flash', 'A new phrase has been created!');
    }

    return Redirect::action('CollectiveController@create')
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
		$collective = $this->collective->find($id);
		return View::make('collectives.show', compact('collective'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$collective = $this->collective->find($id);
		return View::make('collectives.edit', compact('collective'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$s = $this->collective->update($id);

    if($s->isSaved())
    {
      return Redirect::route('collectives.edit', $id)
        ->with('flash', 'The phrase was updated');
    }

    return Redirect::route('collective.edit', $id)
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
		//
	}


}