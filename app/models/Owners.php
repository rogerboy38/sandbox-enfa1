<?php
namespace	Enfa\Models;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Model;
use Eloquent; // ******** This Line *********
use DB;       // ******** This Line *********


use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Auth\Access\HandlesAuthorization;


class Owners extends Eloquent  implements UserInterface, RemindableInterface{



	use Notifiable;


	protected $dates = ['deleted_at'];

    protected $table = 'owners';

	  protected $fillable = ['owners'];

}
