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
                         {{Session::get('flash_error')}}
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
    {{ script('js/jquery.scrollTo.min.js') }}
    {{ script('js/jquery.nicescroll.js') }}
    {{ script('js/jquery.sparkline.js') }}
    {{ script('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js') }}
    {{ script('js/owl.carousel.js') }}
    {{ script('js/jquery.customSelect.min.js') }}
    {{ script('js/respond.min.js') }}    
   
    <!--common script for all pages-->
    {{ script('js/common-scripts.js') }} 
    {{ script('js/all.js') }}
    
    <!--script for this page-->
     {{ script('js/sparkline-chart.js') }}
     {{ script('js/easy-pie-chart.js') }}
     <!--{{ script('js/count.js') }}-->
  




<script >
/*jslint unparam: true, regexp: true */
/*global window, $ */
$(function () {
    'use strict';
    // Change this to the location of your server-side upload handler:
	var url = '/D3distributor/public/uploads';
	var latest_images = [];
   /* var url = window.location.hostname === 'blueimp.github.io' ? 
                '//jquery-file-upload.appspot.com/' : '/D3distributor/public/uploads',
        uploadButton = $('<button type="button" />')
            .addClass('btn btn-primary')
            .prop('disabled', true)
            .text('Processing...')
            .on('click', function () {
                var $this = $(this),
                    data = $this.data();
                $this
                    .off('click')
                    .text('Abort')
                    .on('click', function () {
                        $this.remove();
                        data.abort();
                    });
                data.submit().always(function () {
                    $this.remove();
                });
            });*/
    $('#fileupload').fileupload({
        url: url,
        dataType: 'json',
        autoUpload: false,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 5000000, // 5 MB
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 100,
        previewMaxHeight: 100,
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
		 $('.start').click(function () {			 
                   // $('.start').text('Uploading...');
                    data.submit();
					return false;
                });
        data.context = $('<div/>').attr('class','pre-upload-view').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
           /* if (!index) {
                node
                    .append('<br>')
                    .append(uploadButton.clone(true).data(data));
            }*/
            node.appendTo(data.context);
        });
    }).on('fileuploadstart', function (e) {
		
	}).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
		
		return false;
    }).on('fileuploaddone', function (e, data) {
        $.each(data.result.files, function (index, file) {
			latest_images.push(file.name);
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
			
        });
	}).on('fileuploadstop', function (e) {
		//alert(document.product_form.elements['files']);
		$("#file_hidden").val(JSON.stringify(latest_images));
		document.product_form.submit();
    }).on('fileuploadfail', function (e, data) {
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('File upload failed.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});

</script>

	 
</body>
</html>