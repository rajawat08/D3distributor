@extends('admin::layouts.master')

@section('content')
<section class="panel">
    <header class="panel-heading">
    All Categories ({{ $categories->getTotal() }})           
    {{ link_to_route('admin.categories.create', 'Add New',null,array('class' =>' pull-right' )) }}
    </header>
    <div class="panel-body">
    <section id="unseen">	
	<table class="table table-bordered table-striped table-condensed">
		<thead>
			<th>No</th>
			<th>Name</th>
			<th>Slug</th>
			<th>Description</th>
			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($categories as $category)
			<tr>
				<td>{{ $no }}</td>
				<td>{{ $category->name }}</td>
				<td>{{ $category->slug }}</td>
				<td>{{ $category->description }}</td>
				<td>{{ $category->created_at }}</td>
				<td class="text-center">
					<a href="{{ route('admin.categories.edit', $category->id) }}"><i class="fa fa-edit" ></i></a>
					
					@include('admin::partials.modal', ['data' => $category, 'name' => 'categories'])
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{{ pagination_links($categories) }}
	</div>
 </section>
		</div>
    </section>
@stop