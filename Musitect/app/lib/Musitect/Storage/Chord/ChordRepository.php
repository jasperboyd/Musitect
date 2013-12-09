<?php namespace Musitect\Storage\Chord;

interface PhraseRepository {

  public function all();

  public function find($id);

  public function create($input, $phraseid);

  public function update($input);

  public function delete($id);
}
