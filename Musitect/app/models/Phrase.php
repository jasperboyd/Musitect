<?php

use Magniloquent\Magniloquent\Magniloquent;

class Phrase extends Magniloquent {
	
	protected $guarded = array('id');
    protected $fillable = array('lyric', 'chord');
	
	/**
	* Validation rules
	*/
    public static $rules = array(
    	"save" => array(),
    	"create" => array(),
    	"update" => array()
    );

    /**
    * Factory
    */
    public static $factory = array(
    	'lyric' => 'string',
        'chord' => 'string', 
    	'song_id' => 'factory|Song'
    );
    
    /**
    * User relationship
    */
    protected static $relationships = array(
        'songs' => array('belongsTo', 'Song'),
        'user' => array('belongsTo', 'User')
    );

    public function scopeSong($query, $songid){
        return $query->where('song_id', '=', $songid);
    }
} 