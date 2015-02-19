<?php

class UserInfo extends \Eloquent {
	protected $table = 'users_info';                                         // Database table	
	public $timestamps = false;
	public static $rules = [];                                            
    
	protected $guarded = [];
	
}