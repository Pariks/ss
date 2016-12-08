    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label"><i class="fa fa-user"></i> Name</label>

        <div class="col-md-6">
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Your Name" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
            @endif
        </div>
    </div>
    <div class="form-group">
        <label for="amount" class="col-md-4 control-label">Gift Amount</label>

        <div class="col-md-6">
            <input id="amount" type="text" class="form-control" name="amount" value="{{ old('amount') }}" placeholder="Example: 50, 100, 200" required>

        </div>
    </div>
    <div class="form-group">
        <label for="agerange" class="col-md-4 control-label">Age Range</label>

        <div class="col-md-6">
            <input id="agerange" type="text" class="form-control" name="agerange" value="{{ old('agerange') }}" placeholder="Example: 15-20, 21-25, 20-30 (Not Mandatory)" >

        </div>
    </div>
    <div class="form-group">
        <label for="giftlink" class="col-md-4 control-label">Gift Reference Link</label>

        <div class="col-md-6">
            <input id="giftlink" type="text" class="form-control" name="giftlink" value="{{ old('giftlink') }}" placeholder="Example:(optional) https://www.amazon.ca/Xbox-Wireless-Controller-White-Newest/dp/B01GW3H3U8/" >

        </div>
    </div>
    <div class="form-group">
        <label for="phone" class="col-md-4 control-label">Phone No.</label>

        <div class="col-md-6">
            <input id="phone" type="text" class="form-control" name="phone" placeholder="+1-514-123-6789 (optional)" required>
        </div>
    </div>
    <div class="form-group{{ $errors->has('receiveraddr1') ? ' has-error' : '' }}">
        <label for="addr1" class="col-md-4 control-label">Address 1</label>

        <div class="col-md-6">
            <input id="addr1" type="text" class="form-control" name="addr1" value="{{ old('addr1') }}" placeholder="Example: 1445 Du Fort" required>

            @if ($errors->has('addr1'))
                <span class="help-block">
                                        <strong>{{ $errors->first('addr1') }}</strong>
                                    </span>
            @endif
        </div>
    </div>
    <div class="form-group{{ $errors->has('addr2') ? ' has-error' : '' }}">
        <label for="addr2" class="col-md-4 control-label">Address 2 </label>

        <div class="col-md-6">
            <input id="addr2" type="text" class="form-control" name="addr2" value="{{ old('addr2') }}" placeholder="Example: Apt 1003" required>

            @if ($errors->has('addr2'))
                <span class="help-block">
                                        <strong>{{ $errors->first('addr2') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('postalcode') ? ' has-error' : '' }}">
        <label for="postalcode" class="col-md-4 control-label">Postal Code</label>

        <div class="col-md-6">
            <input id="postalcode" type="text" class="form-control" name="postalcode" placeholder="H3H 2J7" required>

            @if ($errors->has('postalcode'))
                <span class="help-block">
                                        <strong>{{ $errors->first('postalcode') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
        <label for="city" class="col-md-4 control-label">City</label>

        <div class="col-md-6">
            <input id="city" type="text" class="form-control" name="city" placeholder="Montreal"  required>

            @if ($errors->has('city'))
                <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('contry') ? ' has-error' : '' }}">
        <label for="contry" class="col-md-4 control-label">Contry</label>

        <div class="col-md-6">
            <input id="contry" type="text" class="form-control" name="contry" placeholder="Canada" required>

            @if ($errors->has('contry'))
                <span class="help-block">
                                        <strong>{{ $errors->first('contry') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group">
        <label for="contry" class="col-md-4 control-label">Deal Code</label>

        <div class="col-md-6">
            <input id="dealcode" type="text" class="form-control" name="dealcode" placeholder="Example: DEAL100 (if applicable)" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <div class="g-recaptcha" data-sitekey="6LfLRA4UAAAAAJTMRd3h2l0M01tXqRBoHZfLrjPP"></div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary pull-right">
                <i class="fa fa-money"></i> <span>Procede To Payments</span>
            </button>
        </div>
    </div>




