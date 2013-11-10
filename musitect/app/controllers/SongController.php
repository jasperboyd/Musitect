<?php

class SongController extends BaseController {

  /**
* Song Repository
*/
  protected $Song;

  /**
* Inject the Song Repository
*/
  public function __construct(Song $Song)
  {
    $this->Song = $Song;
  }

  /**
* Display a listing of the resource.
*
* @return Response
*/
  public function index()
  {
    //Fetch all songs
    $songs = Song::with('user')->get();   
    //Return them
    return view::make('Songs.index', compact('songs'));
  }

  /**
* Show the form for creating a new resource.
*
* @return Response
*/
  public function create()
  {
    return View::make('Songs.create');
  }

  /**
* Store a newly created resource in storage.
*
* @return Response
*/
  public function store()
  {
    $s = $this->Song->create(Input::all());

    if($s->isSaved())
    {
      return Redirect::route('home.feed')
        ->with('flash', 'A new has been created');
    }

    return Redirect::route('Song.create')
      ->withInput()
      ->withErrors($s->errors());
  }

  /**
* Display the specified resource.
*
* @param int $id
* @return Response
*/
  public function show($id)
  {
    $Song = $this->Song->find($id);

    return View::make('Songs.show', compact('Song'));
  }

  /**
* Show the form for editing the specified resource.
*
* @param int $id
* @return Response
*/
  public function edit($id)
  {
    $Song = $this->Song->find($id);

    return View::make('Songs.edit', compact('Song'));
  }

  /**
* Update the specified resource in storage.
*
* @param int $id
* @return Response
*/
  public function update($id)
  {
    $s = $this->Song->update($id);

    if($s->isSaved())
    {
      return Redirect::route('Song.show', $id)
        ->with('flash', 'The Song was updated');
    }

    return Redirect::route('Song.edit', $id)
      ->withInput()
      ->withErrors($s->errors());
  }

  /**
* Remove the specified resource from storage.
*
* @param int $id
* @return Response
*/
  public function destroy($id)
  {
    return $this->Song->delete($id);
  }

}