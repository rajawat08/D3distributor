@extends('admin::layouts.master')

@section('content')
	
	<h4 class="page-header">
		All Users ({{ $users->getTotal() }})
		
		<small class="pull-right">{{ link_to_route('admin.users.create', 'Add New') }}</small>
	</h4>

	<table class="table">
		<thead>
			<th>No</th>
			<th>First Name</th>
            <th>Last Name</th>
			<th>Username</th>
			<th>Role</th>
			<th>Email</th>
			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{ $no }}</td>
                <td>{{ $user->first_name }}</td>
				<td>{{ $user->last_name }}</td>
				<td>{{ $user->username }}</td>
				<td>{{ $user->getRole() ? $user->getRole()->name : 'Unknow' }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->created_at }}</td>
				<td class="text-center">
                @if($user->type !=1)
					<a href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
					
					@include('admin::partials.modal', ['data' => $user, 'name' => 'users'])
                @endif
				</td>
			</tr>
			<?php $no++ ;?>
			@endforeach
		</tbody>
	</table>

	<div class="text-center">
		{{ pagination_links($users) }}
	</div>
@stop