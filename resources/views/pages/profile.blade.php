@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>{{$user->name}}'s Profile</h2></div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                            <img src="/images/uploads/avatars/{{$user->avatar}}" style="width: 150px; height: 150px; float: left;border-radius: 50%;">
                            </div>
                            <div class="col-md-9">
                                 <form enctype="multipart/form-data" action="/profile" method="post">
                                     <label>Upload Profile Image</label>
                                     <input type="file" name="avatar">
                                     <input type="hidden" name="_token" value="{{csrf_token()}}">
                                     <input type="submit" class="pull-right btn btn-primary" value="Upload">
                                 </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
