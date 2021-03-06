@extends('layouts.master')

@section('content')

    @if($data['success'] === true)
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Congratulations! Payment Successful.</div>
                        <div class="panel-body">

                            <form class="form-horizontal" role="form">
                            <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">Status</label>

                                    <div class="col-md-6">
                                        <span class="label label-success">Payment Successful</span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cardNumber" class="col-md-4 control-label">Amount</label>

                                    <div class="col-md-6">
                                        <span class="label label-default" style="font-weight: 500; font-size: 24px;">${{$data['amount']}}</span>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cardNumber" class="col-md-4 control-label">Taxes</label>

                                    <div class="col-md-6">
                                        <span class="label label-danger" >${{$data['taxes']}}</span>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="cvc" class="col-md-4 control-label">Do more</label>

                                    <div class="col-md-6">
                                        <a href="{{url('/')}}" class="btn btn-primary btn-block">Continue Gifting</a>
                                    </div>
                                </div>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <div class="alert alert-warning center-block">
                        <strong>Error!</strong> Something went wrong. Please proceed again.
                    </div>
                 </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Make Payment</div>
                        <div class="panel-body">
                            <form class="form-horizontal" id="billing-form" role="form"  method="post" action="{{ url('/billingConfirmation') }}" >
                                {{ csrf_field() }}

                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">From</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control" data-stripe="email" name="email" value="{{ $user->email }}"  disabled>

                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('cardNumber') ? ' has-error' : '' }}">
                                    <label for="cardNumber" class="col-md-4 control-label">Card Number</label>

                                    <div class="col-md-6">
                                        <input id="cardNumber" type="text" class="form-control" data-stripe="number" name="cardNumber" value="{{ old('cardNumber') }}" required autofocus>

                                        @if ($errors->has('cardNumber'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('cardNumber') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('cvc') ? ' has-error' : '' }}">
                                    <label for="cvc" class="col-md-4 control-label">CVC</label>

                                    <div class="col-md-2">
                                        <input id="cvc" type="text" class="form-control" data-stripe="cvc" required >

                                        @if ($errors->has('cvc'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('cvc') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('expiration') ? ' has-error' : '' }}">
                                    <label for="expiration" class="col-md-4 control-label">Expiration</label>

                                    <div class="col-md-3">
                                        {{  Form::selectMonth('month', null, ['data-stripe' => 'exp-month']) }}
                                        {{ Form::selectYear('year', date('Y'), date('Y')+10, null, ['data-stripe' => 'exp-year']) }}

                                    </div>

                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember-card"> Remember Card
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-4">
                                        <input type="submit" value="Make Payment" class="btn btn-primary pull-right">

                                        </input>

                                    </div>
                                </div>
                                <div class="payment-errors" style="color: red; font-weight: bold; font-family: 'Lato', sans-serif;">

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection

@section('footer')
                <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
                <script src="/js/stripe/stripe.js"></script>
@endsection