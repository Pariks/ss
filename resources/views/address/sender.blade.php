
     <div class="form-group{{ $errors->has('sendername') ? ' has-error' : '' }}">
        <label for="sendername" class="col-md-4 control-label"><i class="fa fa-user"></i> Name</label>

        <div class="col-md-6">
            <input id="sendername" type="text" class="form-control" name="sendername" value="<?php if(isset($data) && array_key_exists('senderName', $data)) { echo $data['senderName']; }?>" placeholder="Your Name" required autofocus>

            @if ($errors->has('sendername'))
                <span class="help-block">
                                        <strong>{{ $errors->first('sendername') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('senderaddr1') ? ' has-error' : '' }}">
        <label for="senderaddr1" class="col-md-4 control-label">Address 1</label>

        <div class="col-md-6">
            <input id="senderaddr1" type="text" class="form-control" name="senderaddr1" value="{{  old('addr1')}}" placeholder="Example: 1445 Du Fort" required>

            @if ($errors->has('senderaddr1'))
                <span class="help-block">
                                        <strong>{{ $errors->first('senderaddr1') }}</strong>
                                    </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('senderaddr2') ? ' has-error' : '' }}">
        <label for="senderaddr2" class="col-md-4 control-label">Address 2 </label>

        <div class="col-md-6">
            <input id="senderaddr2" type="text" class="form-control" name="senderaddr2" value="{{ old('senderaddr2') }}" placeholder="Example: Apt 1003" required>

            @if ($errors->has('senderaddr2'))
                <span class="help-block">
                                        <strong>{{ $errors->first('senderaddr2') }}</strong>
                                    </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('senderphone') ? ' has-error' : '' }}">
        <label for="senderphone" class="col-md-4 control-label">Phone No.</label>

        <div class="col-md-6">
            <input id="senderphone" type="text" class="form-control" name="senderphone" placeholder="+1-514-123-6789" required>

            @if ($errors->has('senderphone'))
                <span class="help-block">
                                        <strong>{{ $errors->first('senderphone') }}</strong>
                                    </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('senderpostalcode') ? ' has-error' : '' }}">
        <label for="senderpostalcode" class="col-md-4 control-label">Postal Code</label>

        <div class="col-md-6">
            <input id="senderpostalcode" type="text" class="form-control" name="senderpostalcode" placeholder="H3H 2J7" required>

            @if ($errors->has('senderpostalcode'))
                <span class="help-block">
                                        <strong>{{ $errors->first('senderpostalcode') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('sendercity') ? ' has-error' : '' }}">
        <label for="sendercity" class="col-md-4 control-label">City</label>

        <div class="col-md-6">
            <input id="sendercity" type="text" class="form-control" name="sendercity" placeholder="Montreal"  required>

            @if ($errors->has('sendercity'))
                <span class="help-block">
                                        <strong>{{ $errors->first('sendercity') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('sendercontry') ? ' has-error' : '' }}">
        <label for="sendercontry" class="col-md-4 control-label">Contry</label>

        <div class="col-md-6">
            <input id="sendercontry" type="text" class="form-control" name="sendercontry" placeholder="Canada" required>

            @if ($errors->has('sendercontry'))
                <span class="help-block">
                                        <strong>{{ $errors->first('sendercontry') }}</strong>
                                    </span>
            @endif
        </div>
    </div>
