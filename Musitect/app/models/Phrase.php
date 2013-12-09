<?php

use Magniloquent\Magniloquent\Magniloquent;

class Phrase extends Magniloquent {
	
	protected $fillable = array('phrase', 'chord');
	
	/**
	* Validation rules
	*/
    public static $rules = array(
    	"save" => array(
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
        'chord' => 'string', 
    	'song_id' => 'factory|Song'
    );
    
    /**
    * User relationship
    */
    protected static $relationships = array(
        'songs' => array('belongsTo', 'Song'),
    );
} 