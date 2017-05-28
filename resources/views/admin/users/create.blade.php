@extends('admin.admin')

@section('content')

	<h1>Create User</h1>

	<div class="row">
		{!! Form::open(['method' => 'POST', 'url' => 'admin/users/store', 'files' => true]) !!}

			<input type="hidden" name="_method" value="POST">
			{{ csrf_field()}}

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
		{!! Form::close() !!}
	</div>

	@include('includes.form_error')

@stop