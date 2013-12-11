<?php namespace Musitect\Storage\Song;

use Song;
use Collective;

class EloquentSongRepository implements SongRepository {

  public function all()
  {
    return Song::all();
  }

  public function find($id)
  {
    return Song::find($id);
  }

  public function setCollective($collectiveid, $songid)
  { 
      $collective = Collective::find($collectiveid);
      $song = $this->find($songid); 
      
      $song->collective()->associate($collective);
      $collective->songs()->save($song);

      return $song; 
  }

  public function create($input)
  {
    $song = new Song($input);

    $user = \Auth::user();

    $user->songs()->save($song);

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
