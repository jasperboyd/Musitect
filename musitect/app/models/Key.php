<?php

use Jenssegers\Mongodb\Model as Eloquent;

class Key extends Eloquent {
	protected $guarded = array();

	public static $rules = array();
	
	public function chords()
    {
        return $this->hasMany('Chord');
    }
}
