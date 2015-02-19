<?php

class UsersController extends \BaseController {
	public $user;
	
	 public function __construct(User $user)
    {
        $this->beforeFilter('csrf', array('on' => 'post'));

        // Authentication filter      
        $this->beforeFilter('auth',array('except' => array('getSignin','postLogin','postStore','getSignup')));

        //Initialize User modal
        $this->user = $user;  
    }
	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function getSignin()
	{
		return View::make('users.signin');
	}
	
	public function getSignup($type='user')
	{
		if($type == 'user'){
			$type = 4;
			$account_name = "User";
		}
		else if($type == 'distrubutor'){
			$type = 3;
			$account_name = "Distrubutor";
		}
		else if($type == 'OEM'){
			$type = 2;
			$account_name = "Manufacturer";
		}
		
		return View::make('users.signup',compact('type','account_name'))
					->with('firm_type',['' => 'Select Firm']+Config::get('d3.firm_type'))
					->with('p_research_area',['' => 'Select Primary Area']+Config::get('d3.primary_research_area'))
					->with('source_of_fund',['' => 'Select Source of fund']+Config::get('d3.source_of_fund'))
					->with('company_type',['' => 'Select Company']+Config::get('d3.company_type'));
	}

	/**
     * postSignin
     */
    public function postLogin()
    {
		if(Input::has('remember_me')&&Input::get('remember_me') == 1){
		 if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password'),'type' => Input::get('type')],true)) {
			
            return Redirect::to('/')
                ->with('flash_success', 'You have successfully logged in.');
        }	
			
		}
		else {
			
		 if (Auth::attempt(['email' => Input::get('email'), 'password' => Input::get('password'),'type' => Input::get('type')])) {
			
            return Redirect::to('/')
                ->with('flash_success', 'You have successfully logged in.');
        }	
		}
       
		  return Redirect::to('users/signin')
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
                return Redirect::to('/users/signup')
                        ->withInput()
                        ->withErrors($validation)
                        ->with('flash_error','There were validation errors.');
        }
		$input = array('type'=>Input::get('type'),'first_name' =>Input::get('name'),'email' => Input::get('email'),'password' =>Input::get('password'),'terms_n_policy' => Input::get('terms_n_policy'));
		 
		 $user_info = array_filter(
            Input::except('_token','password_confirmation','type','name','email','password','terms_n_policy'),
            function ($val) {
                return !empty($val);
            }
        );
		
		$split_email = explode("@",$input['email']);
		/*$user = User::where('username','=',$split_email[0])->first();
		if(is_null($user)){
				
		}*/
		$input['username'] = $split_email[0];
		
		// below line commented becuase by setPasswordAttribute method in admin user model
		//$input['password'] = Hash::make($input['password']);
		
		$user = new User($input);        
        $user->save();
		$user_id = $user->id;
		// insert user info which is associated with signup user.
		$info = new UserInfo($user_info);
		$info->user_id = $user_id;
		$info->save();
		$user->addRole(Input::get('type'));
		$url = '/users/signup';
		if(Input::get('type') == 2)
		$url .= '/OEM'; 
		if(Input::get('type') == 3)
		$url .= '/distrubutor'; 
        return Redirect::to($url)
            ->with( 'flash_success','User has been created.Login with email & password!');
            
			
	}
	
	
	 

	/**
     * getLogout
     */
    public function getLogout()
    {
        Auth::logout();

        return Redirect::to('/users/signin')
            ->with('flash_success', "You have successfully logged out.");
    }
	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit()
	{
		 $user = Auth::user();     
        return View::make('users.edit',compact('user'))
					 ->with('logged',$user)
                     ->with('action_type','edit');                    
                    
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postUpdate()
	{
		$update_rules = array();
		$update_rules = array(
								'first_name' => 'required',
								'last_name' => 'required'
							 );
        $input = array(
						'first_name' => Input::get('first_name'),
						'last_name' => Input::get('last_name'),
						'email' => Input::get('email')
						);
		
        if(Input::has('password')){
            $update_rules = array(  
					'first_name' => 'required',
					'last_name' => 'required',                  
                    'password' => 'required|alpha_num|between:6,12',
                    'new_password' => 'required|alpha_num|between:6,12|confirmed',
                    'new_password_confirmation' => 'required|alpha_num|between:6,12'
            );
			// below line commented becuase by setPasswordAttribute method in admin user model
            //$input['password'] = Hash::make(Input::get('new_password'));
			$input['password'] = Input::get('new_password');
        }
       if(Input::get('email') != Auth::user()->email){
			$update_rules['email'] = 'required|email|unique:users';  
	   }
       $validation = Validator::make(Input::all(), $update_rules);

        if(!$validation->passes()) {
                return Redirect::to('/users/edit')                        
                        ->withErrors($validation)
                        ->with('flash_error','There were validation errors.');
        }

        if(Input::has('password')){
             if (!Auth::attempt(['id' => Auth::id(), 'password' => Input::get('password')])) {
                    return Redirect::to('/users/edit')                        
                        ->withErrors($validation)
                        ->with('flash_error','Please enter valid current password');
            }            
        }       
                
        $user = User::find(Auth::id());
        $user->update($input);
         if($user->save()){
            return Redirect::to('/users/edit')
            ->with( 'flash_success','User profile updated successfully.')
            ->withInput();
        }
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