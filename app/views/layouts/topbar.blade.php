	<div id="topbar" class="clearfix">
    	<div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="social-icons">
                    <span><a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="#"><i class="fa fa-facebook"></i></a></span>
                    <span><a data-toggle="tooltip" data-placement="bottom" title="Google Plus" href="#"><i class="fa fa-google-plus"></i></a></span>
                    <span><a data-toggle="tooltip" data-placement="bottom" title="Twitter" href="#"><i class="fa fa-twitter"></i></a></span>
                    <span><a data-toggle="tooltip" data-placement="bottom" title="Youtube" href="#"><i class="fa fa-youtube"></i></a></span>
                    <span><a data-toggle="tooltip" data-placement="bottom" title="Linkedin" href="#"><i class="fa fa-linkedin"></i></a></span>
                    <span><a data-toggle="tooltip" data-placement="bottom" title="Dribbble" href="#"><i class="fa fa-dribbble"></i></a></span>
                    <span class="last"><a data-toggle="tooltip" data-placement="bottom" title="Skype" href="#"><i class="fa fa-skype"></i></a></span>
                </div><!-- end social icons -->
            </div><!-- end columns -->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="topmenu">
             <span class="topbar-login"> {{ HTML::link('#', 'About Us', array())}}</span>
             <span class="topbar-login"> {{ HTML::link('/compare', 'Compare Products', array())}}</span>
            @if (Auth::check())
            <span class="topbar-login"> {{ HTML::link('users/home', 'Settings', array())}}</span>
             <span class="topbar-login"><i class="fa fa-user"></i> {{ HTML::link('/', Auth::user()->first_name.' '.Auth::user()->last_name, array())}} </span>
             <span class="topbar-login"> {{ HTML::link('users/logout', 'Logout', array())}}</span>
            @else
             <span class="topbar-login"><i class="fa fa-user"></i> {{ HTML::link('users/signin', 'Login', array())}}</span>
              <span class="topbar-login"><i class="fa fa-user"></i> {{ HTML::link('users/signup', 'Register', array())}}</span>
            <!--<span class="topbar-cart"><i class="fa fa-shopping-cart"></i> <a href="shop-cart.html">0 item - $0.00</a></span>-->
            @endif
            
            
                </div><!-- end top menu -->
            	<div class="callus">
                	
                </div><!-- end callus -->
            </div><!-- end columns -->
        </div><!-- end container -->
    </div><!-- end topbar -->