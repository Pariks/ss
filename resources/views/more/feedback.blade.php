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
    @if(isset($data) && array_key_exists('ratingGiven', $data) && $data['captcha'] === true)
        @if($data['ratingGiven'] === true &&  $data['feedbackGiven'] === true)
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2  alert alert-success" style="text-align: center;">
                         <strong >Feedback sent Successfully!</strong>
                   </div>
                </div>
            </div>
        @else
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2  alert alert-danger" style="text-align: center;">
                        <strong >Error: Please fill all fields and resubmit feedback!</strong>
                    </div>
                </div>
            </div>
        @endif
    @endif
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Feedback </h2></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/feedback') }}">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">From</label>

                                    <div class="col-md-6">
                                        <input id="email" type="text" class="form-control" name="email" value="{{ $user->email }}"  disabled>

                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('rating') ? ' has-error' : '' }}">
                                    <label for="rating" class="col-md-4 control-label">Ratning</label>
                                    <div class="col-md-6">
                                        <select class="form-control" id="rating" name="rating"  >
                                            <option value="" disabled selected>Rate out of 5</option>
                                            <option value="1">1</option>
                                            <option value="1.5">1.5</option>
                                            <option value="2">2</option>
                                            <option value="2.5">2.5</option>
                                            <option value="3">3</option>
                                            <option value="3.5">3.5</option>
                                            <option value="4">4</option>
                                            <option value="4.5">4.5</option>
                                            <option value="5">5</option>
                                        </select>

                                        @if ($errors->has('rating'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('rating') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('feedback') ? ' has-error' : '' }}">
                                    <label for="feedback" class="col-md-4 control-label">Feedback</label>

                                    <div class="col-md-6">
                                        <textarea id="feedback" type="text" rows="8" class="form-control" name="feedback" value="{{ old('feedback') }}" placeholder="Hi, I love your service. Keep being awesome. thanks" required></textarea>

                                        @if ($errors->has('feedback'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('feedback') }}</strong>
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
