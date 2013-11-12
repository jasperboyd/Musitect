<?php

use Eloquent;

use LaravelBook\Ardent\Ardent;

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Ardent implements UserInterface, RemindableInterface {

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
    	'username'              => 'required|between:4,16',
    	'email'                 => 'required|email',
    	'password'              => 'required|alpha_num|between:4,8|confirmed',
    	'password_confirmation' => 'required|alpha_num|between:4,8',
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
		$this->attributes['password'] = Hash::make($value);
	}
}