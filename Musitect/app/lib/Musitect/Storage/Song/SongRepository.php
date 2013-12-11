<?php namespace Musitect\Storage\Song;

interface SongRepository {

  public function all();

  public function find($id);

  public function setCollective($collectiveid, $songid);

  public function create($input);

  public function update($input);

  public function delete($id);
}
