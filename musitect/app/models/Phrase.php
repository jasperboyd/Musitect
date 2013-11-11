<?php

use Eloquent;

class Phrase extends Song {
	
	protected $guarded = array('line', 'id');
	
	public function words()
    {
        return $this->hasMany('Word');
    }
}
