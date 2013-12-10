<?php

use Magniloquent\Magniloquent\Magniloquent;

class Collective extends Magniloquent {
	
	protected $guarded = array('id');
    protected $fillable = array('name', 'founder', 'founder_id', 'member_number');
	
	/**
	* Validation rules
	*/
    public static $rules = array(
    	"save" => array(
     	   'name' => 'required',
           'founder' => 'required',
           'founder_id' => 'required',
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
        'users' => array('belongsToMany', 'User'),
        'songs' => array('hasMany', 'Song'),
        'passes' => array('hasMany', 'CollectivePass')
    );
} 