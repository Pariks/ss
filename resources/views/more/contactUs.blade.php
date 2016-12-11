@extends('layouts.master')

@section('content')
    @if(isset($data) && array_key_exists('captcha', $data))
        @if($data['captcha'] === false)
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2  alert alert-danger" style="text-align: center;">
                        <strong >Error: Please Enter Captcha!</strong>
                    </div>
                </div>
            </div>
        @endif
    @endif
    @if(isset($data) && array_key_exists('messageSubmitted', $data) && $data['captcha'] === true)
        @if($data['messageSubmitted'] === true)
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2  alert alert-success" style="text-align: center;">
                        <strong >Your message sent Successfully!</strong>
                    </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2  alert alert-danger" style="text-align: center;">
                        <strong >Error: Please resubmit for message!</strong>
                    </div>
                </div>
            </div>
        @endif
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Contact Us {{$user->name}} </h2></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/contactUs') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">From</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}"  disabled>

                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                    <label for="message" class="col-md-4 control-label">Message</label>

                                    <div class="col-md-6">
                                        <textarea id="message" type="text" rows="8" class="form-control" name="message" value="{{ old('message') }}" placeholder="Hi, bla bla bla. thanks" required></textarea>

                                        @if ($errors->has('message'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label   class="col-md-4 control-label">Enter Captcha</label>
                                    <div class="col-md-6">
                                        <div class="g-recaptcha" data-sitekey="6LfLRA4UAAAAAJTMRd3h2l0M01tXqRBoHZfLrjPP"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary pull-right">
                                            <i class="fa fa-envelope"></i> <span>Submit</span>
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
