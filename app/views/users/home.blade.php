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
				<h2>Welcome</h2>
               
			</div>
		</div>
	</section><!-- end post-wrapper-top -->
   
<section class="white-wrapper" style="min-height:500px;">
    	<div class="container">
         @if (Session::has('flash_error')||Session::has('flash_success') )
    <div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 ">
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
               </div>
        </div>
    @endif
			<div class="row">
            	<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 first">
					<div class="team_member">
                    	<div class="entry">
                    		<img class="img-responsive" src="demos/anon_user-200X200.png" alt="">
                            <div class="magnifier">
                                <div class="buttons">
                                    <a class="sf" rel="bookmark" href="#"><span class="fa fa-envelope"></span></a>
                                    <a class="sf" rel="bookmark" href="#"><span class="fa fa-google-plus"></span></a>
                                    <a class="st" rel="bookmark" href="#"><span class="fa fa-twitter"></span></a>
                                    <a class="sg" rel="bookmark" href="#"><span class="fa fa-facebook"></span></a>
                                </div>
                            </div><!-- end magnifier -->
                        </div><!-- end entry -->
					</div><!-- end team_member -->
                </div><!-- end col-lg-3 -->
            	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="team_member">
                        <h1>{{$logged->first_name }} {{$logged->last_name }} <span>|</span> <small>{{$logged->type_name}}</small></h1>
                        <p>Welcome to D3distributor, We will available soon... </p> 
                        
                    <div class="widget">
                        <h3>Personal <span>Information</span></h3>
                        <div id="skills" class="skills_bar">
                           <p> <small>{{$logged->email}}</small></p>
                            
                            <p><small>You joined on {{$logged->created_at}}</small></p>
                           
                           <p>{{HTML::link('users/edit','Edit Profile',array('class' => 'btn btn-primary btn-sm'))}}</p>
                            
                        </div><!-- end skills_bar -->
                    </div><!-- end widget -->
					</div><!-- end team_member -->
                </div><!-- end col-lg-6 --> 
                
               
            </div>
    	</div><!-- end container -->
    </section><!-- end white wrapper -->
      
@include('layouts.footer')
        
@include('layouts.scripts')


  </body>
</html>