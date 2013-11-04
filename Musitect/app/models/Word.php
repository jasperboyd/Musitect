<?php

class Word extends Phrase {
	
	protected $guarded = array();

	public static $rules = array();
	
	public function phrase(){ 
		this->belongsTo('Phrase');
	} 
	
	public function chord()
    {
        return $this->hasOne('Chord');
    }
}
