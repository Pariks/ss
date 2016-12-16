@extends('layouts.master')

@section('header-meta')
    <title>Free sex videos, Sex tube, Free porn movies - Tube8.com</title>
    <!-- FOLLOWING META TAG TAKEN FROM OLD FRONT -->
    <meta name="description" content="Tube8.com is a sex tube type of site that offers you a huge selection of free sex videos updated daily, tons of amateur sex movies. In Tube8 you can vote for your favorite porn movies, upload your best videos and share them in our community." />
    <meta name="keywords" content="sex videos, sex tube, amateur sex movies, free porn videos, porntube, porn tube, free porn" />

    <link rel="canonical" href="http://front.tube8.pandya.master.nayul-tube8.mgcorp.co/">
    <link rel="next" href="http://front.tube8.pandya.master.nayul-tube8.mgcorp.co/latest/page/2/">
    <meta name="google-site-verification" content="MkjX8fC3RoAApmJiYGHHur9WVngwWnPX-FSQkKDzdvM">
@endsection

@section('content')

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" ></li>
                <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="2" ></li>

            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item ">
                    <img src="/images/slideshow/3.jpg" class="img-responsive" alt="2x amount Gift">
                    <div class="carousel-caption">
                        <h3>Welcome</h3>
                        <p>Welcome to worls's 1st online secret santa.</p>
                    </div>
                </div>

                <div class="item active">
                    <img src="/images/slideshow/2.jpg" class="img-responsive" alt="Be a SecretSanta">
                    <div class="carousel-caption">
                        <h3> </h3>
                        <p>Bring joy on faces of your loved one by gifting through us.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="/images/slideshow/1.jpg" class="img-responsive" alt="Welcome">
                    <div class="carousel-caption">

                        <h3>Amount 2X Worth Gift</h3>
                        <p>Give gifts of amount 2x worth of the amount you pay. </p>
                    </div>
                </div>

            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true" ></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-danger">
                    <div class="panel-header" >
                        <img class="pull-right img-responsive" src="/images/santa/2.png" style="width:60px; height: 60px; display: inline-block;">
                        <div style="margin: 15px;  font-size: 36px;"> Enjoy Exclusive offers on SecretSanta </div>
                    </div>
                    <div class="panel-body">
                        <p>Be a secret santa and make your loved one happy.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        @if (Auth::guest())
                            <div class="panel panel-danger">
                                <div class="panel-header"  >
                                    <h3 style="margin-left: 15px;"><span >Become Member </span><a href="/register" style="text-decoration: none;"><span class="label label-primary ">NOW!</span></a>
                                    <span style="margin-left: 20px;"> Get <span style="font-size: 200%;">50$</span> gift credit <img src="/images/index/credit.png"   style="margin-left:10px; width: 125px; height: 100px;"></span>
                                    </h3>
                                </div>
                                <div class="panel-body">

                                </div>
                            </div>
                        @else
                            <div class="panel panel-danger">
                                <div class="panel-header"  >
                                    <h3 style="margin-left: 15px;"><span> Gift More, Earn More</span><a href="/learnHow" style="text-decoration: none;"><span class="label label-primary ">Learn How?</span></a>
                                        <span style="margin-left: 20px;"> Get <span style="font-size: 200%;">3x</span> worth gifts<img src="/images/index/earn.png"   style="margin-left:10px; width: 150px; height: 70px;"></span>
                                    </h3>
                                </div>
                                <div class="panel-body">

                                </div>
                            </div>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="card card-block" style="margin: 10px;">
                                <h3 class="card-title">What We Mean</h3>
                                <p class="card-text">We started special service on special occation of happiness. We want to allow everyone to be Santa and bring joy on precious day.</p>
                                <br><a href="/home" class="btn btn-danger" >Be a SecretSanta</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="card card-block" style="margin: 10px;">
                                <h3 class="card-title">Exclusive Offers</h3>
                                <p class="card-text">We are offering 2x worth of gifts on the amout you spend. The more you spend , almost double you get in return. Check out our exiting deals.</p>
                                <br><a href="/deal" class="btn btn-warning" >Explore Deals</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default " >
                            <div class="card card-block" style="margin: 10px;">
                                <h3 class="card-title">How We Work</h3>
                                <p class="card-text">If you are confuse what to gift on christmas? and if you want to be mordern SecretSanta then we are here to solve youjr problem. </p>
                                <br><a href="/howItWorks" class="btn btn-success" >Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                    <div class="card card-block" style="margin: 10px;">
                        <h3 class="card-title">Sponsored </h3>
                        <p class="card-text">Find more Exciting products and paste their links in suggestion at time of placing gift order.</p>
                        <a href="amazon" class="btn btn-warning" >Amazon.ca</a>
                    </div>
                    <div class="card card-block" style="margin: 10px;">
                        <h3 class="card-title">Sponsored </h3>
                        <p class="card-text">Find best deals on electronics and consumer goods and paste their links in suggestion at time of placing gift order..</p>
                        <a href="bestbuy" class="btn btn-primary" >BestBuy.ca</a>
                    </div>

            </div>
        </div>


    </div>
@endsection