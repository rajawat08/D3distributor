<?php namespace Pingpong\Admin\Validation\Product;

use Pingpong\Validator\Validator;

class Create extends Validator {

	public function rules()
	{
		return [
	        'name' => 'required',
	        'alias' => 'required|unique:products,alias',
			'price' => 'required|numeric',			
			'category_id' => 'required'
		];
	}
}