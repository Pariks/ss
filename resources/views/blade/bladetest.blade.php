@extends('layouts.master')

@section('title')
    Blade
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
                    <img src="/images/slideshow/3.jpg" alt="2x amount Gift">
                    <div class="carousel-caption">
                        <h3>Welcome</h3>
                        <p>Welcome to worls's 1st online secret santa.</p>
                    </div>
                </div>

                <div class="item active">
                    <img src="/images/slideshow/2.jpg" alt="Be a SecretSanta">
                    <div class="carousel-caption">
                        <h3> </h3>
                        <p>Bring joy on faces of your loved one by gifting through us.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="/images/slideshow/1.jpg" alt="Welcome">
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
                        <img class="pull-right" src="/images/santa/2.png" style="width:60px; height: 60px; display: inline-block;">
                        <div style="margin: 15px;  font-size: 36px;"> Enjoy Exclusive offers on SecretSanta </div>
                    </div>
                    <div class="panel-body">
                        <p>Be a secret santa and make your loved one happy.</p>
                    </div>
                </div>
                <div class="panel panel-danger">
                    <div class="panel-header"  >
                        <h3 style="margin-left: 15px;"><span >Mercedes CLA250</span><span class="label label-success ">Offer</span></h3>
                    </div>
                    <div class="panel-body">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="card card-block" style="margin: 10px;">
                                <h3 class="card-title">What We Mean</h3>
                                <p class="card-text">We started special service on special occation of happiness. We want to allow everyone to be Santa and bring joy on precious day.</p>
                                <a href="/home" class="btn btn-danger" >Be a SecretSanta</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-success" >
                            <div class="card card-block" style="margin: 10px;">
                                <h3 class="card-title">Exclusive Offers</h3>
                                <p class="card-text">We are offering 2x worth of gifts on the amout you spend. The more you spend , almost double you get in return. Check out our exiting deals.</p>
                                <a href="/deal" class="btn btn-warning" >Explore Deals</a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="panel panel-default" >
                            <div class="card card-block" style="margin: 10px;">
                                <h3 class="card-title">How We Works</h3>
                                <p class="card-text">If you are confuse what to gift on christmas? and if you want to be mordern SecretSanta then we are here to solve youjr problem. </p>
                                <a href="/howItWorks" class="btn btn-success" >Know More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">

                    <div class="card card-block" style="margin: 10px;">
                        <h3 class="card-title">Sponsored </h3>
                        <p class="card-text">Find more Exciting products and paste their links in suggestion.</p>
                        <a href="amazon" class="btn btn-warning" >Amazon.ca</a>
                    </div>
                <div class="card card-block" style="margin: 10px;">
                    <h3 class="card-title">Sponsored </h3>
                    <p class="card-text">Find best deals on electronics and consumer goods.</p>
                    <a href="bestbuy" class="btn btn-primary" >BestBuy.ca</a>
                </div>

            </div>
        </div>


    </div>
@endsection