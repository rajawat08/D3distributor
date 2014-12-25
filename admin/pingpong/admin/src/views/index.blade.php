@extends('admin::layouts.master')

@section('content')

<div class="row state-overview">

                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol terques">
                              <i class="fa fa-user"></i>
                          </div>
                          <div class="value">
                              <h1 class="count">
                                 {{ Pingpong\Admin\Entities\User::count() }}
                              </h1>
                              <p>All Users</p>
                          </div>
                      </section>
                  </div>
                  
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol red">
                              <i class="fa fa-road"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count2">
                                 {{ Pingpong\Admin\Entities\Visitor::sum('hits') }}
                              </h1>
                              <p>All Visitors</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol yellow">
                              <i class="fa fa-bars"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count3">
                                  0
                              </h1>
                              <p>All Products</p>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                      <section class="panel">
                          <div class="symbol blue">
                              <i class="fa fa-bar-chart-o"></i>
                          </div>
                          <div class="value">
                              <h1 class=" count4">
                                  0
                              </h1>
                              <p>Total Profit</p>
                          </div>
                      </section>
                  </div>
              </div>
<div class="row">
	<div class="col-md-6">
		<div class="panel panel-admin">
			<div class="panel-heading">
				Users
			</div>
			<table class="table">
				<tr>
					<td>All Users</td>
					<td>{{ Pingpong\Admin\Entities\User::count() }}</td>
				</tr>
				@foreach(Role::all() as $role)
				<tr>
					<td>{{ Str::plural($role->name) }}</td>
					<td>{{ Pingpong\Admin\Entities\User::hasRole($role->slug)->count() }}</td>
				</tr>
				@endforeach
			</table>
		</div>

	</div>
	<div class="col-md-6">
		<div class="panel panel-admin">
			<div class="panel-heading">
				Visitors
			</div>
			<table class="table">
				<tr>
					<th>Total Hits</th>
					<td>{{ Pingpong\Admin\Entities\Visitor::sum('hits') }}</td>
				</tr>
				<tr>
					<th>Page Hits Today </th>
					<td>{{ Pingpong\Admin\Entities\Visitor::today()->sum('hits') }}</td>
				</tr>
				<tr>
					<th>Online Users</th>
					<td>{{ Pingpong\Admin\Entities\Visitor::getOnlineUsers() }}</td>
				</tr>
				<tr>
					<th>Total Visitors Today</th>
					<td>{{ Pingpong\Admin\Entities\Visitor::today()->count() }}</td>
				</tr>
			</table>
		</div>

	</div>
	
</div>

@endsection

@section('style')
<style type="text/css">
	td{
		widtd:50px;
	}
	td{
		text-indent: 10px;
	}
</style>
@stop