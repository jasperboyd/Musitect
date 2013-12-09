<?php

use Magniloquent\Magniloquent\Magniloquent;

class Chord extends Magniloquent {
	protected $fillable = ['phrase_id', 'chord']; 

	/**
	* Validation rules
	*/
    public static $rules = array(
    	"save" => array(
      	   'chord' => 'required',
     	   'phrase_id' => 'required|numeric'
        ),
    	"create" => array(),
    	"update" => array()
    );

    /**
    * Factory
    */
    public static $factory = array(
    	'chord' => 'string',
    	'phrase_id' => 'factory|Phrase',
    );

    /**
    * User relationship
    */
    protected static $relationships = array(
        'phrase' => array('belongsTo', 'Phrase'),
    );
} 