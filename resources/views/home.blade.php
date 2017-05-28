@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>

                Go to <a href="{{ route('all_users') }}"> Dashboard</a>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</div>
@endsection


