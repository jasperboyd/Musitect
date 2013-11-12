<?php

use Eloquent;

class Library extends User {
	
  //Mass-assignable
  protected $fillable = array('title'); 

  //Non-mass-assignable
  protected $guarded = array('id');

  //Validation rules
	public static $rules = array(
      'title' => 'required|between:1,200'
    );

	public function user()
  {
   	return $this->belongsTo('User');
 	}

  public function songs() 
  { 
  		return $this->hasMany('Song');
  }
}
