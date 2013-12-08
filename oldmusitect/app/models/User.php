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
    	'password'              => 'required|between:4,20|confirmed',
    	'password_confirmation' => 'required|between:4,20',
  	);

  	/* Factory Muff Rules
  	*/
  	public static $factory = array(
        'username' => 'string',
        'email' => 'string',
        'password' => 'password',
        'password_confirmation' => 'password' 
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

	public function setPasswordConfirmationAttribute($value)
	{
		$this->attributes['password_confirmation'] = Hash::make($value);
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