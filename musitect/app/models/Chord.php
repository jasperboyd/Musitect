<?php 
use Eloquent;

class Chord extends Word { 

	protected $guarded = array();

	public static $rules = array();
	
	public function word (){ 
		this->belongsTo('Word');
	} 
	
	public function keys()
    {
        return $this->belongsToMany('Key');
    }
	
} 