<?php namespace Musitect\Storage\Phrase;

interface PhraseRepository {

  public function all();

  public function find($id);

  public function create($input, $songid);

  public function update($input);

  public function delete($id);
}
