<?php 

class Chord extends Word { 

	protected $guarded = array('id');

	protected $fillable = array('Chord');

	//Validation rules
	public static $rules = array(
      'Chord' => 'required|between:1,6'
    );
	
	public function word()
	{ 
		return $this->belongsTo('Word');
	} 
	
	public function keys()
    {
        return $this->belongsToMany('Key');
    }
	
} 