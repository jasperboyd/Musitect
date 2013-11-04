<?php

class Word extends Phrase {
	
	protected $guarded = array();

	public static $rules = array();
	
	public function Phrase (){ 
		this->belongsTo('Phrase');
	} 
}
