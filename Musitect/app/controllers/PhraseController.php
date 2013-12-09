<?php

use Musitect\Storage\Phrase\PhraseRepository as Phrase;
use Musitect\Storage\Song\SongRepository as Song; 

class PhraseController extends BaseController {

  /**
* phrase Repository
*/
  protected $phrase, $song;

  /**
* Inject the phrase Repository
*/
  public function __construct(Phrase $phrase)
  {
    $this->beforeFilter('auth', array('except' => 'getLogin'));
    $this->phrase = $phrase;
  }

  /**
* Display a listing of the resource.
*
* @return Response
*/
  public function index()
  {
    return $this->phrase->all();
  }

  /**
* Show the form for creating a new resource.
*
* @return Response
*/
  public function create()
  {
    return View::make('phrases.create');
  }

  /**
* Store a newly created resource in storage.
*
* @return Response
*/
  public function store($song)
  {
    $s = $this->phrase->create(Input::all(), $song);

    if($s->isSaved())
    {
      return Redirect::action('SongController@edit', $s->song_id)
        ->with('flash', 'A new phrase has been created!');
    }

    return Redirect::action('SongController@edit', $song)
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
    return $this->phrase->find($id);
  }

  /**
* Show the form for editing the specified resource.
*
* @param int $id
* @return Response
*/
  public function edit($id)
  {
    $phrase = $this->phrase->find($id);

    return View::make('phrases.edit', compact('phrase'));
  }

  /**
* Update the specified resource in storage.
*
* @param int $id
* @return Response
*/
  public function update($songId, $id)
  {
    $s = $this->phrase->update($id);

    if($s->isSaved())
    {
      return Redirect::route('song.edit', $songId)
        ->with('flash', 'The phrase was updated');
    }

    return Redirect::route('song.edit', $songId)
      ->withInput()
      ->withErrors($s->errors());
  }

  /**
* Remove the specified resource from storage.
*
* @param int $id
* @return Response
*/
  public function destroy($songId, $phrase)
  {
    $this->phrase->delete($phrase);  

    return Redirect::action('SongController@edit', $songId)
      ->with('flash', 'The phrase was deleted');
  }

}