<?php

use Magniloquent\Magniloquent\Magniloquent;

class Song extends Magniloquent {

  /**
* Properties that can be mass assigned
*
* @var array
*/
  protected $fillable = array('title');

  /**
* Validation rules
*/
  public static $rules = array(
    "save" => array(
      'title' => 'required', 
      'user_id' => 'required|numeric'
    ),
    "create" => array(),
    "update" => array()
  );

  /**
  * Factory
  */
  public static $factory = array(
    'title' => 'string',
    'body' => 'text',
    'user_id' => 'factory|User',
  );

  /**
* User relationship
*/
  protected static $relationships = array(
        'users' => array('belongsTo', 'User'),
        'phrases' => array('hasMany', 'Phrase'),
    );
}