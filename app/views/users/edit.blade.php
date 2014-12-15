<!DOCTYPE html>
<html lang="en">
<head> 
 <title>Account Login</title> 
  @include('layouts.base')
</head>
<body>


 @include('layouts.topbar')
  <section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Edit Profile</h2>
               
			</div>
		</div>
	</section><!-- end post-wrapper-top -->
 
<section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
                <div class="row">
                   <div class="blog-masonry">
                        <div class="col-md-6">
							<div class="doc">
                            	
                               	{{ Form::open(array('url' => 'users/update', 'method' => 'post' ,'name' => 'updateform'))}}
                                 @if (Session::has('flash_error'))  
                                 <div class="alert alert-danger">
                                  <a href="#" class="alert-link">{{Session::get('flash_error')}}</a>
                                </div>
                                @endif
                                 @if (Session::has('flash_success'))
                                <div class="alert alert-success">
                                  <a href="#" class="alert-link">{{Session::get('flash_success')}}</a>
                                </div>
                                @endif
                                <div class="form-group">                                  
                                    {{Form::label('firstname', 'First Name')}}
                                    {{Form::text('first_name',$user->first_name,array('class' =>'form-control' ,'required' => true )) }}                        
                                  </div>
                                  <div class="form-group">
                                   {{Form::label('lastname', 'Last Name')}}
                                   {{Form::text('last_name',$user->last_name,array('class' =>'form-control' ,'required' => true )) }}                        
                                  </div>
                                  <div class="form-group">
                                   {{Form::label('email', 'Email Address')}}
                                    {{Form::email('email',$user->email,array('class' =>'form-control' ,'required' => true )) }}                        
                                  </div>
                                  <div class="form-group">
                                   {{Form::label('newpassword', 'New Password')}}
                                   <input type="password" name="password" class="form-control" placeholder="Keep blank for no update" >
                                  </div>
                                  <div class="form-group">
                                   {{Form::label('newpasswordconfirm', 'New Password Confirmation')}}
                                   <input type="password" name="password_confirmation" class="form-control" placeholder="Keep Blank for no update" >
                                               
                                  </div>
                                 {{Form::submit('Update',array('class' => 'btn btn-primary'))}}
                                 {{HTML::link('home','Back',array('class' => 'btn btn-primary'))}}
                                {{Form::close()}}
                            </div>
                            
                            <div class="clearfix"></div>
                           
                           
                                 
							
                        </div><!-- end col-lg-12 -->
					</div><!-- end blog-masonry -->
            	</div><!-- end row --> 
            </div><!-- end content -->
            
		
    	</div><!-- end container -->
    </section><!--end white-wrapper -->
      
@include('layouts.footer')
        
@include('layouts.scripts')


  </body>
</html>