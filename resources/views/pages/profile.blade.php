@extends('layouts.master')

@section('content')
    <link href="/css/custome/profile.css" rel="stylesheet">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>{{$user->name}}'s Profile</h2></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                            <img src="/images/uploads/avatars/{{$user->avatar}}" style="width: 150px; height: 150px; float: left;border-radius: 50%;">
                            </div>
                            <div class="col-md-9">
                                 <form enctype="multipart/form-data" action="/profile" method="post">
                                     <label>Upload Profile Image</label>
                                     <input class="btn btn-default btn-file" type="file" name="avatar" >
                                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                                     <input type="submit" class="pull-right btn btn-primary" value="Upload">
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3>Basic Info</h3><span></span>

                        </div>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="email" class="col-md-5 control-label">Email</label>

                                <div class="col-md-6">
                                    <span >{{$user->email}}</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cardNumber" class="col-md-5 control-label">Name</label>

                                <div class="col-md-6">
                                    <span>{{$user->name}}</span>

                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cvc" class="col-md-5 control-label">Status</label>
                                <div class="col-md-6">
                                    <span id="user-status">{{ucfirst($user->user_status)}} User</span>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3>Gift Sent</h3><span></span>
                        </div>

                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="email" class="col-md-5 control-label">Last Gift Amount</label>

                                <div class="col-md-6" style="margin-top: 10px;" >
                                    <span class="alert alert-danger">0 $</span>
                                </div>
                            </div>

                            <div class="form-group" >
                                <label for="cardNumber" class="col-md-5 control-label" style="margin-top: 5px;">Total Gift Amount</label>

                                <div class="col-md-6" style="margin-top: 20px;">
                                    <span class="alert alert-danger">0 $</span>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3>Earned Credit</h3>
                        </div>

                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <label for="email" class="col-md-5 control-label">Earned Points</label>

                                <div class="col-md-3" style="margin-top: 10px;" >
                                    <span class="alert alert-danger">0 $</span>
                                </div>
                            </div>

                            <div class="form-group" >
                                <label for="cardNumber" class="col-md-5 control-label" style="margin-top: 5px;">Earned Money</label>

                                <div class="col-md-3" style="margin-top: 20px;">
                                    <span class="alert alert-danger">0 $</span>
                                </div>
                                <div class="col-md-3" style="margin-top: 20px;">
                                    <a href="/learnHow" class="btn btn-warning pull-right">Learn More</a>
                                </div>
                            </div>

                            <div class="form-group" >


                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
