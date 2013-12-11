<?php namespace Musitect\Storage\Collective;

interface CollectiveRepository {

  public function all();

  public function find($id);
 
  public function saveAll($collective, $user);

  public function create($input, $userid);

  public function addUser($collectiveid, $userid);

  public function update($input);

  public function delete($id);
}
