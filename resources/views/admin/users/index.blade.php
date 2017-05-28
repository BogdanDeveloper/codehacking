@extends('admin.admin')

@section('content')

	@if (Session::has('deleted_user'))
		<p class="alert alert-danger">{{session('deleted_user')}}</p>
	@endif

	@if (Session::has('updated_user'))
		<p class="alert alert-success">{{session('updated_user')}}</p>
	@endif

	<h1>Users</h1>

	{{public_path()}}

	<table class="table">

	  <tr>
	    <th>Id</th>
	    <th>Photo</th>
	    <th>Name</th>
	    <th>E-mail</th>
	    <th>Role</th>
	    <th>Status</th>
	    <th>Created</th>
	    <th>Updated</th>
	  </tr>

	  @if ($users)
	  	@foreach ($users as $element)
	  		 <tr>
			    <td>{{$element -> id}}</td>
			    <td><img src="../images/{{$element -> photo ? $element -> photo -> file : "No photo"}}" width="50px" alt=""></td>
			    <td><a href="{{ route('edit_user', $element -> id) }}">{{$element -> name}}</a></td>
			    <td>{{$element -> email}}</td>
			    <td>{{$element -> role['name']}}</td>
			    <td>{{$element -> is_active == 1 ? 'Active' : 'Not active'}}</td>
			    <td>{{$element -> created_at -> diffForHumans()}}</td>
			    <td>{{$element -> updated_at -> diffForHumans()}}</td>
			    
			  </tr>
	  	@endforeach
	  @endif


	</table>

@stop




