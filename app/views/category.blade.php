<!DOCTYPE html>
<html lang="en">
<head> 
 <title>D3distributor</title> 
  @include('layouts.base')
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

            <div class="shop_wrapper">
            	<div class="shop-top">
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                        <p><b>{{count($products)}} Results</b></p>
                    </div>
                                    
                    <!--<div class="pull-right col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <select class="custom-select form-control">
                            <option value="menu_order" >Default sorting</option>
                            <option value="popularity" >Sort by popularity</option>
                            <option value="rating" >Sort by average rating</option>
                            <option value="date" >Sort by newness</option>
                            <option value="price" >Sort by price: low to high</option>
                            <option value="price-desc" >Sort by price: high to low</option>	
                        </select>
                    </div>-->
				</div>
                
                <div class="clearfix"></div>
                
<div class="padding-top">
@if(count($products)>0)
	
	@foreach($products as $key => $product)
       
     <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="shop_item">
            <div class="entry">
                @if(!is_null($product->image))
                {{HTML::image("images/products/".$product->image->image_name,"",["class" => "img-responsive"])}}
                @else
                {{HTML::image("demos/shop_12.jpg","",["class" => "img-responsive"])}}
                @endif
                <div class="magnifier">
                    <div class="buttons">
                    <a  rel="bookmark" href="{{$category->slug.'/'.$product->alias}}" title="view details"><i class="fa fa-2x fa-search" ></i></a>
                    </div><!-- end buttons -->
                </div><!-- end magnifier -->
            </div><!-- end entry -->
            <div class="shop_desc">
                <div class="shop_title pull-left">
                    <a href="shop-single-sidebar.html"><span>{{$product->name}}</span></a>
                    <span class="cats">{{$product->short_discription}}</span>
                </div>
                <span class="price pull-right">
                    {{$product->currency}} {{$product->price}}
                </span>
            </div><!-- end shop_desc -->
        </div><!-- end item -->
    </div><!-- end col-lg-3 -->
    @endforeach
    
    

@endif
                   
    
                   
                    <div class="clearfix"></div>
                   
                </div><!-- end padding-top -->
            </div><!-- end shop-wrapper -->
		</div><!-- end container -->
	</section><!-- end postwrapper -->
  @include('layouts.footer')
        
@include('layouts.scripts')


  </body>
</html>