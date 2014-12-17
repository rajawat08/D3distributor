<?php

class Product extends \Eloquent {
	
	protected $table = 'products';                                         // Database table	

	public static $rules = [];                                            // Variable having validation rules
    
	protected $guarded = [];
}