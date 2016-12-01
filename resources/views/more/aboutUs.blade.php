@extends('layouts.master')

@section('content')
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">About Us</div>
                    <div class="panel-body">
                        <h1>Hello, {!! $user->name !!} </h1>
                        You are logged in {!! $user->email !!}!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
