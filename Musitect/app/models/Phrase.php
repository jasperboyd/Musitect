<?php

use Magniloquent\Magniloquent\Magniloquent;

class Phrase extends Magniloquent {
	
	protected $fillable = array('phrase');
	
	/**
	* Validation rules
	*/
    public static $rules = array(
    	"save" => array(
      	   'phrase' => 'required',
     	   'song_id' => 'required|numeric'
        ),
    	"create" => array(),
    	"update" => array()
    );

    /**
    * Factory
    */
    public static $factory = array(
    	'phrase' => 'string',
    	'song_id' => 'factory|Song',
    );
    
    /**
    * User relationship
    */
    protected static $relationships = array(
        'songs' => array('belongsTo', 'Song'),
    );
} 