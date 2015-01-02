<?php

class ProductImage extends \Eloquent {
	protected $table = 'product_images';                                         // Database table	
	public $timestamps = false;
	public static $rules = [];                                            
    
	protected $guarded = [];
}