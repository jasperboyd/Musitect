<?php

use Musitect\Storage\Chord\ChordRepository as Chord;

class ChordController extends BaseController {

  /**
* chord Repository
*/
  protected $chord;

  /**
* Inject the chord Repository
*/
  public function __construct(Chord $chord)
  {
    $this->beforeFilter('auth', array('except' => 'getLogin'))
    $this->chord = $chord;
  }

  /**
* Display a listing of the resource.
*
* @return Response
*/
  public function index()
  {
    return $this->chord->all();
  }

  /**
* Show the form for creating a new resource.
*
* @return Response
*/
  public function create()
  {
    return View::make('chords.create');
  }

  /**
* Store a newly created resource in storage.
*
* @return Response
*/
  public function store($phrase)
  {
    $s = $this->chord->create(Input::all(), $phrase);

    if($s->isSaved())
    {
      return Redirect::action('PhraseController@edit', $s->phrase_id)
        ->with('flash', 'A new chord has been created!');
    }

    return Redirect::action('PhraseController@edit', $phrase)
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
    return $this->chord->find($id);
  }

  /**
* Show the form for editing the specified resource.
*
* @param int $id
* @return Response
*/
  public function edit($id)
  {
    $chord = $this->chord->find($id);

    return View::make('chords.edit', compact('chord'));
  }

  /**
* Update the specified resource in storage.
*
* @param int $id
* @return Response
*/
  public function update($id)
  {
    $s = $this->chord->update($id);

    if($s->isSaved())
    {
      return Redirect::route('chord.show', $id)
        ->with('flash', 'The chord was updated');
    }

    return Redirect::route('chord.edit', $id)
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
    return $this->chord->delete($id);
  }

}