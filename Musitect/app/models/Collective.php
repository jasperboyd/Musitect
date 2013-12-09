<?php

use Magniloquent\Magniloquent\Magniloquent;

class Collective extends Magniloquent {
	
	protected $fillable = array('name', 'founder');
	
	/**
	* Validation rules
	*/
    public static $rules = array(
    	"save" => array(
     	   'name' => 'required',
           'founder' => 'required'
        ),
    	"create" => array(
            'name' => 'unique:collectives'
        ),
    	"update" => array()
    );

    /**
    * Factory
    */
    public static $factory = array(
    	'name' => 'string',
        'founder' => 'string'
    );
    
    /**
    * User relationship
    */
    protected static $relationships = array(
        'users' => array('belongsToMany', 'User'),
        'songs' => array('hasMany', 'Song')
    );
} 