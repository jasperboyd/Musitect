<?php

use Eloquent;

class Phrase extends Song {
	protected $guarded = array();

	public static $rules = array();
	
	public function phrases()
    {
        return $this->hasMany('Phrase');
    }
}
