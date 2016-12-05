@extends('layouts.master')

@section('content')
    <link href="/css/custome/howItWorks.css" rel="stylesheet">
    <div class="container">
            <div class="row center-block" id="row-main" >
                <div id="hearder">
                    <p class="lead" >Get <span class="label label-success">130$</span> worth of gifts on <span class="label label-default">$</span> you spend.
                </div>
                <div id="body" >
                    <span class="btn btn-default btn-white pull-right" data-toggle="tooltip" data-placement="top"  id="clickToCopy"  title="Click to Copy!">DEAL</span>
                    <span class="blink-link pull-right">Copy your <span class="label label-warning">Deal</span> code NOW!<i class="fa fa-arrow-right"></i> </span>
                </div>
            </div>
    </div>
@endsection
