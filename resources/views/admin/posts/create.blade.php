@extends('admin.admin')

@section('content')
	
	<h1>Create Post</h1>


	<div class="row">
		{!! Form::open(['method' => 'POST', 'url' => 'admin/posts/store', 'files' => true]) !!}

			<input type="hidden" name="_method" value="POST">
			{{ csrf_field()}}

			<div class="row col-sm-4">
				<div class="form-group">
					{!! Form::label('title', 'title') !!}
					{!! Form::text('title', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('photo_id', 'photo_id') !!}
					{!! Form::file('photo_id', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('category_id', 'category_id') !!}
					{!! Form::select('category_id', ['' => 'options'] + $categories, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('body', 'Description') !!}
					{!! Form::textarea('body', null, ['class' => 'form-control', 'ros' => '3']) !!}
				</div>

				
				<div class="form-group">
					{!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
				</div>

			</div>
		{!! Form::close() !!}
	</div>

	@include('includes.form_error')

@stop