<?php

use Eloquent;

class Library extends User {
	
  //Mass-assignable
  protected $fillable = array('title'); 

  //Non-mass-assignable
  protected $guarded = array('id', 'author_id');

  //Validation rules
	public static $rules = array(
      'title' => 'required|between:1,200',
      'author_id' => 'required|numeric'
    );

  /* Factory Muff Rules
    */
    public static $factory = array(
        'title' => 'string',
        'author_id' => 'factory|User'

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
