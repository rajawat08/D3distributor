  <!-- Main Scripts-->
  <script src="{{asset('js/jquery.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/menu.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.parallax-1.1.3.js')}}"></script>
  <script src="{{asset('js/jquery.simple-text-rotator.js')}}"></script>
  <script src="{{asset('js/wow.min.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
    
  <script src="{{asset('js/jquery.isotope.min.js')}}"></script>
  <script src="{{asset('js/custom-portfolio-masonry.js')}}"></script>

  <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
  <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.plugins.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>
  <script type="text/javascript">
	var revapi;
	jQuery(document).ready(function() {
		revapi = jQuery('.tp-banner').revolution(
		{
			delay:9000,
			startwidth:1170,
			startheight:500,
			hideThumbs:10,
			fullWidth:"on",
			forceFullWidth:"on"
		});
	});	//ready
  </script>

  <!-- Fullwidth Video Div  -->
  <script type="text/javascript" src="{{asset('js/libs/swfobject.js')}}"></script> 
  <script type="text/javascript" src="{{asset('js/libs/modernizr.video.js')}}"></script> 
  <!--<script type="text/javascript" src="{{asset('js/video_background.js')}}"></script>
        
  <script>
	jQuery(document).ready(function($) {
		var Video_back = new video_background($("#videobgfull"), { 
			"position": "absolute",	//Stick within the div
			"z-index": "-1",		//Behind everything
			"loop": true, 			//Loop when it reaches the end
			"autoplay": true,		//Autoplay at start
			"muted": true,			//Muted at start
			"youtube": "hT6eSm-UhiM",	//Youtube video id
			"start": 5,					//Start with 6 seconds offset (to pass the introduction in this case for example)
			"video_ratio": 1.7778, 		// width/height -> If none provided sizing of the video is set to adjust
			"fallback_image": "videos/main.jpg",	//Fallback image path
		});
	});
  </script>-->