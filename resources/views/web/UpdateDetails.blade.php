@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Update your details now | 
                <a href="{{ url('/dashboard') }}">Back</a>
                </div>

                <div class="panel-body">
                    <table class="table">
                <tr>
                    <td class="middle">
                        <div class="media">
                            <div>
                                 @if (session('status'))
                                    <div class="alert alert-success">
                                    {{ session('status') }}
                                   </div>
                                @endif
                            </div>
                            <div class="media-body">

                            <form class="form-horizontal" method="POST" action="{{ url('api/update') }}" >
                                 {{csrf_field()}}

                                <div class="form-group{{ $errors->has('passport_number') ? ' has-error' : '' }}">
                                <label for="passport_number" class="col-md-4 control-label">Passport No</label>

                                    <div class="col-md-6">
                                        <input id="passport_number" type="text" class="form-control" name="passport_number" value="{{ $user_details->passport_number }}" autofocus>
                                            <span class="help-block">
                                                <strong>{{ $errors->first('passport_number') }}</strong>
                                            </span>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <label for="phone_number" class="col-md-4 control-label">Phone No</label>

                                    <div class="col-md-6">
                                        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $user_details->phone_number }}" >
                                            <span class="help-block">
                                                <strong>{{ $errors->first('phone_number') }}</strong>
                                            </span>
                                    </div>
                                </div>
                                
                                <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
                                <label for="address1" class="col-md-4 control-label">Address</label>

                                    <div class="col-md-6">
                                        <textarea 
                                            id="address1" 
                                            class="form-control" 
                                            name="address1"  
                                            cols="5" rows="4">
                                            {{ $user_address->address1 }}
                                        </textarea>

                                        @if ($errors->has('address1'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('address1') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('postcode') ? ' has-error' : '' }}">
                                <label for="postcode" class="col-md-4 control-label">Postal Code</label>

                                    <div class="col-md-6">
                                        <input id="postcode" type="text" class="form-control" name="postcode" value="{{ $user_address->postcode }}" >
                                            <span class="help-block">
                                                <strong>{{ $errors->first('postcode') }}</strong>
                                            </span>
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                 <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection