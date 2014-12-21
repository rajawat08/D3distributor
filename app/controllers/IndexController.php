<?php

class IndexController extends \BaseController {
	
	public function __construct()
    {
        //$this->beforeFilter('csrf', array('on' => 'post'));
		
		
        // Authentication filter      
       // $this->beforeFilter('auth');

      View::composer('/', function($view)
		{	
			$category = Category::where('level','=',0)->lists('slug','id');
			print_r($category);
			exit;
			$view->with('gbl_category', $category);
		});
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
			
			return Redirect::to('/home');
		}
		return View::make('index');
	}

	

}