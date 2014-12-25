@extends('admin::layouts.master')

@section('content')
<section class="panel">
    <header class="panel-heading">
    All Products           
    {{ link_to_route('admin.products.create', 'Add New',null,array('class' =>' pull-right' )) }}
    </header>
    <div class="panel-body">
    <section id="unseen">	
	<table class="table table-bordered table-striped table-condensed">
		<thead>
			
			<th>Name</th>
            <th>Preview</th>
			<th>Title</th>
			<th>Description</th>
			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($products as $product)
			<tr>
				
				<td>{{ $product->name }}</td>
                <td><img src="{{asset('images/small_image.jpg')}}" width="150" height="100" /></td>
				<td>{{ $product->short_discription }}</td>
				<td>{{ $product->discription }}</td>
				<td>{{ $product->created_at }}</td>
				<td class="text-center">
					<a href="{{ route('admin.products.edit', $product->id) }}"><i class="fa fa-edit" ></i></a>
					
					@include('admin::partials.modal', ['data' => $product, 'name' => 'products'])
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		
	</div>
 </section>
		</div>
    </section>
@stop