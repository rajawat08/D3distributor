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
				<h2>Register</h2>
                <ul class="breadcrumb pull-right">
                    <li>{{ HTML::link('/', 'Home', array())}}</li>
                    <li>Register</li>
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
	<h3>Create An Account for <b>{{$account_name}}</b></h3>
    </div><!-- end title -->    
    {{ Form::open(array('url' => 'users/store', 'method' => 'post' ,'name' => 'registerform'))}}
                                
    <div class="form-group" >
        {{Form::select('type', array('' => '--Select User type--','2' => 'Manufacturer', '3' => 'Distributor', '4' => 'User'),$type,array('class' => 'form-control','required' => true , 'onchange' => 'changeSignup(this.value)'))}}
    </div>
    <div class="form-group">                                        
      {{ Form::text('name','',array('class' => 'form-control', 'placeholder' => "Name",'required' => true))}}
    </div>
    <div class="form-group">
    {{ Form::text('company_name','',array('class' => 'form-control', 'placeholder' => "Full name of company/organization/Institute",'required' => true))}}                                    
    </div>
      <div class="form-group">
                                {{ Form::email('email','',array('class' => 'form-control', 'placeholder' => "Email" ,'required' => true))}}
                                    
                                </div>
                                <div class="form-group">
                    
                                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                                </div>
                                <div class="form-group">
             
                                    <input type="password" name="password_confirmation" class="form-control" placeholder="Re-enter password" required>
                                </div>                           
    <div class="form-group">
    {{ Form::text('address','',array('class' => 'form-control', 'placeholder' => "Enter address",'required' => true))}}                                    
    </div>
    <div class="form-group">
    {{ Form::text('city','',array('class' => 'form-control', 'placeholder' => "Enter City",'required' => true))}}                                    
    </div>
    <div class="form-group">
    {{ Form::select('country',array('IN' => 'India','USA' => 'USA'),'',array('class' => 'form-control', 'placeholder' => "",'required' => true))}}                                    
    </div>
    <div class="form-group">
    {{ Form::text('zipcode','',array('class' => 'form-control', 'placeholder' => "Zip code",'required' => true))}}                                    
    </div>
    @if($type==4)
     @include('users._user_form')  
    @elseif($type == 3)
     @include('users._distributor_form') 
    @elseif($type==2)
     @include('users._oem_form')
    @endif                        
    <div class="form-group">
        {{Form::checkbox('terms_n_policy', '1',null,array('required' => true))}} I Agree to the <a href="#" > Terms of Use </a> and <a href="#" > Privacy Policy </a>
    </div>
                               
    <div class="form-group">
    {{ Form::submit('Register an account',array('class' => 'btn btn-primary'))}}
       
    </div>
    {{ Form::close() }}
</div>
					</div><!-- end col-md-6 -->
            	</div><!-- end row --> 
            </div><!-- end content -->
    	</div><!-- end container -->
    </section><!--end white-wrapper -->

      
@include('layouts.footer')
        
@include('layouts.scripts')


  </body>
</html>