<?php

class AjaxController extends BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ajax
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ajax/create
	 *
	 * @return Response
	 */
	public function postRequest()
	{
		
		$input = array_filter(Input::except('_token'),function($val){
			return $val;	
		});
		// Check category exists
		$category = Category::where('slug','=',$input['slug'])->first();
		if(is_null($category)){
			return Response::json(array('status' => 'error', 'text' => 'Category '.Config::get('message.not_found')));
		}
		// check product exists
		$product = Product::where('alias','=',$input['alias'])->first();
		if(is_null($product)){
			return Response::json(array('status' => 'error', 'text' => 'Product '.Config::get('message.not_found')));
		}
		$user_id =  Auth::check() ? Auth::id() : 0;
		$request  =  new Requests(array('request_email' => $input['request_email'],'request_comment' => $input['request_comment']));
		$request->user_id = $user_id;
		$request->product_id = $product->id;
		$request->category_id = $category->id;
		if($request->save()){
			return Response::json(array('status' => 'success' , 'text' => 'Request quote '.Config::get('message.success')));	
		}
		
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ajax
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /ajax/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postTypehead()
	{
		//print_r(Input::all());
		
		$term = Input::get('query');
		$slug =Input::get('slug');
		$category = array();
		//$where = "(name like '%".$term."%' or short_discription like '%".$term."%' )";
		$where = " name like '%".$term."%'";
		if($slug != ''){
			$category = Category::where('slug','=',$slug)->first();
			if(!is_null($category)){
				$where .= " and category_id = ".$category->id;
			}
			
		}
		
		
		$products = Product::select('id','alias','name')
							->whereRaw($where)
							->get()->toArray();
		//print_r($products);
		/*$array = [[ "value" => 1 , "text" => "Amsterdam"   , "continent" => "Europe"],
				  [ "value" => 2 , "text" => "London" , "continent" => "Europe"]];*/
		
		echo json_encode($products);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /ajax/{id}/edit
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
	 * PUT /ajax/{id}
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
	 * DELETE /ajax/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}