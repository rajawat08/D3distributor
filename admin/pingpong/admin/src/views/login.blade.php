@extends('admin::layouts.login')

@section('content')
	
    {{ Form::open(['route' => 'admin.login.store','class' => 'form-signin']) }}
        <h2 class="form-signin-heading">Admin Panel</h2>
        <div class="login-wrap">
       {{ Form::text('username', '', ['class' => 'form-control', 'placeholder' => 'Username','autofocus' => true]) }}
       {{ $errors->first('username', '<div class="text-danger">:message</div>') }}
       {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
       {{ $errors->first('password', '<div class="text-danger">:message</div>') }}
       {{ Form::submit('Login', ['class' => 'btn btn-lg btn-login btn-block']) }}
        </div>  

       {{ Form::close()}}
@endsection