<!DOCTYPE html>
<html lang="en">
<head> 
 <title>D3distributor</title> 
  @include('layouts.base')
</head>
<body>

<div class="animationload">
<div class="loader">Loading...</div>
</div>
 @include('layouts.topbar')
  
  @include('layouts.header')
	
    <div class="slider-wrapper">
    
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                   <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
					<img src="demos/sliderbg_04.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption high_title customin customout start"
							data-x="left" data-hoffset="100"
                            data-y="60"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">OUR
                        </div>
                        <div class="tp-caption mini_title customin customout start"
							data-x="left" data-hoffset="330"
                            data-y="290"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="900"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">PASSION BRINGS <span>JOLLYANY....</span>
                        </div>
                        <div class="tp-caption customin customout"
                            data-x="left" data-hoffset="100"
                            data-y="150"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="demos/sliderlogo_01.png" alt="">
                        </div>
                        <div class="tp-caption small_title  customin customout start"
							data-x="center" data-hoffset="0"
                            data-y="330"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1100"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-primary btn-lg">Buy now</a>
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="demos/sliderbg_03.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption high_title2 customin customout start"
							data-x="left" data-hoffset="60"
                            data-y="130"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">Powerfully Responsive, With <br>
							Clean Design
                        </div>
                        <div class="tp-caption light_title customin customout start"
							data-x="left" data-hoffset="60"
                            data-y="265"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="700"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">Your website should look great across all devices, no matter how big <br>
							or small. Take control of your content’s presentation.
                        </div>
                        <div class="tp-caption small_title  customin customout start"
							data-x="left" data-hoffset="60"
                            data-y="340"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="900"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-primary btn-lg">Buy now</a>
                        </div>
                        <div class="tp-caption customin customout"
                            data-x="right" data-hoffset="-60"
                            data-y="bottom" data-voffset="-20"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="demos/slidertablet_01.png" alt="">
                        </div>
                    </li>
                   <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <!-- MAIN IMAGE -->
                        <img src="demos/sliderbg_07.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        
						<div class="tp-caption sfb"
							data-x="center" data-hoffset="-200"
							data-y="100"
							data-speed="1000"
							data-start="1250"
							data-easing="easeOutBack"><img src="demos/slider_shop_05.png" alt="">
                        </div>
                        
						<div class="tp-caption sfb"
							data-x="center" data-hoffset="170"
							data-y="120"
							data-speed="1000"
							data-start="1450"
							data-easing="easeOutBack"><img src="demos/slider_shop_06.png" alt="">
                        </div>
			
						<div class="tp-caption sfb"
							data-x="center" data-hoffset="0"
							data-y="60"
							data-speed="1000"
							data-start="1650"
							data-easing="easeOutBack"><img src="demos/sidebar_hot_05.png" alt="">
                        </div>
                        
						<div class="tp-caption sfb"
							data-x="center" data-hoffset="0"
							data-y="230"
							data-speed="1000"
							data-start="1850"
							data-easing="easeOutBack"><img src="demos/slider_shop_07.png" alt="">
                        </div>

                       <!-- LAYERS -->
                        <div class="tp-caption small_title  customin customout start"
							data-x="center" data-hoffset="0"
                            data-y="330"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1800"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-dark btn-lg">Register Now!</a>
                        </div>
                    </li>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="demos/sliderbg_05.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title upper_title customin customout start"
                            data-x="right"
                            data-hoffset="0"
                            data-y="95"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">Everything you needed in <span>jollyany</span>
                        </div>
                        <div class="tp-caption mini_title2 customin customout"
                            data-x="right"
                            data-y="190"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="1000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><i class="fa fa-star-o"></i> 30 Unique & Trendy Home Page Layouts
                        </div>
                        <div class="tp-caption mini_title2 customin customout"
                            data-x="right"
                            data-y="220"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="1500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><i class="fa fa-star-o"></i> 120+ Page Templates Layouts
                        </div>
                        <div class="tp-caption mini_title2 customin customout"
                            data-x="right"
                            data-y="250"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="2000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><i class="fa fa-star-o"></i> Mega Menu Support
                        </div>
                        <div class="tp-caption mini_title2 customin customout"
                            data-x="right"
                            data-y="280"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="2500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><i class="fa fa-star-o"></i> Revolution Slider
                        </div>
                        <div class="tp-caption mini_title2 customin customout"
                            data-x="right"
                            data-y="310"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="3000"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><i class="fa fa-star-o"></i> Shop Woocommerce Layouts
                        </div>
                        <div class="tp-caption mini_title2 customin customout"
                            data-x="right"
                            data-y="340"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="3500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><i class="fa fa-star-o"></i> BuddyPress Layous & Endless Possibilities
                        </div>
                        <div class="tp-caption customin customout"
                            data-x="center" data-hoffset="130"
                            data-y="160"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="4000"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="demos/slider_banner.png" alt="">
                        </div>
                        <div class="tp-caption slider_title_a customin customout"
                            data-x="center" data-hoffset="130"
                            data-y="250"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1800"
                            data-start="5000"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><a href="#" title="">Dont Miss it</a>
                        </div>
                        <div class="tp-caption customin customout"
                            data-x="left" data-hoffset="-70"
                            data-y="20"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1800"
                            data-start="1000"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="demos/slider_screen.png" alt="">
                        </div>
                        <div class="tp-caption small_title  customin customout start"
                            data-x="right"
                            data-hoffset="0"
                            data-y="380"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="5100"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-primary btn-lg">Buy Now</a>
                        </div>
                    </li>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" data-delay="5000">
						<!-- MAIN IMAGE -->
                            <img src="demos/video_bg.jpg"  alt="video_business"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
                            <!-- LAYERS -->
                    
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-fade fadeout fullscreenvideo"
                                data-x="0"
                                data-y="0"
                                data-speed="1000"
                                data-start="800"
                                data-easing="Power4.easeOut"
                                data-endspeed="1500"
                                data-endeasing="Power4.easeIn"
                                data-autoplay="true"
                                data-autoplayonlyfirsttime="false"
                                data-nextslideatend="true"
                                 data-forceCover="1" data-aspectratio="16:9" data-forcerewind="on"
                                 style="z-index: 2"><video id="revvideo" class="video-js vjs-default-skin" preload="none"
                                poster='demos/video_bg.jpg' data-setup="{}">
                                <source src='http://goodwebtheme.com/previewvideo/business_edit.mp4' type='video/mp4' />
                                <source src='http://goodwebtheme.com/previewvideo/business_edit.webm' type='video/webm' />
                                <source src='http://goodwebtheme.com/previewvideo/business_edit.ogv' type='video/ogg' />
                                </video>
							</div>
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption big_title_onepage skewfromleft customout"
                                data-x="center" data-hoffset="0"
                                data-y="top" data-voffset="130"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="800"
                                data-start="1300"
                                data-easing="Power4.easeOut"
                                data-endspeed="300"
                                data-endeasing="Power1.easeIn"
                                data-captionhidden="on"
                                style="z-index: 6">We DESIGNED FOR YOUR <span>Company</span>
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption small_thin_grey1 customin customout"
                                data-x="85"
                                data-y="320"
                                data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="2000"
                                data-easing="Power4.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                data-captionhidden="on"
                                style="z-index: 8">JOLLYANY TEMPLATE
                            </div>
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption small_thin_grey1 customin customout"
                                data-x="245"
                                data-y="320"
                                data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="2400"
                                data-easing="Power4.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                data-captionhidden="on"
                                style="z-index: 8"><span><i class="fa fa-bullseye"></i></span> 100% RESPONSIVE 
                            </div>        
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption small_thin_grey1 customin customout"
                                data-x="415"
                                data-y="320"
                                data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="2600"
                                data-easing="Power4.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                data-captionhidden="on"
                                style="z-index: 8"><span><i class="fa fa-bullseye"></i></span> RETINA DISPLAY
                            </div>    
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption small_thin_grey1 customin customout"
                                data-x="570"
                                data-y="320"
                                data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="2800"
                                data-easing="Power4.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                data-captionhidden="on"
                                style="z-index: 8"><span><i class="fa fa-bullseye"></i></span> 30+ HOMEPAGES
                            </div>   
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption small_thin_grey1 customin customout"
                                data-x="730"
                                data-y="320"
                                data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="3000"
                                data-easing="Power4.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                data-captionhidden="on"
                                style="z-index: 8"><span><i class="fa fa-bullseye"></i></span> 150+ VALID TEMPLATES
                            </div>  
                            <!-- LAYER NR. 7 -->
                            <div class="tp-caption small_thin_grey1 customin customout"
                                data-x="920"
                                data-y="320"
                                data-customin="x:0;y:100;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:3;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:0% 0%;"
                                data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                data-speed="500"
                                data-start="3200"
                                data-easing="Power4.easeOut"
                                data-endspeed="500"
                                data-endeasing="Power4.easeIn"
                                data-captionhidden="on"
                                style="z-index: 8"><span><i class="fa fa-bullseye"></i></span> UNLIMITED COLORS
                            </div>  
					</li>
					<li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="demos/sliderbg_01.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title_slider customin customout start"
                            data-x="left"
                            data-hoffset="30"
                            data-y="170"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><span>PERFECT THEME</span> TO GROW YOUR BUSINESS
                        </div>
                        <div class="tp-caption small_title customin customout start"
                            data-x="left"
                            data-hoffset="30"
                            data-y="246"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1300"
                            data-start="800"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">Jollyany is a  creative awesome design for super easy to build with<br>
							our Shortcodes & Page Builder. The one and only HTML template<br>
							you'll ever have to buy. 
                        </div>
                        <div class="tp-caption small_title customin customout start"
                            data-x="left"
                            data-hoffset="30"
                            data-y="360"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1100"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-primary btn-lg">Build now</a>
                        </div>
                        <div class="tp-caption customin customout"
                            data-x="right" data-hoffset="-60"
                            data-y="bottom" data-voffset="220"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="demos/sliderman_01.png" alt="">
                        </div>
                    </li>
                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                        <img src="demos/sliderbg_02.jpg"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                        <div class="tp-caption big_title  customin customout start"
                            data-x="left"
                            data-hoffset="30"
                            data-y="170"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1000"
                            data-start="500"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">Coded with <span>Bootstrap, HTML5 & CSS3</span>
                        </div>
                        <div class="tp-caption small_title2 customin customout start"
                            data-x="left"
                            data-hoffset="30"
                            data-y="236"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1300"
                            data-start="800"
                            data-easing="Back.easeInOut"
                            data-endspeed="300">Jollyany is a  creative awesome design for super easy to<br>
							 build with our Shortcodes & Page Builder.
                        </div>
                        <div class="tp-caption small_title  customin customout start"
                            data-x="left"
                            data-hoffset="30"
                            data-y="320"
                            data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="1600"
                            data-start="1100"
                            data-easing="Back.easeInOut"
                            data-endspeed="300"><a href="#" class="btn btn-primary btn-lg">Build now</a>
                        </div>
                        <div class="tp-caption customin customout"
                            data-x="right" data-hoffset="120"
                            data-y="bottom" data-voffset="0"
                            data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                            data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                            data-speed="800"
                            data-start="700"
                            data-easing="Power4.easeOut"
                            data-endspeed="500"
                            data-endeasing="Power4.easeIn"
                            style="z-index: 3"><img src="demos/sliderman_02.png" alt="">
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer"></div>
            </div>
        </div>
    </div><!-- end slider-wrapper -->

	<div class="white-wrapper">
    	<div class="container">
        	<div class="messagebox">
            	<h2>Jollyany is Simple, <mark class="rotate">Powerful Theme, Amazing Theme, Superb Theme</mark> With Endless Possibilties</h2>
                <p class="lead">Hey Everyone! We are Jollyany and we make really beautiful and amazing stuff. This can be used to describe what you do,<br>
				how you do it, & who you do it for. Don’t Miss the Awesome Theme</p>
                <a class="btn btn-primary btn-lg" href="#">Purchase Now</a> <a class="btn btn-dark btn-lg" href="#">Tell Me More!</a>
            </div><!-- end messagebox -->
		</div><!-- end container -->
    </div><!-- end white-wrapper -->

	<div class="grey-wrapper jt-shadow padding-top">
    	<div class="make-center wow fadeInUp">
			<img src="demos/banner.png" alt="" class="img-responsive">
        </div>
    </div><!-- end white-wrapper -->
    
  	<div class="white-wrapper">
		<div class="container">
        	<div class="services_vertical">
                <div class="col-lg-4 first">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-lightbulb-o fa-4x"></i>
                        </div>
                        <h3>Aweosme Design Layout</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. </p>
                        <a href="#" class="readmore">Read More...</a>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-gear fa-4x"></i>
                        </div>
                        <h3>Drag and Drop Builder</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. </p>
                        <a href="#" class="readmore">Read More...</a>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 last">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-tablet fa-4x"></i>
                        </div>
                        <h3>Retina Ready Display</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. </p>
                        <a href="#" class="readmore">Read More...</a>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 first">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-folder-o fa-4x"></i>
                        </div>
                        <h3>Next-level features</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. </p>
                        <a href="#" class="readmore">Read More...</a>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-google-plus fa-4x"></i>
                        </div>
                        <h3>Social Media Friendly</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. </p>
                        <a href="#" class="readmore">Read More...</a>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="col-lg-4 last">
                    <div class="service_vertical_box">
                        <div class="service-icon">
                            <i class="fa fa-bars fa-4x"></i>
                        </div>
                        <h3>Responsive Web Design</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur euismod enim a metus adipiscing aliquam. </p>
                        <a href="#" class="readmore">Read More...</a>
                    </div><!-- end service_vertical_box -->
                </div><!-- end col-lg-4 -->
                <div class="clearfix"></div>
            </div><!-- end services_vertical -->
			<div class="clearfix"></div>
            <div class="calloutbox bgdark">
                <div class="col-lg-10">
                    <h2><span>JOLLYANY</span>, you ever neededto build powerful & trendy website!</h2>
                    <p>Accusantium quam, ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper.</p>
                    </div>
                    <div class="col-lg-2">
                    <a class="btn pull-right btn-default btn-lg margin-top" href="#">Purchase now!</a>
                    </div>
                </div><!-- end messagebox -->
		</div><!-- end container -->
    </div><!-- end transparent-bg -->

	<div class="grey-wrapper jt-shadow">
    	<div class="container">
        	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
            	<div class="widget">
                	<h3>WHY <span>JOLLYANY</span> IS SIMPLE & VERY POWERFUL?</h3>
                    <p>Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem. Maecenas nec odio et ante tincidunt tempus. Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros.</p>
                    <div id="accordion-first" class="clearfix">
                        <div class="accordion" id="accordion2">
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                <em class="fa fa-plus icon-fixed-width"></em>Jollyany is fully responsive and perfectly fits on any Mobile device.
                              </a>
                            </div>
                            <div id="collapseOne" class="accordion-body collapse">
                              <div class="accordion-inner">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor...
                              </div>
                            </div>
                          </div>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                <em class="fa fa-plus icon-fixed-width"></em>Jollyany is automatically creates retina ready images.
                              </a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse">
                              <div class="accordion-inner">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor...
                              </div>
                            </div>
                          </div>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                <em class="fa fa-plus icon-fixed-width"></em>Jollyany contains 365 Retina Ready Font Awesome icons.
                              </a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse">
                              <div class="accordion-inner">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor...
                              </div>
                            </div>
                          </div>
                          <div class="accordion-group">
                            <div class="accordion-heading">
                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                <em class="fa fa-plus icon-fixed-width"></em>Jollyany is Powerful Admin Panel
                              </a>
                            </div>
                            <div id="collapseFour" class="accordion-body collapse">
                              <div class="accordion-inner">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor...
                              </div>
                            </div>
                          </div> 
                        </div><!-- end accordion -->
                    </div><!-- end accordion first -->
                </div><!-- end widget -->
            </div><!-- end col-lg-6 -->
            
        	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
            	<div class="widget">
                	<h3>OUR <span>POWERFUL</span> SKILLS!</h3>
                    <div id="skills" class="skills_bar">
                        <small>Adobe Photoshop</small>
                        <div class="progress wow slideInLeft">
                            <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
                            <span class="skill_count">90%</span>
                            </div>
                        </div><!-- end progress -->
                        <small>HTML5 & CSS3</small>
                        <div class="progress wow slideInLeft">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                            <span class="skill_count">80%</span>
                            </div>
                        </div><!-- end progress -->
                        <small>WordPress</small>
                        <div class="progress wow slideInLeft">
                            <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%;">
                            <span class="skill_count">90%</span>
                            </div>
                        </div><!-- end progress -->
                        <small>Customer Support</small>
                        <div class="progress wow slideInLeft">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                            <span class="skill_count">90%</span>
                            </div>
                        </div><!-- end progress -->
                        <small>Shopify Design</small>
                        <div class="progress wow slideInLeft">
                            <div class="progress-bar" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;">
                            <span class="skill_count">80%</span>
                            </div>
                        </div><!-- end progress -->
                    </div><!-- end skills_bar -->
                </div><!-- end widget -->
            </div><!-- end col-lg-6 -->
		</div><!-- end container -->
    </div><!-- end grey-wrapper -->

	<div id="videobgfull">
		<div class="videooverlay">
        	<div class="container">
                <div class="general-title">
                    <h2>Our Working Process</h2>
                    <hr>
                    <p class="lead">These is the team behind Jollyany Agency</p>
                </div><!-- end general title -->

                <div class="custom-services">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 first">
						<div class="ch-item">	
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
                                    	<i class="fa fa-print fa-4x"></i>
                                        <h3>Print Ready</h3>
                                    </div>
									<div class="ch-info-back">
                                        <h3>RESULTS</h3>
                                        <p>Lorem ipsum dolor sit ameconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua. </p>
                                    </div>
								</div><!-- end ch-info -->
							</div><!-- end ch-info-wrap -->
						</div><!-- end ch-item -->
                    </div><!-- end col-sm-3 -->

                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="ch-item">	
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
                                    	<i class="fa fa-lightbulb-o fa-4x"></i>
                                        <h3>Planning</h3>
                                    </div>
									<div class="ch-info-back">
                                        <h3>RESULTS</h3>
                                        <p>Lorem ipsum dolor sit ameconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua. </p>
                                    </div>
								</div><!-- end ch-info -->
							</div><!-- end ch-info-wrap -->
						</div><!-- end ch-item -->
                    </div><!-- end col-sm-3 -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						<div class="ch-item">	
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
                                    	<i class="fa fa-bar-chart-o fa-4x"></i>
                                        <h3>Built with care</h3>
                                    </div>
									<div class="ch-info-back">
                                        <h3>RESULTS</h3>
                                        <p>Lorem ipsum dolor sit ameconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua. </p>
                                    </div>
								</div><!-- end ch-info -->
							</div><!-- end ch-info-wrap -->
						</div><!-- end ch-item -->
                    </div><!-- end col-sm-3 -->
                    
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 last">
						<div class="ch-item">	
							<div class="ch-info-wrap">
								<div class="ch-info">
									<div class="ch-info-front">
                                    	<i class="fa fa-html5 fa-4x"></i>
                                        <h3>Clean and Simple</h3>
                                    </div>
									<div class="ch-info-back">
                                        <h3>RESULTS</h3>
                                        <p>Lorem ipsum dolor sit ameconsectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore  magna aliqua. </p>
                                    </div>
								</div><!-- end ch-info -->
							</div><!-- end ch-info-wrap -->
						</div><!-- end ch-item -->
                    </div><!-- end col-sm-3 -->
                </div><!-- end row -->

            </div><!-- end container -->
    	</div><!-- end overlay -->
	</div>
    
	<section class="white-wrapper">
    	<div class="container">
            
        	<div class="general-title">
            	<h2>Latest Projects</h2>
                <hr>
            </div><!-- end general title -->
            
            <div class="text-center clearfix">
                <nav class="portfolio-filter">
                    <ul>
                        <li><a class="btn btn-primary" href="#" data-filter="*"><span></span>All</a></li>
                        <li><a class="btn btn-primary" href="#" data-filter=".photography">Photography</a></li>
                        <li><a class="btn btn-primary" href="#" data-filter=".app-design">App Design</a></li>
                        <li><a class="btn btn-primary" href="#" data-filter=".logo">Logo</a></li>
                    </ul>
                </nav>
            </div><!-- end text-center --> 
		</div><!-- end container -->
        
		<div class="masonry_wrapper">
			<div class="item entry item-h2 item-w2 photography">
				<a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_01.jpg" alt=""></a>
				<div class="magnifier">
					<div class="buttons">
						<a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>
						<h3>Best Apple Mockups</h3>
					</div><!-- end buttons -->
				</div><!-- end magnifier -->
			</div><!-- end item -->

			<div class="item entry item-h2 graphic-design">
				<a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_02.jpg" alt=""></a>
				<div class="magnifier">
					<div class="buttons">
						<a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>
						<h3>Best Apple Mockups</h3>
					</div><!-- end buttons -->
				</div><!-- end magnifier -->
			</div><!-- end item -->

			<div class="item entry item-h2 item-w2 photography logo">
				<a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_03.jpg" alt=""></a>
				<div class="magnifier">
					<div class="buttons">
						<a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>
						<h3>Best Apple Mockups</h3>
					</div><!-- end buttons -->
				</div><!-- end magnifier -->
			</div><!-- end item -->
                    
			<div class="item entry item-h2 app-design">
				<a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_04.jpg" alt=""></a>
				<div class="magnifier">
					<div class="buttons">
						<a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>
						<h3>Best Apple Mockups</h3>
					</div><!-- end buttons -->
				</div><!-- end magnifier -->
			</div><!-- end item -->
                    
			<div class="item entry item-h2 item-w2 app-design logo">
				<a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_05.jpg" alt=""></a>
				<div class="magnifier">
					<div class="buttons">
						<a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>
						<h3>Best Apple Mockups</h3>
					</div><!-- end buttons -->
				</div><!-- end magnifier -->
			</div><!-- end item -->

			<div class="item entry item-h2 app-design">
				<a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_06.jpg" alt=""></a>
				<div class="magnifier">
					<div class="buttons">
						<a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>
						<h3>Best Apple Mockups</h3>
					</div><!-- end buttons -->
				</div><!-- end magnifier -->
			</div><!-- end item -->
                    
			<div class="item entry item-h2 photography">
				<a href="portfolio-single-sidebar.html"><img src="demos/portfolio_masonry_07.jpg" alt=""></a>
				<div class="magnifier">
					<div class="buttons">
						<a class="st btn btn-default" rel="bookmark" href="portfolio-single-sidebar.html">View project</a>
						<h3>Best Apple Mockups</h3>
					</div><!-- end buttons -->
				</div><!-- end magnifier -->
			</div><!-- end item -->
        </div>
            
		<div class="clearfix"></div>
                
		<div class="buttons padding-top text-center">
			<a href="portfolio-masonry.html" class="btn btn-primary btn-lg" title="">View All Projects</a>
		</div>
        
    </section><!-- end white-wrapper -->
    
	<section id="one-parallax" class="parallax" style="background-image: url('demos/parallax_01.jpg');" data-stellar-background-ratio="0.6" data-stellar-vertical-offset="20">
		<div class="overlay">
        	<div class="container">
				<div class="testimonial-widget">
					<div id="owl-testimonial" class="owl-carousel">
						<div class="testimonial">
							<p class="lead">Gorgeous, just gorgeous I love this theme. The nicest theme I ever worked with and I have worked with hundreds<br>
							 of them. Thanks for beautiful work, keep it up!</p>
							<h3>Filiz ÖZER - Jolly Themes</h3>
						</div><!-- end tweet -->
						<div class="testimonial">
							<p class="lead">Gorgeous, just gorgeous I love this theme. The nicest theme I ever worked with and I have worked with hundreds<br>
							 of them. Thanks for beautiful work, keep it up!</p>
							<h3>Na Vicky - Jolly Themes</h3>
						</div><!-- end tweet -->
						<div class="testimonial">
							<p class="lead">Gorgeous, just gorgeous I love this theme. The nicest theme I ever worked with and I have worked with hundreds of them. Thanks for beautiful work, keep it up!</p>
							<h3>James Watson - Envato</h3>
						</div><!-- end tweet -->
					</div><!-- end owl-testimonial -->
				</div><!-- end testimonial widget -->             
            </div><!-- end container -->
    	</div><!-- end overlay -->
    </section><!-- end transparent-bg -->

    <section class="make-bg-full">
        <div class="calloutbox-full-mini nocontainer">
        	<div class="long-twitter">
				<p class="lead"><i class="fa fa-twitter"></i> Donec vitae sapien ut libero venenatis faucibus. Nullam quis ante. Etiam sit amet orci eget eros. <a href="#">25 min ago</a></p>
            </div>
        </div><!-- end calloutbox -->
    </section><!-- make bg -->
    
@include('layouts.footer')
        
@include('layouts.scripts')


  </body>
</html>