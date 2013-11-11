<?php 

class Chord extends Word { 

	protected $guarded = array('id');

	protected $fillable = array('Chord');

	public static $rules = array();
	
	public function word()
	{ 
		return $this->belongsTo('Word');
	} 
	
	public function keys()
    {
        return $this->belongsToMany('Key');
    }
	
} 