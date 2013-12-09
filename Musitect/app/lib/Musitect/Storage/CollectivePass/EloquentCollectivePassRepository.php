<?php namespace Musitect\Storage\CollectivePass;

use CollectivePass;

class EloquentCollectivePassRepository implements CollectivePassRepository {

  public function all()
  {
    return CollectivePass::all();
  }

  public function find($id)
  {
    return CollectivePass::find($id);
  }

  public function create($input)
  {
    // Create new collectivepass
    $collectivepass = new CollectivePass($input); 

    $collectivepass->save();

    return $collectivepass; 
  }

  public function update($id)
  {
    $collectivepass = $this->find($id);

    $collectivepass->save(\Input::all());

    return $collectivepass;
  }

  public function delete($id)
  {
    return CollectivePass::destroy($id); ;
  }

}