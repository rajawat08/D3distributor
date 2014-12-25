<?php namespace Pingpong\Admin\Entities;

use Pingpong\Presenters\Model;

class Product extends Model {
		
	protected $table = 'products';                                         // Database table	

	public static $rules = [											// Variable having validation rules
	        'name' => 'required',
	        //'alias' => 'required|unique:products,alias',
			'price' => 'required|numeric',			
			'category_id' => 'required'
		];                                            
    
	protected $guarded = [];
}