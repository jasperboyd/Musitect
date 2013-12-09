<?php namespace Musitect\Storage\Song;

use Song;

class EloquentSongRepository implements SongRepository {

  public function all()
  {
    return Song::all();
  }

  public function find($id)
  {
    return Song::find($id);
  }

  public function create($input)
  {
    // Create new Song
    $song = new Song($input);

    // Get the current user
    $user = \Auth::user();

    // Save the post
    $user->songs()->save($song);

    // Return the post
    return $song;
  }

  public function update($id)
  {
    $song = $this->find($id);

    $song->save(\Input::all());

    return $song;
  }

  public function delete($id)
  {
    return Song::destroy($id);
  }

}
