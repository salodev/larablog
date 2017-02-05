@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><b class="text-danger">Permission denied!</b></div>

                <div class="panel-body bg-danger text-danger">
					<p>
                    Sorry {{ Auth::user()->name }}, but you can not do it!<br /> Please, contact your administrator instead.
					</p>
					<p><a href="/home">Back to home</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
