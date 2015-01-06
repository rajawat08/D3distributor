<html>
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<title> Administrator </title>
	
    {{ style('css/bootstrap.min.css') }}
    {{ style('css/bootstrap-reset.css') }}
	<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
	{{ style('assets/jquery-file-upload/css/jquery.fileupload.css') }}
    <!--external css-->
    {{ style('assets/font-awesome/css/font-awesome.css') }}
    
    {{ style('css/jcarousel.basic.css') }}
    {{ style('css/gallery.css') }}
    {{ style('css/table-responsive.css') }}
   

    {{ style('css/owl.carousel.css') }}      

    <!-- Custom styles for this template -->
    {{ style('css/style.css') }}
    {{ style('css/style-responsive.css') }}

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    {{ style('js/html5shiv.js') }}
    {{ style('respond.min.js') }}
    <![endif]-->
	{{ Menu::style() }}
	
	@yield('style')

</head>
<body>
	<section id="container" >
	
	@if(Auth::check() && Auth::user()->isAdmin())
		@include('admin::partials.header')
        @include('admin::partials.sidebar')
	@endif
	<!--main content start-->
    <section id="main-content">
	<!--<div class="container main-content">
		@yield('content')
	</div>-->
    <section class="wrapper">
              <!--state overview start-->
              
              <!--state overview end-->
               @if (Session::has('flash_error'))
			  <div class="row">
                  <div class="col-lg-12">
                      <div class="alert alert-danger fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         {{Session::get('flash_error')}}
                      </div>
                  </div>
              </div>
              @endif
              @if (Session::has('flash_success'))
              <div class="row">
                  <div class="col-lg-12">
                      <div class="alert alert-success fade in">
                          <button type="button" class="close close-sm" data-dismiss="alert">
                              <i class="fa fa-times"></i>
                          </button>
                         {{Session::get('flash_success')}}
                      </div>
                  </div>
              </div>
              @endif
              <div class="row">
              <div class="col-lg-12">
              @yield('content')
              </div>
              </div>
              
              

          </section>
	</section>
	 <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 &copy; D3distributor.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
	</section>
    <!-- js placed at the end of the document so the pages load faster -->
    {{ script('js/jquery.js') }}
    {{ script('js/jquery-1.8.3.min.js') }}
    {{ script('js/bootstrap.min.js') }}
    {{ script('assets/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}
    <!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Load-Image/js/load-image.all.min.js"></script>
<!-- The Canvas to Blob plugin is included for image resizing functionality -->
<script src="//blueimp.github.io/JavaScript-Canvas-to-Blob/js/canvas-to-blob.min.js"></script>
<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
{{ script('assets/jquery-file-upload/js/jquery.iframe-transport.js') }}
{{ script('assets/jquery-file-upload/js/jquery.fileupload.js') }}
{{ script('assets/jquery-file-upload/js/jquery.fileupload-process.js') }}
{{ script('assets/jquery-file-upload/js/jquery.fileupload-image.js') }}
{{ script('assets/jquery-file-upload/js/jquery.fileupload-validate.js') }}
    {{ script('js/jquery.dcjqaccordion.2.7.js') }}
    {{ script('js/jquery.jcarousel.min.js') }}
    {{script('assets/ckeditor/ckeditor.js')}}
    {{ script('js/jquery.scrollTo.min.js') }}
    {{ script('js/jquery.nicescroll.js') }}
    {{ script('js/jquery.sparkline.js') }}
    {{ script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}
    {{ script('js/owl.carousel.js') }}
    {{ script('js/jquery.customSelect.min.js') }}
    {{ script('js/respond.min.js') }}    
   	<script >var url =  "{{URL::to('uploads')}}";</script>
    <!--common script for all pages-->
    {{ script('js/common-scripts.js') }} 
    {{ script('js/all.js') }}
    {{ script('js/jcarousel.basic.js') }}
    <!--script for this page-->
     {{ script('js/sparkline-chart.js') }}
     {{ script('js/easy-pie-chart.js') }}
     <!--{{ script('js/count.js') }}-->
 	 
</body>
</html>