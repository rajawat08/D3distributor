@if(isset($model))
{{ Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.categories.update', $model->id]]) }}
@else
{{ Form::open(['files' => true, 'route' => 'admin.categories.store']) }}
@endif
{{Form::hidden('active',1)}}
	<div class="form-group">
		{{ Form::label('name', 'Name:') }}
		{{ Form::text('name', null, ['class' => 'form-control']) }}
		{{ $errors->first('name', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('slug', 'Slug:') }}
		{{ Form::text('slug', null, ['class' => 'form-control']) }}
		{{ $errors->first('slug', '<div class="text-danger">:message</div>') }}
	</div>
    
    <div class="form-group">
		{{ Form::label('level', 'Lavel:') }}
		{{Form::select('level', $main_category, isset($model) ? $model->level : 0, array('class' => 'form-control'))}}
		{{ $errors->first('slug', '<div class="text-danger">:message</div>') }}
	</div>
    <div class="form-group">
    {{ Form::label('deactive', 'deactive:') }}
    {{Form::checkbox('active', 0, true, array('class' => 'name'))}} 
    
    </div>
	<div class="form-group">
		{{ Form::label('description', 'Description:') }}
		{{ Form::textarea('description', null, ['class' => 'form-control']) }}
		{{ $errors->first('description', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-primary']) }}
	</div>
{{ Form::close() }}