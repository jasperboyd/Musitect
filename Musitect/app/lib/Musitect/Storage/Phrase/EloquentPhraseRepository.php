<?php namespace Musitect\Storage\Phrase;

use Phrase;
use Song;

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
    $phrase = new Phrase($input); 

    $user = \Auth::user();

    $song = Song::find($songid);

    $user->phrases()->save($phrase);

    $song->phrases()->save($phrase);

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
    return Phrase::destroy($id); ;
  }

}