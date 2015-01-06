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
 <script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
  <script type="text/javascript">
 (function($) {
	  "use strict";
	jQuery('a[data-gal]').each(function() {
		jQuery(this).attr('rel', jQuery(this).data('gal'));
	});  	
		jQuery("a[data-gal^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',slideshow:false,overlay_gallery: false,theme:'light_square',social_tools:false,deeplinking:false});
})(jQuery);
  </script>