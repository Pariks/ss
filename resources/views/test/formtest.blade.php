
@extends('layouts.master')

@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ url('/procedeToPayment') }}">
    {{ csrf_field() }}
<div class="form-group">
        <label for="contry" class="col-md-4 control-label">Deal Code</label>

        <div class="col-md-6">
            <input id="dealcode" type="text" class="form-control" name="dealcode" placeholder="Example: DEAL100 (if applicable)" required>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary pull-right">
                <i class="fa fa-money"></i> <span>Procede To Payments</span>
            </button>
        </div>
    </div>
</form>
    @endsection

