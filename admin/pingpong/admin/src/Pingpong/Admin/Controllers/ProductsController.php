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
		//print_r($products);
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
                return !empty($val) or empty($val);
            }
        );
		$images = array();
		if(!empty($input['images'])){
			$images = json_decode($input['images']);
			
		}	
		unset($input['images']);
		$input['user_id'] = \Auth::id();
		$input['alias'] = ucwords($input['name']);
		$input['alias'] = preg_replace(array('/\s{1,}/', '/[\t\n]/'), '-', $input['alias']);
		$input['alias'] .= ".html";
		$product = \Product::where('alias','=',$input['alias'])->first();
		if(!is_null($product)){
			 return $this->redirect('products.create')
                ->withInput()
                ->with('flash_error', 'Product Alias already exist, Enter different product name!');
		}
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
		try
        {
            $product = \Product::findOrFail($id);
			$category = \Category::lists('name','id');
			
            return $this->view('products.edit', compact('product'))
						->with('main_category',array('' => 'Select Category')+$category);
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
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
		 try
        {
            $validation = Validator::make($this->inputAll(), \Product::$rules);
			//print_r($this->inputAll());
			if (!$validation->passes()) {
				return $this->redirect('products.edit',$id)
					->withInput()
					->withErrors($validation)
					->with('flash_error', 'There were validation errors.');
			}
			
			 $input = array_filter(
            \Input::except('_token','files','_method'),
            function ($val) {
                return !empty($val) or empty($val);
            }
        );
		$images = array();
		if(!empty($input['images'])){
			$images = json_decode($input['images']);
			
		}
		unset($input['images']);
		//$input['available'] = isset($input['available']) ? $input['available'] : 0;
		
            $product = \Product::findOrFail($id);
			$input['name'] = trim($input['name']);
			$input['alias'] = ucwords($input['name']);
			$input['alias'] = preg_replace(array('/\s{1,}/', '/[\t\n]/'), '-', $input['alias']);
			$input['alias'] .= ".html";
			if($input['alias'] != $product->alias){
				$check_product = \Product::where('alias','=',$input['alias'])->first();
				if(!is_null($check_product)){
					 return $this->redirect('products.edit',$id)
						->withInput()
						->with('flash_error', 'Product Alias already exist, Enter different product name!');
				}
			}
			
		
            if($product->update($input)){				
			 foreach($images as $image){
			   $product_image = new \ProductImage(array('product_id' => $id, 'image_name' => $image));
			   $product_image->save();
			 }				 
			 return $this->redirect('products.index')
						 ->with('flash_success', 'Product "'.$product->name. '" Update successfully');
			}

           
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
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
		 try
        {
            $images = \ProductImage::where('product_id','=',$id)->lists('image_name');
			foreach($images as $image){
				$image_path = public_path()."/images/products/".$image;
				$image_thumb_path = public_path()."/images/products/thumbnail/".$image;
				if(\File::exists($image_path)){
					\File::delete($image_path);
					\File::delete($image_thumb_path);	
				}				
			}
			\Product::destroy($id);
			
            return $this->redirect('products.index')
						->with('flash_success', 'Product deleted successfully');
        }
        catch (ModelNotFoundException $e)
        {
            return $this->redirectNotFound();
        }
	}

}