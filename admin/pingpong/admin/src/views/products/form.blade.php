@if(isset($model))
{{ Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.products.update', $model->id], 'name' => 'product_form', 'id' => 'product_form']) }}
@else
{{ Form::open(['files' => true, 'route' => 'admin.products.store' , 'name' => 'product_form', 'id' => 'product_form']) }}
@endif
	<div class="form-group">
    	{{Form::hidden('images',null,array('id' => 'file_hidden'))}}
         
    </div>
	<div class="form-group col-md-6">
		{{ Form::label('name', 'Product Name:') }}
		{{ Form::text('name', null, ['class' => 'form-control' , 'required' => true ]) }}
		
	</div>
	<div class="form-group col-md-6">
		{{ Form::label('short_discription', 'Product Title:') }}
		{{ Form::text('short_discription', null, ['class' => 'form-control','required' => true]) }}
		
	</div>
    <div class="form-group">
		
        <div class="col-md-4">
        {{ Form::label('name', 'Quantity:') }}
		{{ Form::text('quantity', isset($model) ? $model->quantity : 0, ['class' => 'form-control' ,'required' => true]) }}
        </div>        
        <div class="col-md-4">
        {{ Form::label('price', 'Price:') }}
		{{ Form::text('price', isset($model) ? $model->price : 0, ['class' => 'form-control','required' => true]) }}
        </div>
        <div class="col-md-4">
        {{ Form::label('shipping', 'Shipping:') }}
		{{ Form::text('shipping', isset($model) ? $model->shipping : 0, ['class' => 'form-control','required' => true]) }}
        <br><br>
        </div>
        
	</div>
	
    <div class="form-group col-md-4">
    
		{{ Form::label('category', 'Category:') }}
		{{Form::select('category_id', $main_category, isset($model) ? $model->level : 0, array('class' => 'form-control','required' => true))}}
		
	</div>
    <div class="form-group col-md-4">
    {{ Form::label('status', 'Status:') }}
    {{ Form::select('status',array('Disabled','Enabled'),isset($model) ? $model->status : 1,array('class' => 'form-control','required' => true))}}
    
    </div>
    <div class="form-group col-md-4">
    {{ Form::label('available', 'Availability:') }}
    {{ Form::select('available',array('Out of stock','In stock'),isset($model) ? $model->available : 0,array('class' => 'form-control','required' => true))}}
    
    </div>
     <div class="form-group">
    {{ Form::label('images', 'Add Product Images:') }} 
    </div>
    <div class="form-group">
     <span class="btn btn-success fileinput-button">
        <i class="glyphicon glyphicon-plus"></i>
        <span>Add Images...</span>        
        <input id="fileupload" type="file" name="files[]" multiple>
      
    </span>
    @if (isset($model))
     @include('admin::partials.gallary', ['data' => $model, 'name' => 'products' , 'edit' => true])
    @endif
   	<br>
    <br>
    
    <div id="progress" class="progress">
        <div class="progress-bar progress-bar-success"></div>
    </div>
    
    <div id="files" class="files col-sm-12"></div>
    <br>
    
    </div>
    
   
    
	<div class="form-group">
		{{ Form::label('discription', 'Description:') }}
		{{ Form::textarea('discription', null, ['class' => 'form-control ckeditor']) }}
		
	</div>
	<div class="form-group">
		{{ Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-success start']) }}
	</div>
{{ Form::close() }}