@extends('admin.admin')

@section('content')
	
	<h1>Posts</h1>

	<table class="table">

	  <tr>
	    <th>Id</th>
	    <th>Photo</th>
	    <th>Title</th>
	    <th>Body</th>
	    <th>Category</th>
	    <th>User</th>
	    <th>Created</th>
	    <th>Updated</th>
	  </tr>

	  @if ($posts)
	  	@foreach ($posts as $element)
	  		 <tr>
			    <td>{{$element -> id}}</td>
			    <td><img src="../images/{{$element -> photo ? $element -> photo -> file : "No photo"}}" width="50px" alt=""></td>
			    <td>{{$element -> title}}</td>
			    <td>{{$element -> body}}</td>
			    <td>{{$element -> category_id}}</td>
			    <td>{{$element -> user -> name}}</td>
			    <td>{{$element -> created_at -> diffForHumans()}}</td>
			    <td>{{$element -> updated_at -> diffForHumans()}}</td>
			    
			  </tr>
	  	@endforeach
	  @endif


	</table>

@stop