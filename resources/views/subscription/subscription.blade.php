@extends('layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Make Payment</div>
                    <div class="panel-body">
                        <form class="form-horizontal" id="billing-form" role="form"  method="post" action="{{ url('/subscription') }}" >
                            {{ csrf_field() }}
                            <input type="hidden" name="_token" value="{{ 'csrf_token()' }}">
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
                            <div class="payment-errors">

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection

@section('footer')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script src="/js/stripe/stripe.js"></script>
@endsection