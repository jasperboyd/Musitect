<?php 
use Eloquent;

class Chord extends Word { 

	protected $guarded = array();

	public static $rules = array();
	
	public function Word (){ 
		this->belongsTo('Word');
	} 
	
} 