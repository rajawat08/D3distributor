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
   <section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				{{Form::open(['route' => 'user.search','method' => 'get'])}}
                <br/>
                
                 <div class="col-lg-2">
                <select class="form-control" name="slug" required>
                	<option value="">Categories</option>
                	@foreach($categories as $key => $category)                	
                  	<option value="{{$key}}">{{$category}}</option>
                    @endforeach
                </select>
                 </div>
                <div class="col-lg-6">
                <input type="text" class="form-control" name="query" placeholder="Search products"  />
                
                 </div>
                <div class="col-lg-2">
                <input type="submit" class="form-control btn btn-info" value="Search"/>
                </div>
                <br/><br/><br/>
                {{Form::close()}}
                <!--<ul class="breadcrumb pull-right">
                    <li><a href="index.html">Shop</a></li>
                    <li>Shop Full Width</li>
                </ul>-->
			</div>
		</div>
	</section><!-- end post-wrapper-top --> 
  
      <section class="blog-wrapper">
    	<div class="container">
        	<div class="messagebox">
            	<h2>Welcome to D3butors & we do <mark>awesome</mark> stuff.</h2>
                <p class="lead">Hey Everyone! We are D3butors and Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat.,<br>
				Nulla porttitor accumsan tincidunt.</p>
            </div><!-- end messagebox -->
            <div class="clearfix"></div>
        	
			<div class="post-wrapper-top jt-shadow clearfix">
            
            </div>
			<div class="padding-top">
        	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="carousel_wrapper">
                    <div class="title">
                        <h2>Latest Products</h2>
                    </div><!-- end title -->
    				
                    <div class="margin-top">                    	
                        <div id="owl_shop_carousel" class="owl-carousel">
                        	@foreach($latests as $latest)
                            
                    		<div class="shop_carousel">
                                <div class="shop_item">
                                    <div class="entry">
                                    	<a href="{{$latest->latestProduct->Category->slug.'/'.$latest->latestProduct->alias}}">
                                        @if(!is_null($latest->latestProduct->image))
                                        {{HTML::image("images/products/".$latest->latestProduct->image->image_name,"",["class" => "img-responsive"])}}
                                        @else
                                        {{HTML::image("demos/shop_12.jpg","",["class" => "img-responsive"])}}
                                        @endif
                                       </a>
                                    </div><!-- end entry -->
                                    <div class="shop_desc">
                                        <div class="shop_title pull-left">
                                         {{HTML::link($latest->latestProduct->Category->slug.'/'.$latest->latestProduct->alias,$latest->latestProduct->name,[])}}
                                           <span class="cats">
                                            {{HTML::link($latest->latestProduct->Category->slug,$latest->latestProduct->Category->name." Products",[])}}
                                            </span>
                                        </div>
                                        <span class="price pull-right">
                                            {{$latest->latestProduct->currency}}{{$latest->latestProduct->price}}
                                        </span>
                                    </div><!-- end shop_desc -->
                                </div><!-- end item -->
                            </div><!-- end shop carousel -->
                    		@endforeach
							
							
							
                        </div><!-- end owl_blog_three_line -->
                    </div><!-- end padding-top -->
                </div><!-- end carousel_wrapper -->
                
                <div class="clearfix"></div>
                
                <hr>

                <div class="carousel_wrapper">
                    <div class="title">
                        <h2>Featured Products</h2>
                    </div><!-- end title -->
    
                    <div class="margin-top">
                        <div id="owl_shop_carousel_1" class="owl-carousel">
                        	@foreach($latests as $latest)
							<div class="shop_carousel">
                                <div class="shop_item">
                                    <div class="entry">
                                     <a href="{{$latest->Category->slug.'/'.$latest->alias}}">
                                        @if(!is_null($latest->image))
                                        {{HTML::image("images/products/".$latest->image->image_name,"",["class" => "img-responsive"])}}
                                        @else
                                        {{HTML::image("demos/shop_12.jpg","",["class" => "img-responsive"])}}
                                        @endif
                                    </a>   
                                    </div><!-- end entry -->
                                    <div class="shop_desc">
                                        <div class="shop_title pull-left">
                                        {{HTML::link($latest->Category->slug.'/'.$latest->alias,$latest->name,[])}}
                                           
                                        <span class="cats">
                                        {{HTML::link($latest->Category->slug,$latest->Category->name." Products",[])}}
                                        </span>
                                        </div>
                                        <span class="price pull-right">
                                            {{$latest->currency}}{{$latest->price}}
                                        </span>
                                    </div><!-- end shop_desc -->
                                </div><!-- end item -->
                            </div><!-- end shop carousel -->
                            @endforeach
							
							
							
                        </div><!-- end owl_blog_three_line -->
                    </div><!-- end padding-top -->
                </div><!-- end carousel_wrapper -->
                </div><!-- end padding -top -->
            </div><!-- end content -->
            
        	
            <div class="clearfix"></div>
            
            <div class="calloutbox">
                <div class="col-lg-10">
                    <h2>FREE SHIPPING FOR ALL ORDERS & We deliver to you in 3 days</h2>
                    <p>Accusantium quam, ultricies eget tempor id, aliquam eget nibh et. Maecen aliquam, risus at semper.</p>
                    </div>
                    <div class="col-lg-2">
                    <a class="btn pull-right btn-default btn-dark btn-lg margin-top" href="#">Purchase now!</a>
				</div>
			</div>
    	</div><!-- end container -->
    </section><!--blog white-wrapper -->


    
  @include('layouts.footer')
        
@include('layouts.scripts')


  </body>
</html>