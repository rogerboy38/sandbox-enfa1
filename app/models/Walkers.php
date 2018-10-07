<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class Walkers extends Eloquent implements UserInterface, RemindableInterface{

	use UserTrait, RemindableTrait, SoftDeletingTrait;

	protected $dates = ['deleted_at'];

    protected $table = 'walkers';

		/**
		 * The attributes that are mass assignable.
		 *
		 * @var array
		 */
		protected $fillable = [
				'id','name', 'email', 'password', 'is_active', 'rate', 'rate_count', 'picture', 'is_approved', 'is_available', 'first_name', 'last_name'

		];


}
