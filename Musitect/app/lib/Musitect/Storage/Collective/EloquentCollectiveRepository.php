<?php namespace Musitect\Storage\Collective;

use Collective;
use User;

class EloquentCollectiveRepository implements CollectiveRepository {

  public function all()
  {
    return Collective::all();
  }

  public function find($id)
  {
    return Collective::find($id);
  }

  public function saveAll($collective, $user){
    $collective->save(); 

    $collective->users()->save($user); 

    $user->collectives()->save($collective);

    return $collective;
  }

  public function create($input, $userid)
  {
    // Create new collective
    $collective = new Collective($input);

    $user = User::Find($userid); 

    return $this->saveAll($collective, $user); 
  }

  public function addUser($collectiveid, $userid){ 
      
      $user = User::Find($userid); 
      
      $collective = $this->find($collectiveid);

      $members = $collective->member_number; 

      $collective->member_number = $members + 1; 

      return $this->saveAll($collective, $user); 
  }

  public function update($id)
  {
    $collective = $this->find($id);

    $collective->save(\Input::all());

    return $collective;
  }

  public function delete($id)
  {
    return Collective::destroy($id); ;
  }

}