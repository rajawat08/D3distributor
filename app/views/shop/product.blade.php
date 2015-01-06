<!DOCTYPE html>
<html lang="en">
<head> 
 <title>D3distributor</title> 
  @include('layouts.base')
  <link href="{{asset('css/flexslider.css')}}" rel="stylesheet">
   <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
</head>
<body>

 @include('layouts.topbar')
  
  @include('layouts.header')
  <section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>{{$category->name}}</h2>
                <!--<ul class="breadcrumb pull-right">
                    <li><a href="index.html">Shop</a></li>
                    <li>Shop Full Width</li>
                </ul>-->
			</div>
		</div>
	</section><!-- end post-wrapper-top -->
    <section class="blog-wrapper">
		<div class="container">
            <div class="shop_wrapper col-lg-9 col-md-9 col-sm-12 col-xs-12">
            	<div class="general_row">
                    <div class="shop-left shop_item col-lg-6">
                    	<div class="entry">
                        @if(count($product->images)>0)
                        	{{HTML::image('images/products/'.$product->images[0]->image_name,'',['class' => 'img-responsive'])}}                        
                         <div class="magnifier">
								<div class="buttons">
									<a href="../images/products/{{$product->images[0]->image_name}}" class="sf" title="" data-gal="prettyPhoto[product-gallery]"><span class="fa fa-search"></span></a>
									<a class="st" rel="bookmark" href="#"><span class="fa fa-heart"></span></a>
									<a class="sg" rel="bookmark" href=""><span class="fa fa-shopping-cart"></span></a>
								</div>
							</div><!-- end magnifier --> 
                        @else 
                        {{HTML::image('demos/shop_04.jpg','',['class' => 'img-responsive'])}}                          <div class="magnifier">
								<div class="buttons">									
									<a class="st" rel="bookmark" href="#"><span class="fa fa-heart"></span></a>
									<a class="sg" rel="bookmark" href=""><span class="fa fa-shopping-cart"></span></a>
								</div>
							</div><!-- end magnifier -->         	
                        @endif
                       		
                        </div><!-- entry -->	
                        
						<div class="thumbnails clearfix">
                        @if(count($product->images)>1)
                        	@foreach($product->images as $image)
                            <div class="entry">
                            	{{HTML::image('images/products/'.$image->image_name,'',['class' => 'img-responsive'])}}       
                                <div class="magnifier">
                                    <div class="buttons">
										<a href="../images/products/{{$image->image_name}}" class="sf" title="" data-gal="prettyPhoto[product-gallery]"><span class="fa fa-search"></span></a>
                                    </div><!-- end buttons -->
                                </div><!-- end magnifier -->
                            </div>                        	
                            @endforeach                 
                        @endif  
						</div>  
                    </div><!-- end shop-left -->
                    
                    <div class="shop-right col-lg-6">
                    
                    	<div class="title">
                        	<h2>{{$product->name}}</h2>
                            <div class="rating">
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star-o"></i>
                            </div><!-- rating -->
                            <span class="price">
                            	{{$product->currency}} {{$product->price}}
							</span>
                            <!--<span class="compoare pull-right">
                            	<a href="#">Compare</a>
							</span> -->               
                
                        </div><!-- end title -->
                        
                        <div class="shop_desc">
                        <p>{{$product->short_discription}}</p>
                        </div><!-- end shop_desc -->
                        
                        <div class="shop_item_details">
                        	<div class="title">
                            	<h2>Product Details</h2>
                        	</div><!-- end title -->
                            <ul>
                            	<li><strong>Size:</strong> N/A</li>
                            	<li><strong>Category:</strong> {{$product->category->name}}</li>
                            	<li><strong>Tags:</strong> N/A</li>
                            	<li><strong>Brands:</strong> N/A</li>
                            </ul>
                        </div><!-- end shop_item_details -->
                        
                        <div class="shop_meta">
                        	<!--<div class="pull-left">
                            	<div class="btn-shop">
                                    <form class="form-inline" role="form">
                                      <div class="form-group has-success has-feedback">
                                       	<span><i class="fa fa-minus"></i></span>
                                        <input type="text" class="form-control">
                                        <span><i class="fa fa-plus"></i></span>
                                      </div>
                                    </form>
                                </div> 
                            </div>--><!-- end pull-left -->
                            
                            <div class="pull-right">
                            	<div class="btn-shop">
                                    <a href="shop-cart.html" class="btn woo_btn btn-primary">Add to cart</a> <a href="shop-cart.html"><span><i class="fa fa-shopping-cart"></i></span></a>
                                </div>
                            </div><!-- end pull-right -->
                        </div><!-- end shop meta -->
                        
                    </div><!-- end shop-right -->
                </div><!-- end row -->
                
                <div class="clearfix"></div>
                
                <div class="general_row">
                    <div id="shop_features" class="tabbable">
                        <ul class="nav nav-tabs">
                            <li class="active dm-icon-effect-1"><a href="#tab1" data-toggle="tab">DESCRIPTION</a></li>
                            <li class="dm-icon-effect-1"><a href="#tab2" data-toggle="tab">Additional Information</a></li>
                            <li class="dm-icon-effect-1"><a href="#tab3" data-toggle="tab">REVIEWS(00)</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab1">
                                
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="title"><h3>{{$product->name}} </h3></div>
                                    {{$product->discription}}
                                   
                                </div>
                            </div>
                            <div class="tab-pane" id="tab2">
                                
                                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                                    <div class="title"><h3>More Information about this product</h3></div>
                                    <p>Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum..</p>
                                   
                                </div>
                            </div>
                            <div class="tab-pane" id="tab3">
								<!--<div class="col-lg-12 col-md-12 col-sm-12">
                                    
								</div>--> 
                                    
								
                                                                
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="title text-center">
                                        <h3>Submit your review</h3>
                                    </div>
                                    <form id="#" action="#">
                                        <div class="col-sm-6 col-lg-6 col-md-6">
                                            <input type="text" class="form-control" placeholder="Name">
                                            <br>
                                            <input type="text" class="form-control" placeholder="Email">
                                            <br>
                                            <input type="text" class="form-control" placeholder="Website">
                                            <br>
                                        </div>
                                                                                        
                                        <div class="col-sm-6 col-lg-6 col-md-6">
                                            <textarea class="form-control" placeholder="Your Comments" rows="7"></textarea>
                                            <br>
                                            <button class="pull-right btn btn-primary">Send review</button>
                                        </div>
                                    </form>  
                                </div> <!-- end col-12 -->
                            </div>
                        </div><!-- end tab-content -->
                    </div><!-- end tabbable -->
                </div><!-- end general_row -->
                
                <div class="carousel_wrapper">
                    <div class="title">
                        <h2>Related Products</h2>
                    </div><!-- end title -->
    
                    <div class="margin-top">
                        <div id="owl_shop_carousel" class="owl-carousel">
                        @if(count($related_products)>0)
                        	@foreach($related_products as $related)
                        	<div class="shop_carousel">
                                <div class="shop_item">
                                    <div class="entry">
                                    	@if(isset($related->image->image_name))
                                        {{HTML::image('images/products/'.$related->image->image_name,'',['class' => 'img-responsive'])}}
                                        @else
                                        {{HTML::image('demos/shop_04.jpg','',['class' => 'img-responsive'])}}
                                        @endif
                                        <div class="magnifier">
                                            <div class="buttons">
                                            {{HTML::link('/'.$related->category->slug.'/'.$related->alias,'View',['class' => 'st btn btn-default', 'rel' =>'bookmark' ])}}
                                               
                                            </div><!-- end buttons -->
                                        </div><!-- end magnifier -->
                                    </div><!-- end entry -->
                                    <div class="shop_desc">
                                        <div class="shop_title pull-left">
                                            <a href="shop-single-sidebar.html"><span>{{$related->name}}</span></a>
                                           
                                        </div>
                                        <span class="price pull-right">
                                           {{$related->currency}} {{$related->price}}
                                        </span>
                                    </div><!-- end shop_desc -->
                                </div><!-- end item -->
                            </div><!-- end shop carousel -->	
                        	@endforeach
                        @endif
							
							
							
							
                        </div><!-- end owl_blog_three_line -->
                    </div><!-- end padding-top -->
                </div><!-- end carousel_wrapper -->
                
            </div><!-- end shop-wrapper -->
            
			<div id="sidebar" class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            	<div class="widget">
                	<div class="title">
                    	<h2>Best Selling</h2>
                    </div><!-- end title -->
					<ul class="recent_posts_widget">
                        <li>
                        <a href="#">{{HTML::image('demos/shop_04.jpg','',[])}}New Shop Item</a>
                           <div class="rating">
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star-o"></i>
                            </div><!-- rating -->
                        	<a class="readmore" href="#">$205.00</a>
                        </li>
                        <li>
                        <a href="#">{{HTML::image('demos/shop_05.jpg','',[])}}Best Selling of 2014</a>
                           <div class="rating">
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            </div><!-- rating -->
                        	<a class="readmore" href="#">$22.00</a>
                        </li>    
                        <li>
                        <a href="#">{{HTML::image('demos/shop_06.jpg','',[])}}New Arriwal Item</a>
                           <div class="rating">
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star-o"></i>
                            </div><!-- rating -->
                        	<a class="readmore" href="#">$122.00</a>
                        </li>
                        <li>
                        <a href="#">{{HTML::image('demos/shop_07.jpg','',[])}}Sunlight of the 2014</a>
                           <div class="rating">
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star"></i>
                            	<i class="fa fa-star-o"></i>
                            </div><!-- rating -->
                        	<a class="readmore" href="#">$205.00</a>
                        </li>
					</ul><!-- recent posts -->  
                </div><!-- end widget -->
                
            
                
            	<div class="widget">
                	<div class="title">
                    	<h2>KEEP IN TOUCH</h2>
                    </div><!-- end title -->
                    
                    <div class="social_widget">
                    	<div class="social_like">
                        	<div class="icon-container pull-left">
                                <i class="fa fa-twitter"></i>
                            </div>
                        	<div class="social_count">
								<h3><a href="#">Follow Us on Twitter</a></h3>
                                <small>37 Followers</small>
                            </div>
                        </div><!-- end social like -->
                    	<div class="social_like">
                        	<div class="icon-container pull-left">
                                <i class="fa fa-facebook"></i>
                            </div>
                        	<div class="social_count">
								<h3><a href="#">Like on Facebook</a></h3>
                                <small>221 Fans</small>
                            </div>
                        </div><!-- end social like -->
                    	<div class="social_like">
                        	<div class="icon-container pull-left">
                                <i class="fa fa-youtube"></i>
                            </div>
                        	<div class="social_count">
								<h3><a href="#">Youtube Playlist</a></h3>
                                <small>6169 Subscribers</small>
                            </div>
                        </div><!-- end social like -->
                    	<div class="social_like">
                        	<div class="icon-container pull-left">
                                <i class="fa fa-flickr"></i>
                            </div>
                        	<div class="social_count">
								<h3><a href="#">Flickr Stream</a></h3>
                                <small>887 Followers</small>
                            </div>
                        </div><!-- end social like -->
                    </div><!-- end social-widget -->
                </div><!-- end widget -->
            </div><!-- end sidebar -->
		</div><!-- end container -->
	</section><!-- end postwrapper -->
  @include('layouts.footer')
        
@include('layouts.scripts')


  </body>
</html>