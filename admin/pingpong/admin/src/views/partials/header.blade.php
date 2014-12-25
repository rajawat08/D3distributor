   <!--header start-->
      <header class="header white-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="{{ url('/') }}" class="logo" target="_blank">{{option('site.name', 'Administrator') }}<span></span></a>
            <!--logo end-->
            
            <div class="top-nav ">
                <!--search & user info start-->
                 {{ Menu::get('admin-menu-right') }}
                <!--search & user info end-->
            </div>
        </header>
      <!--header end-->