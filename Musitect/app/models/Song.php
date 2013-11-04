<?php

use Eloquent;
use LaravelBook\Ardent\Ardent;

class Song extends Eloquent {

  protected $fillable = array('body');
  
    public static $rules = array(
        'title' => 'required',              // Post tittle
        'slug' => 'required|alpha_dash',    // Post Url
        'content' => 'required',            // Post content (Markdown)
        'user_id' => 'required|numeric',  // Author id
    );
    
    /**
     * Array used by FactoryMuff to create Test objects
     */
    public static $factory = array(
        'title' => 'string',
        'slug' => 'string',
        'content' => 'text',
        'user_id' => 'factory|User', // Will be the id of an existent User.
    );

  public function user()
  {
    return $this->belongsTo('User, user_id');
  }
  
  public function phrases()
  {
  	return $this->hasMany('Phrase');
  } 
  
  /**
     * Get formatted post date
     *
     * @return string
     */
    public function postedAt()
    {
        $date_obj =  $this->created_at;
 
        if (is_string($this->created_at))
            $date_obj =  DateTime::createFromFormat('Y-m-d H:i:s', $date_obj);
 
        return $date_obj->format('d/m/Y');
    }
  
}