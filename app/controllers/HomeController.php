<?php

class HomeController extends BaseController {
	
	 public function __construct(User $user)
    {
        $this->beforeFilter('csrf', array('on' => 'post'));

        // Authentication filter      
        $this->beforeFilter('auth');

        //Initialize User modal
        $this->user = $user;  
    }

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function getIndex()
	{
		$user_info = Auth::user();
		
		switch($user_info->type){
			case 2:
				$user_info->type_name = 'Manufaturer';
				break;
			case 3:
				$user_info->type_name = 'Distributor';
				break;
			case 4:
				$user_info->type_name = 'Normal User';
				break;
			default;
		}
		return View::make('users.home')
		->with('logged',$user_info);
	}

}
