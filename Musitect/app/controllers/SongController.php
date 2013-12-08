<?php

use Musitect\Storage\Song\SongRepository as Song;

class SongController extends BaseController {

  /**
* song Repository
*/
  protected $song;

  /**
* Inject the song Repository
*/
  public function __construct(Song $song)
  {
    $this->song = $song;
  }

  /**
* Display a listing of the resource.
*
* @return Response
*/
  public function index()
  {
    return $this->song->all();
  }

  /**
* Show the form for creating a new resource.
*
* @return Response
*/
  public function create()
  {
    return View::make('songs.create');
  }

  /**
* Store a newly created resource in storage.
*
* @return Response
*/
  public function store()
  {
    $s = $this->song->create(Input::all());

    if($s->isSaved())
    {
      return Redirect::route('home.feed')
        ->with('flash', 'A new song has been created!');
    }

    return Redirect::route('song.create')
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
    return $this->song->find($id);
  }

  /**
* Show the form for editing the specified resource.
*
* @param int $id
* @return Response
*/
  public function edit($id)
  {
    $song = $this->song->find($id);

    return View::make('songs.edit', compact('song'));
  }

  /**
* Update the specified resource in storage.
*
* @param int $id
* @return Response
*/
  public function update($id)
  {
    $s = $this->song->update($id);

    if($s->isSaved())
    {
      return Redirect::route('song.show', $id)
        ->with('flash', 'The song was updated');
    }

    return Redirect::route('song.edit', $id)
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
    return $this->song->delete($id);
  }

}