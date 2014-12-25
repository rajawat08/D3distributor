@extends('admin::layouts.master')

@section('content')
<div class="row">
<div class="col-lg-12">
  <section class="panel">
      <header class="panel-heading">
          Add New
		<small class="pull-right">{{ link_to_route('admin.categories.index', 'Back') }}</small>
      </header>
      <div class="panel-body">
      <div class="col-lg-6">
		@include('admin::categories.form')
      </div>
	</div>
  </section>
</div>
</div>
@stop