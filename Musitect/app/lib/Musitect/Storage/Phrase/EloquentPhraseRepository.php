<?php namespace Musitect\Storage\Phrase;

use Phrase;

class EloquentPhraseRepository implements PhraseRepository {

  public function all()
  {
    return Phrase::all();
  }

  public function find($id)
  {
    return Phrase::find($id);
  }

  public function create($input)
  {
    // Create new post
    $phrase = new Phrase($input);

    // Get the current user
    $user = \Auth::user();

    $phrase->user_id = $user->id; 

    // Save the post
    $user->phrases()->save($phrase);

    // Return the post
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