 <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a class="active" href="{{ url('/admin') }}">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-user"></i>
                          <span>Users</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/admin/users') }}">All Users</a></li>
                          <li><a  href="{{ url('/admin/users/create') }}">Add New</a></li>                          
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-tags"></i>
                          <span>Category</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="{{ url('/admin/categories') }}">All Category</a></li>
                          <li><a  href="{{ url('/admin/categories/create') }}">Add New</a></li> 
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-bars"></i>
                          <span>Products</span>
                      </a>
                      <ul class="sub">
                         <li><a  href="{{ url('/admin/products') }}">All Products</a></li>
                          <li><a  href="{{ url('/admin/products/create') }}">Add New</a></li> 
                      </ul>
                  </li>
                  
                  
                  
                  
                  
                <!--  <li>
                      <a href="google_maps.html" >
                          <i class="fa fa-map-marker"></i>
                          <span>Google Maps </span>
                      </a>
                  </li>-->
               

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->