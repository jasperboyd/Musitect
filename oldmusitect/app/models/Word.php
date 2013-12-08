<?php

class Word extends Phrase {
	
	protected $fillable = array('word'); 
	
	protected $guarded = array('id');
	
	public function phrase(){ 
		this->belongsTo('Phrase');
	} 
	
	public function chord()
    {
        return $this->hasOne('Chord');
    }
}
