<!DOCTYPE html>
<html lang="en">
<head> 
 <title>Compare Products</title> 
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
				{{Form::open(['route' => 'compared','method' => 'post'])}}
                <br/>
                
                 <div class="col-lg-2">                
                {{Form::select('slug',$categories,'',['class' => 'form-control' ])}}
                 </div>
                <div class="col-lg-6">                
                {{Form::text('alias','',['class' => 'form-control type_search'  , 'placeholder' => 'Search & select products'])}}
                </div>
                <div class="col-lg-2">
                <input type="submit" class="form-control btn btn-info" value="Compare"/>
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

            <div class="shop_wrapper">
            	<div class="shop-top">
                    <div class="col-lg-9 col-md-9 col-sm-6 col-xs-12">
                       
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
                


                   <div class="doc">
                   				@if(count($compared_products)>0)
                                <h3>Compare Products</h3>
                                @endif
                            	
                                <table class="table table-striped">
                                	 
                                    
                                       @foreach($compared_products as $column => $product)                         	 				
                                           <tr>
                                           <th>{{$column != 'id' ? $column : ''}}</th> 
                                            @foreach($product as $item)
                                            	@if($column == 'id')
                                                 
                                                <td>{{HTML::image('/images/products/'.Comman::getImage($item),'',array('width' => '150' ,'height' => '150'))}}</td>
                                            	@elseif($column == 'available')
                                                  <td>{{$item == 0 ? 'Out of stock' : 'In Stock'}}</td>
                                                @elseif($column == 'price')
                                                <td>{{$item == 0 ? 'Free' : $item." USD"}}</td>
                                                @else
                                                  <td>{{$item}}</td>
                                                @endif
                                             
                                            @endforeach                                        
                                           </tr>                                    
                                      @endforeach     
                                  <tbody>
                                                            
                                  </tbody>
                                </table>
                            </div> 
    
                   
                    <div class="clearfix"></div>
                   

            </div><!-- end shop-wrapper -->
		</div>
    </section> 


    
  @include('layouts.footer')
        
@include('layouts.scripts')
<script type="text/javascript">
var tags = {{ json_encode($tags); }}

console.log(tags);


var cities = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('text'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  prefetch: "{{asset('cities.json')}}"
});
cities.initialize();

var creditors = new Bloodhound({
   /* datumTokenizer: function (d) {
        return Bloodhound.tokenizers.whitespace(d.value)
    },
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        url: "ajax/typehead?query=%QUERY&cat="+category
	
    }*/
	datumTokenizer: function (d) {
		return Bloodhound.tokenizers.whitespace(d.isim);
	},
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    remote: {
        url: 'ajax/typehead',
        ajax:{
            type:"POST",
            cache:false,
            data:{
                limit:5
            },
            beforeSend:function(jqXHR,settings){
                settings.data+="&query="+$('.tt-input').typeahead('val')+"&slug="+$('select').val();
            },
            complete:function(jqXHR,textStatus){
            creditors.clearRemoteCache();
            }
        }
    }
});
creditors.initialize();
/**
 * Objects as tags
 */
elt = $('input[type=text]');
elt.tagsinput({
  itemValue: 'alias',
  itemText: 'name',
  typeaheadjs: {
    name: 'cities',
    displayKey: 'name',
    source: creditors.ttAdapter()
  }
});
for(var i = 0 ; i<tags.length;i++){
elt.tagsinput('add',tags[i]);	
}

</script>

  </body>
</html>