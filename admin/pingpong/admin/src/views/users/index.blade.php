@extends('admin::layouts.master')

@section('content')
	<section class="panel">
    	<header class="panel-heading">
        All Users ({{ $users->getTotal() }})            
        {{ link_to_route('admin.users.create', 'Add New',null,array('class' =>'pull-right' )) }}
        </header>
        <div class="panel-body">
        <section id="unseen">
        	<table class="table table-bordered table-striped table-condensed">
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
                            <a href="{{ route('admin.users.edit', $user->id) }}" title="edit user"><i class="fa fa-edit"> </i></a>                            
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
        </section>
		</div>
    </section>

@stop