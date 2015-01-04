@extends('admin::layouts.master')

@section('content')
<div class="row">
<div class="col-lg-12">
  <section class="panel">
      <header class="panel-heading">
          Edit Product
		<small class="pull-right">{{ link_to_route('admin.products.index', 'Back') }}</small>
      </header>
      <div class="panel-body">
      <div class="col-lg-6">
        @include('admin::products.form', array('model' => $product))
      </div>
	</div>
  </section>
</div>
</div>

@stop