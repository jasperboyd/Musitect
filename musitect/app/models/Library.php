<?php

class Library extends User {
	protected $guarded = array();

	public static $rules = array();

	public function user()
  	{
    	return $this->belongsTo('User');
  	}

  	public function songs() 
  	{ 
  		return $this->hasMany('Song');
  	}
}
