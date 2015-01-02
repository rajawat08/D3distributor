<?php namespace Pingpong\Admin\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Pingpong\Admin\Entities\Product;
use Pingpong\Admin\Entities\Category;
use Illuminate\Support\Facades\Validator;


class ProductsController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = \Product::with('images')->get();
		
		return $this->view('products.index',compact('products'));
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /products/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$category = Category::lists('name','id');
		 return $this->view('products.create')
					->with('main_category',array('' => 'Select Category')+$category);

	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{
		//app('Pingpong\Admin\Validation\Product\Create')
          //  ->validate($data = $this->inputAll());
		 
		 
		  
		
		   $validation = Validator::make($this->inputAll(), \Product::$rules);

        if (!$validation->passes()) {
            return $this->redirect('products.create')
                ->withInput()
                ->withErrors($validation)
                ->with('flash_error', 'There were validation errors.');
        }
		 $input = array_filter(
            \Input::except('_token','files'),
            function ($val) {
                return !empty($val);
            }
        );
		
		$images = json_decode($input['images']);
		
		unset($input['images']);
		
		$input['user_id'] = \Auth::id();
		
       $product = new \Product($input);
	   $product->save();
	   $product_id = $product->id;
	   foreach($images as $image){
		   $product_image = new \ProductImage(array('product_id' => $product_id, 'image_name' => $image));
		   $product_image->save();
	   }
        return $this->redirect('products.index');
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /products/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}