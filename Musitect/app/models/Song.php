<?php

use Magniloquent\Magniloquent\Magniloquent;

class Song extends Magniloquent {

  /**
* Properties that can be mass assigned
*
* @var array
*/
  protected $fillable = array('body', 'title');

  /**
* Validation rules
*/
  public static $rules = array(
    "save" => array(
      'body' => 'required',
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
    'body' => 'text',
    'user_id' => 'factory|User',
  );

  /**
* User relationship
*/
  protected static $relationships = array(
        'users' => array('belongsTo', 'User'),
    );
}