<?php
class Product extends \Eloquent {
	
	protected $table = 'products';                                         // Database table	

	public static $rules = [											// Variable having validation rules
	        'name' => 'required',
	        //'alias' => 'required|unique:products,alias',
			'price' => 'required|numeric',			
			'category_id' => 'required'
		];                                      
    
	protected $guarded = [];
	
	public function images(){
		return $this->hasMany('ProductImage');	
	}
	
	public function image(){
		return $this->hasOne('ProductImage');	
	}
	
	public function category(){
		return $this->belongsTo('Category');
	}
	
	public function latestProduct()
    {
        return $this->hasOne('Product', 'category_id', 'category_id')->with('image','category')->latest();
    }
}