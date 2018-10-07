<?php
namespace Enfa;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface as UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface as RemindableInterface;

use Illuminate\Foundation\Auth\User;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable {


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
		protected $fillable = [
				'user_id','name', 'email', 'password',

		];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

}
