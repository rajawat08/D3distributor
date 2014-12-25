@if(isset($model))
{{ Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.products.update', $model->id]]) }}
@else
{{ Form::open(['files' => true, 'route' => 'admin.products.store']) }}
@endif

	<div class="form-group">
		{{ Form::label('name', 'Product Name:') }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}
		
	</div>
	<div class="form-group">
		{{ Form::label('short_discription', 'Product Title:') }}
		{{ Form::text('short_discription', null, ['class' => 'form-control']) }}
		
	</div>
    <div class="form-group">
		
        <div class="col-sm-4">
        {{ Form::label('name', 'Quantity:') }}
		{{ Form::text('quantity', 0, ['class' => 'form-control']) }}
        </div>        
        <div class="col-sm-4">
        {{ Form::label('price', 'Price:') }}
		{{ Form::text('price', 0, ['class' => 'form-control']) }}
        </div>
        <div class="col-sm-4">
        {{ Form::label('shipping', 'Shipping:') }}
		{{ Form::text('shipping', 0, ['class' => 'form-control']) }}
        </div>
	</div>

    <div class="form-group">
    <br><br><br><br>
		{{ Form::label('category', 'Category:') }}
		{{Form::select('category_id', $main_category, isset($model) ? $model->level : 0, array('class' => 'form-control'))}}
		
	</div>
    <div class="form-group">
    {{ Form::label('status', 'Status:') }}
    {{ Form::select('status',array('Disabled','Enabled'),1,array('class' => 'form-control'))}}
    
    </div>
    <div class="form-group">
    {{ Form::label('available', 'Availability:') }}
    {{ Form::select('available',array('In stock','Out of stock'),0,array('class' => 'form-control'))}}
    
    </div>
	<div class="form-group">
		{{ Form::label('discription', 'Description:') }}
		{{ Form::textarea('discription', null, ['class' => 'form-control']) }}
		
	</div>
	<div class="form-group">
		{{ Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-success']) }}
	</div>
{{ Form::close() }}