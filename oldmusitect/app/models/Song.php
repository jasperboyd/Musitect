<?php

use Eloquent;

class Song extends Eloquent {

  protected $fillable = array('title');
  
  protected $guarded = array('id'); 

  //Validation rules
  public static $rules = array(
      'title' => 'required|between:1,200'
    );

  public function library()
  {
    return $this->belongsTo('Library')
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