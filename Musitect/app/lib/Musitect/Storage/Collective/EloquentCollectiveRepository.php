<?php namespace Musitect\Storage\Collective;

use Collective;

class EloquentCollectiveRepository implements CollectiveRepository {

  public function all()
  {
    return Collective::all();
  }

  public function find($id)
  {
    return Collective::find($id);
  }

  public function create($input)
  {
    // Create new collective
    $collective = new Collective($input); 

    $collective->save();

    return $collective; 
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