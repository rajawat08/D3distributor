@if(isset($model))
{{ Form::model($model, ['method' => 'PUT', 'files' => true, 'route' => ['admin.users.update', $model->id]]) }}
@else
{{ Form::open(['files' => true, 'route' => 'admin.users.store']) }}
@endif
	<div class="form-group">
		{{ Form::label('firstname', 'First Name:') }}
		{{ Form::text('first_name', null, ['class' => 'form-control']) }}
		{{ $errors->first('first_name', '<div class="text-danger">:message</div>') }}
	</div>
    <div class="form-group">
		{{ Form::label('lastname', 'Last Name:') }}
		{{ Form::text('last_name', null, ['class' => 'form-control']) }}
		{{ $errors->first('last_name', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('username', 'Username:') }}
		{{ Form::text('username', null, ['class' => 'form-control']) }}
		{{ $errors->first('username', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('email', 'Email:') }}
		{{ Form::email('email', null, ['class' => 'form-control']) }}
		{{ $errors->first('email', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('password', 'Password:') }}
		{{ Form::password('password', ['class' => 'form-control']) }}
		{{ $errors->first('password', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::label('role', 'Role:') }}
		{{ Form::select('role', $roles, isset($role) ? $role : null, ['class' => 'form-control']) }}
		{{ $errors->first('role', '<div class="text-danger">:message</div>') }}
	</div>
	<div class="form-group">
		{{ Form::submit(isset($model) ? 'Update' : 'Save', ['class' => 'btn btn-success']) }}
	</div>
{{ Form::close() }}