<?php namespace App\Models;

use Eloquent;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use LaravelBook\Ardent\Ardent;

class User extends Ardent implements UserInterface, RemindableInterface {

/**
* The database table used by the model.
*
* @var string
*/
protected $table = 'users';

/**
* The attributes excluded from the model's JSON form.
*
* @var array
*/
protected $hidden = array('password');

/**
*	Don't save the confirmed password
*
*/ 

public $autoPurgeRedundantAttributes = true;

/**
 * Ardent validation rules
 */
public static $rules = array(
  'name' => 'required|between:4,16',
  'email' => 'required|email',
  'password' => 'required|alpha_num|min:8|confirmed',
  'password_confirmation' => 'required|alpha_num|between:4,8',
);

/**
* Prevents users from changing their ID etc. 
*
*/ 

protected $fillable = array('username', 'email');

protected $guarded = array('id', 'password');


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

/**
* Method relationship with songs
*
*/ 
public function songs()
{ 
	return $this->hasmany('Song'); 
} 

}