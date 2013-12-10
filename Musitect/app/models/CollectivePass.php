<?php

use Magniloquent\Magniloquent\Magniloquent;

class CollectivePass extends Magniloquent {
	
    protected $table = 'collective_passes';
	protected $guarded = array('id');
    protected $fillable = array('user_id', 'collective_id', 'role');
	
	/**
	* Validation rules
	*/
    public static $rules = array(
    	"save" => array(
     	   'user_id' => 'required|numeric',
           'collective_id' => 'required|numeric', 
           'role' => 'required|numeric'
        ),
    	"create" => array(),
    	"update" => array()
    );

    /**
    * Factory
    */
    public static $factory = array(
    	'user_id' => 'numeric|User',
        'collective_id' => 'numeric|Collective'
    );
    
    /**
    * User relationship
    */
    protected static $relationships = array(
        'collective' => array('belongsTo', 'Collective'),
        'user' => array('hasOne', 'User')
    );

    public function scopeUserPasses($query){
        return $query->where('user_id', '=', Auth::user()->id);
    }

    public function hasUser($userid){ 

    }
} 