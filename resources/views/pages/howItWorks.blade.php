@extends('layouts.master')

@section('content')
    <link href="/css/custome/howItWorks.css" rel="stylesheet">

    <div class="container">
            <div class="row center-block" id="row-main" >
                <div class="col-md-12" id="config">
                    <img class="img-responsive img-circle pull-right" src="/images/how/login.png" width="100" height="100">
                    <span class="pull-left" id="span-left">First <a href="/login">Login</a> or <a href="/register">Create Account</a> </span>
                    <p class="pull-left" id="small-paragraph-left">Most important thing is to create account to enjoy <br>services and deals.</p>
                </div>
                <div class="col-md-10 col-md-offset-1 divider">

                </div>
                <div class="col-md-12" id="config">
                    <img class="img-responsive img-circle pull-left" src="/images/how/details.png" width="100" height="100" id="home">
                    <span class="pull-right" id="span-right">Enter Your and Receiver's details on <br><a href="/home">Home</a> page</span>
                    <p class="pull-right" id="small-paragraph-right">Fill you details and details of person who you want to send gift.</p>
                </div>
                <div class="col-md-10 col-md-offset-1 divider">

                </div>
                <div class="col-md-12" id="config">
                    <img class="img-responsive img-circle pull-right" src="/images/how/reference.png" width="100" height="100" style="padding-top: 20px;">
                    <span class="pull-left" id="span-left">Product Reference</span>
                    <p class="pull-left" id="small-paragraph-left">Copy-paste link of product that you want to suggest to <br>send as gift from<a class="label label-warning" href="amazon">Amazon.ca</a> or <a class="label label-danger" href="bestbuy">Bestbuy.ca</a> on <a href="/home">Home</a> page </p>
                </div>
                <div class="col-md-10 col-md-offset-1 divider">

                </div>
                <div class="col-md-12" id="config">
                    <img class="img-responsive img-circle pull-left" src="/images/how/deal.png" width="100" height="100" id="home">
                    <span class="pull-right" id="span-right">Enter <a href="/deal">Deal</a> code</span>
                    <p class="pull-right" id="small-paragraph-right">Enjoy exclusive offer on SecreSanta and get maximum <br>gifts for amount you pay</p>
                </div>
                <div class="col-md-10 col-md-offset-1 divider">

                </div>
            </div>
    </div>
@endsection
