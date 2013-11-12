<?php

use Eloquent;

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	//Attributes that are Mass Assignable
	protected $fillable = array('username', 'email', 'password', 'password_confirmation'); 

	//Hidden Completely
	protected $guarded = array('id');

	//Hidden from JSON
	protected $hidden = array('password');

	/**
	* Validation rules
	*/
  	public static $rules = array(
    	"save" => array(
    	  'username' => 'required|min:4',
      	  'email' => 'required|email',
      	  'password' => 'required'
    	),
    	"create" => array(
     	  'username' => 'unique:users',
      	  'email' => 'unique:users',
          'password' => 'confirmed',
          'password_confirmation' => 'required'
    ),
    	"update" => array()
  	);

  	/**
	* Auto purge redundant attributes
	*
	* @var bool
	*/
    public $autoPurgeRedundantAttributes = true;

    /**
    * Get the Users Library of Songs
    *
 	*/
    public function libraries(){
		return $this->hasMany('libraries');
	}

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public function setPasswordAttribute($value)
	{
		$this->arttributes['password'] = Hash::make($value);
	}
}