@extends('admin::layouts.master')

@section('content')
	
	<h4 class="page-header">
		Edit
	
		<small class="pull-right">{{ link_to_route('admin.categories.index', 'Back') }}</small>
	</h4>
	
	<div>
		@include('admin::categories.form', array('model' => $category))
	</div>

@stop