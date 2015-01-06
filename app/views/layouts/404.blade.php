<!DOCTYPE html>
<html lang="en">
<head> 
 <title>D3distributor</title> 
  @include('layouts.base')
</head>
<body>

 @include('layouts.topbar')
  
  @include('layouts.header')
  
  <section class="white-wrapper padding-top margin-top">
		<div class="container">
        	<div class="not_found text-center">
			<h1>404!</h1>
			<p class="lead">Look like something went wrong! The page you were looking for is not here. <br> Go {{HTML::link('/','Home')}} or try a search.</p>
				<div class="widget padding-top">
					<!--<form action="#" class="search_form">
						<input type="text" class="form-control" placeholder="Enter here what you are looking...">     
					</form>-->
				</div>
            </div>
		</div>
    </section>
    
     @include('layouts.footer')
        
@include('layouts.scripts')


  </body>
</html>