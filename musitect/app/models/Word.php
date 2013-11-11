<?php

class Word extends Phrase {
	
	protected $guarded = array('id');
	
	public function phrase(){ 
		this->belongsTo('Phrase');
	} 
	
	public function chord()
    {
        return $this->hasOne('Chord');
    }
}
