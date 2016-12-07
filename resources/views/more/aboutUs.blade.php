@extends('layouts.master')

@section('content')
    <link href="/css/custome/aboutUs.css" rel="stylesheet">
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
    <div class="container">
        <div class="row center-block" id="row-aboutUs">
            <div class="col-md-4 col-md-offset-4">
                <h2>About Us</h2>
            </div>
            <div class="col-md-10 col-md-offset-1 divider">

            </div>
            <div class="col-md-12">
                <h3>Who We Are</h3>
                <p id="paragraph">We are group of developers turned entrepreneurs. We carry modern sense of business which involves creating web services with help of technology that makes human life easy, safe, secure and fast.</p>
            </div>
            <div class="col-md-10 col-md-offset-1 divider">

            </div>
            <div class="col-md-12">
                <h3>We Buy</h3>
                <p>We Buy best gift or gifts from all available options.</p>
            </div>
            <div class="col-md-10 col-md-offset-1 divider">

            </div>
            <div class="col-md-12">
                <h3>We Wrap&Send</h3>
                <p>We wrap your gift in nice wrapper and we send it to the receiver's address.</p>
            </div>
            <div class="col-md-10 col-md-offset-1 divider">

            </div>
            <div class="col-md-12">
                <h3>You Relax</h3>
                <p>You relax and enjoy hassle free gifting service.</p>
            </div>
        </div>
    </div>
@endsection
