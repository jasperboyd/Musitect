<?php namespace Musitect\Storage\Phrase;

interface PhraseRepository {

  public function all();

  public function find($id);

  public function create($input);

  public function update($input);

  public function delete($id);
}
