@extends('layouts.master')


@section('content')
    <link href="/css/custome/deals.css" rel="stylesheet">
    <div class="jumbotron center-block" style="background-image: url('/images/deals/dealCover.jpg'); width: 100%;  height: 300px;">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading" style="   ">
                       <img src="/images/deals/deal.png" class="card-img" style="float: left; top: 0px; " height="100" ><h2>Exclusive Deals and Offers Get gift worth up to <span class="label label-success" >5x</span></h2>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-2">
                                <h4>Happiness at your single click</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        @foreach($deals as $deal)
        <div class="row center-block" id="deal{{$deal['amount']}}">
            <div id="deal{{$deal['amount']}}-hearder">
                <p class="lead" >Get <span class="label label-success">130$</span> worth of gifts on <span class="label label-default">{{$deal['amount']}}$</span> you spend.
            </div>
            <div id="deal{{$deal['amount']}}-body" >
                <span class="btn btn-default btn-white pull-right" data-toggle="tooltip" data-placement="top"  id="clickToCopy{{$deal['amount']}}"  title="Click to Copy!">DEAL{{$deal['amount']}}</span>
                <span class="blink-link pull-right">Copy your <span class="label label-warning">Deal</span> code NOW!<i class="fa fa-arrow-right"></i> </span>
            </div>
        </div>
        @endforeach
    </div>
    <script src="/js/custome/deals.js"></script>
    <script src="/js/notification/notify.js"></script>
@endsection
