<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

	/**
	 * get the unique identifier for the user
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		// Implement getAuthIdentifier() method.
		return $this->getKey();
	}

	public function getAuthPassword()
	{
		// Implement getAuthPassword() method.
		return $this->password;
	}

	public function getEmailForPasswordReset()
	{
		// Implement getEmailForPasswordReset() method.
		return $this->email;
	}
}
