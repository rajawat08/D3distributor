<?php

class IndexController extends \BaseController {
	
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
			
			return Redirect::to('/home');
		}
		return View::make('index');
	}

	

}