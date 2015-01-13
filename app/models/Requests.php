<?php

class Requests extends \Eloquent {
	
	protected $table = 'requests';                                         // Database table	
	
	public static $rules = [
			'request_email' => 'required|email',
			'request_comment' => 'required'
	];                                            
    
	protected $guarded = [];
	
}