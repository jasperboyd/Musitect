<?php namespace Musitect\Storage;

use Illuminate\Support\ServiceProvider;

class StorageServiceProvider extends ServiceProvider {

  public function register()
  {
    $this->app->bind(
      'Musitect\Storage\User\UserRepository',
      'Musitect\Storage\User\EloquentUserRepository'
    );
    $this->app->bind(
    	"Musitect\Storage\Song\SongRepository", 
    	"Musitect\Storage\Song\EloquentSongRepository"
    );
    $this->app->bind(
      "Musitect\Storage\Phrase\PhraseRepository", 
      "Musitect\Storage\Phrase\EloquentPhraseRepository"
    ); 
    $this->app->bind(
      "Musitect\Storage\Chord\ChordRepository", 
      "Musitect\Sotrage\Chord\EloquentChordRepository"
    ); 
  }

}