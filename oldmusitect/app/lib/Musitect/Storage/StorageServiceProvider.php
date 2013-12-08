<?php 

namespace Musitect\Storage;
 
use Illuminate\Support\ServiceProvider;
 
class StorageServiceProvider extends ServiceProvider {
 
  public function register()
  {
    $this->app->bind(
      'Musitect\Storage\User\UserRepository',
      'Musitect\Storage\User\EloquentUserRepository'
    );
  }
 
}