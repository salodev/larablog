@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Users List</div>

                <div class="panel-body">
					<div class="row">
						<div class="col-md-1">#</div>
						<div class="col-md-4">Name</div>
						<div class="col-md-3">e-Mail</div>
						<div class="col-md-2">Role</div>
						<div class="col-md-1">&nbsp;</div>
					</div>
					@foreach ($users as $user)
					<div class="row">
						<div class="col-md-1">{{ $user->id }}</div>
						<div class="col-md-4">{{ $user->name }}</div>
						<div class="col-md-3">{{ $user->email }}</div>
						<div class="col-md-2">{{ $user->role }}</div>
						<div class="col-md-1"><a href="/users/remove/{{ $user->id }}" class="removeUser">Remove</a></div>
					</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
