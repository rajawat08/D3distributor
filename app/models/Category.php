<?php

class Category extends \Eloquent {

	protected $table = 'categories';                                      // Database table	

	public static $rules = [];                                            // Variable having validation rules
    
	protected $guarded = [];
}