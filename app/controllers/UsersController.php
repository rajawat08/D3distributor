<?php

class UsersController extends \BaseController {
	public $user;
	
	 public function __construct(User $user)
    {
        $this->beforeFilter('csrf', array('on' => 'post'));

        // Authentication filter      
        $this->beforeFilter('auth',array('except' => array('getAccount','postLogin','postStore')));

        //Initialize User modal
        $this->user = $user;  
    }
	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function getAccount()
	{
		return View::make('users.login_signup');
	}

	/**
     * postSignin
     */
    public function postLogin()
    {
		if(Input::has('remember_me')&&Input::get('remember_me') == 1){
		 if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password'),'type' => Input::get('type')],true)) {
			
            return Redirect::to('/home')
                ->with('flash_success', 'You have successfully logged in.');
        }	
			
		}
		else {
		 if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password'),'type' => Input::get('type')])) {
			
            return Redirect::to('/home')
                ->with('flash_success', 'You have successfully logged in.');
        }	
		}
       
		  return Redirect::to('users/account')
            ->with('flash_error', 'Your username/password combination was incorrect!')
            ->withInput();
    }

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function postStore()
	{
		//print_r(Input::all());
		$validation = Validator::make(Input::all(), User::$rules);
		if(!$validation->passes()) {
                return Redirect::to('/users/account')
                        ->withInput()
                        ->withErrors($validation)
                        ->with('flash_error','There were validation errors.');
        }
		 $input = array_filter(
            Input::except('_token','password_confirmation'),
            function ($val) {
                return !empty($val);
            }
        );
        $input['password'] = Hash::make($input['password']);
		$user = new User($input);        
        $user->save();
        return Redirect::to('/users/account')
            ->with( 'flash_success','User has been created.Login with email & password ');
            
			
	}
	
	
	 

	/**
     * getLogout
     */
    public function getLogout()
    {
        Auth::logout();

        return Redirect::to('/users/account')
            ->with('flash_success', "You have successfully logged out.");
    }
	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
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
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}