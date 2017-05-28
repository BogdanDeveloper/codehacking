@extends('admin.admin')

@section('content')

	<h1>Edit User</h1>

	<div class="row">
		{!! Form::model($user, ['method' => 'POST', 'url' => ['admin/users/update', $user -> id], 'files' => true]) !!}

			{{ csrf_field()}}
			<input type="hidden" name="_method" value="PATCH">

			<div class="row col-sm-4">
				<div class="form-group">
					{!! Form::label('name', 'name') !!}
					{!! Form::text('name', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('email', 'email') !!}
					{!! Form::text('email', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('password', 'password') !!}
					{!! Form::password('password', ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('photo_id', 'Photo') !!}
					{!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('is_active', 'is_active') !!}
					{!! Form::select('is_active', [1 => 'active', 0 => 'Not active'], null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('Role id', 'Role id') !!}
					{!! Form::select('role_id', [1 => 'admin', 2 => 'subscriber'], null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
				</div>

			</div>

			<div class="col-sm-4">
				<img src="../{{$user -> photo ? $user -> photo -> file : 'http://placehold.it/350x150'}}" alt="" class="img-responsive img-rounded">

			</div>

		{!! Form::close() !!}



		{!! Form::open(['method' => 'DELETE', 'url' => ['admin/users/delete', $user -> id]]) !!}
			{{ csrf_field() }}
			<input type="hidden" name="_method" value="DELETE">
			
			{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

			
		{!! Form::close() !!}

	</div>

	@include('includes.form_error')

@stop