<?php namespace Musitect\Storage\Chord;

use Chord;

use Musitect\Storage\Phrase\PhraseRepository as Phrase; 

class EloquentChordRepository implements ChordRepository {

  public function all()
  {
    return Chord::all();
  }

  public function find($id)
  {
    return Chord::find($id);
  }

  public function create($input, $chordid)
  {
    // Create new chord
    $chord = new Chord($input); 

    $chord->chord_id = $chord;

    $chord->save();

    return $chord; 
  }

  public function update($id)
  {
    $chord = $this->find($id);

    $chord->save(\Input::all());

    return $chord;
  }

  public function delete($id)
  {
    $chord = $this->find($id);

    return $chord->delete();
  }
