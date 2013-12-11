<?php

use Magniloquent\Magniloquent\Magniloquent;

class Collective extends Magniloquent {
	
	protected $guarded = array('id');
    protected $fillable = array('name', 'founder', 'member_number');
	
	/**
	* Validation rules
	*/
    public static $rules = array(
    	"save" => array(
     	   'name' => 'required',
           'founder' => 'required',
           'member_number' => 'required'
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
        'songs' => array('hasMany', 'Song'),
        'users' => array('hasMany', 'User')
    );
} 