<?php namespace Musitect\Storage\Phrase;

use Phrase;

use Musitect\Storage\Song\SongRepository as Song; 

class EloquentPhraseRepository implements PhraseRepository {

  public function all()
  {
    return Phrase::all();
  }

  public function find($id)
  {
    return Phrase::find($id);
  }

  public function create($input, $songid)
  {
    // Create new phrase
    $phrase = new Phrase($input); 

    $phrase->song_id = $songid;

    $phrase->save();

    return $phrase; 
  }

  public function update($id)
  {
    $phrase = $this->find($id);

    $phrase->save(\Input::all());

    return $phrase;
  }

  public function delete($id)
  {
    $phrase = $this->find($id);

    return $phrase->delete();
  }

}