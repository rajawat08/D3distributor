<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /products
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /products/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /products
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /products/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($slug,$alias)
	{
		// Check for valid category slug
		$category = Category::where('slug','=',$slug)->first();
		if(is_null($category)){
			return View::make('layouts.404');
		}
		
		// Check for valid Product alias
		$product = Product::with('category','images')->where('alias','=',$alias)->first();
		if(is_null($product)){
			return View::make('layouts.404');
		}
		
		// Check product related with valid category
		if($category->id != $product->category->id){
			return View::make('layouts.404');
		}
		
		// Fetch related product
		$related_products = Product::with('category','image')
									->where('category_id','=',$category->id)
									->where('id','!=',$product->id)
									->get();
		
		return View::make('shop.product')
					->with('category',$category)
					->with('product',$product)
					->with('related_products',$related_products);
	}
	
	
	public function compare(){
		$categories =  Category::all()->lists('name','slug');
		return View::make('shop.compare')
					->with('compared_products',array())
					->with('tags',array())
					->with('categories',['' => 'All']+$categories);
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