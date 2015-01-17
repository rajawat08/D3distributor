<?php

class IndexController extends BaseController {
	
	public function __construct()
    {
        //$this->beforeFilter('csrf', array('on' => 'post'));
		
		
        // Authentication filter      
       // $this->beforeFilter('auth');

     
    }

	/**
	 * Display a listing of the resource.
	 * GET /index
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		if(Auth::user()){
			
			//return Redirect::to('/');
		}
		
		$categories =  Category::all()->lists('name','slug');
		$products = Product::with('latestProduct','image','category')->groupby('category_id')->get();
		/*$products = DB::table('products as p')
						->select('p.*')
						->join(DB::raw("(SELECT category_id, MAX(id) id FROM products GROUP BY category_id) as _p"),
						 function ($join) {
							 $join->on('p.id', '=', '_p.id')->on('p.category_id', '=', '_p.category_id');
						 })
						->orderBy('id', 'asc')
						->get();*/
		//print_r($products);exit;
		//return View::make('index');
		return View::make('index1')
					->with('latests',$products)
					->with('categories',$categories);
	}
	
	public function getSearch(){
		$where = '';
		$search  =  Input::all();
		if(count($search)==0){
			return Redirect::to('/');
		}
		$category = Category::where('slug','=',$search['slug'])->first();
		if(is_null($category)){
			return View::make('layouts.404');
		}
		//print_r($category);
		if(Input::has('query')){
			$where = "name like '%".$search['query']."%' or short_discription like '%".$search['query']."%' ";
			$products = Product::with('category','image')
							->where('category_id','=',$category->id)
							->whereRaw($where)
							->get();
		}
		else {
			$products = Product::where('category_id','=',$category->id)->get();
		}
		$categories =  Category::all()->lists('name','slug');
		
		return View::make('search')
					->with('search',$search)
					->with('products',$products)
					->with('categories',$categories);
		
	 }
	 
	 public function compare(){
		 
		//print_r(Input::all());
		$aliases = Input::get('alias');
		$aliases = explode(',',$aliases);		
		$where = "alias IN(";
		for($i = 0 ; $i<count($aliases);$i++){
				$where .= "'".$aliases[$i]."',";
		}
		$where = trim($where,",");
		$where .= ")";
		//echo $where;exit;
		$products = Product::select("id","name","short_discription","quantity","price","available","discription","alias")->whereRaw($where)->get()->toArray();
		$tags = $products;
		
		$product_column_wise = call_user_func_array('array_merge_recursive', $products);
		
			
		$categories =  Category::all()->lists('name','slug');
	
		
		
		return View::make('shop.compare')
					->with('compared_products',$product_column_wise)
					->with('tags',$tags)
					->with('categories',['' => 'All']+$categories);
					
	 }
	

}