<!DOCTYPE html>
<html lang="en">
<head> 
 <title>Account Login</title> 
  @include('layouts.base')
</head>
<body>

<div class="animationload">
<div class="loader">Loading...</div>
</div>
 @include('layouts.topbar')
  <section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Login</h2>
                <ul class="breadcrumb pull-right">
                    <li>{{ HTML::link('/', 'Home', array())}}</li>
                    <li>Login</li>
                </ul>
			</div>
		</div>
	</section><!-- end post-wrapper-top -->
    
    <section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
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
                   <div class="col-md-6">
 						<div class="widget">
                        	<div class="title">
                            	<h3>Login Your Account</h3>
                            </div><!-- end title -->                                
                               {{ Form::open(array('url' => 'users/login', 'method' => 'method' ,'name' => 'loginform'))}}
                                   <div class="form-group">
                                   <div class="form-group" >
                                	{{Form::select('type', array('2' => 'Manufacturer', '3' => 'Distributor', '4' => 'User'),4,array('class' => 'form-control','required' => true))}}
                                </div>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>                  
                                            {{Form::text('email', '', array('class' => 'form-control' , 'placeholder' => 'Username','required' => true))}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          
                                            <input type="password" name="password" class="form-control" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label> 
                                                {{Form::checkbox('remember_me', '1')}} Remember me
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                    
                                     {{ Form::submit('Sign in',array('class' => 'btn btn-primary'))}}
                                    </div>
                                {{Form::close()}}
                        </div><!-- end widget -->
					</div><!-- end col-md-6 -->
                   <div class="col-md-6">
 						
					</div><!-- end col-md-6 -->
            	</div><!-- end row --> 
            </div><!-- end content -->
    	</div><!-- end container -->
    </section><!--end white-wrapper -->

      
@include('layouts.footer')
        
@include('layouts.scripts')


  </body>
</html>