@extends('admin.admin')

@section('content')

	<h1>Users</h1>

	<table class="table">

	  <tr>
	    <th>Id</th>
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
			    <td>{{$element -> name}}</td>
			    <td>{{$element -> email}}</td>
			    <td>{{$element -> role -> name}}</td>
			    <td>{{$element -> is_active == 1 ? 'Active' : 'Not active'}}</td>
			    <td>{{$element -> created_at -> diffForHumans()}}</td>
			    <td>{{$element -> updated_at -> diffForHumans()}}</td>
			  </tr>
	  	@endforeach
	  @endif


	</table>

@stop




