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
    
    <section class="blog-wrapper" style="height:450px;">
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
                
                </div><!-- end row --> 
            </div><!-- end content -->
    	</div><!-- end container -->
    </section><!--end white-wrapper -->

      
@include('layouts.footer')
        
@include('layouts.scripts')


  </body>
</html>