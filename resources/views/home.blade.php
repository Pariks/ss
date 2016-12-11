@extends('layouts.master')

@section('content')

<div class="jumbotron" style="background-image: url('/images/slideshow/3.jpg'); width: 100%; height: 300px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="align-content: center; text-align: center;">
                    <h2 >Welcome! {{$user->name}}</h2>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-4 col-md-offset-4">
                            <h4>Let's begin Gifting</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <p>Get <span class="label label-success">130$</span> worth of gifts on <span class="label label-default">100$</span> you spend.
                    <a class="btn btn-link" href="{{ url('/deal') }}">
                        <i class="fa fa-plus-circle"></i>
                        More Deals
                    </a>
                </p>
            </div>
        </div>
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/home') }}">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Fill out details and send gift</h4>
                        </div>
                        <div class="card-block">
                            <div class="panel panel-default">
                                <div class="panel-heading">Sender's Detail - Billing Address</div>
                                <div class="panel-body">

                                   @include('address.sender')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="card">
                        <div class="card-header">

                        </div>
                        <div class="card-block">
                            <div class="panel panel-default">
                                <div class="panel-heading">Receiver's Detail - Gifting Address</div>
                                <div class="panel-body">
                                    @include('address.receiver')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
