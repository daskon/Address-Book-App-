@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  Add your details now | 
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

                            <form class="form-horizontal" method="POST" action="{{ url('api/apiroute/store') }}" enctype="multipart/form-data">
                                 {{csrf_field()}}
                                 
                                <div class="form-group{{ $errors->has('passport_number') ? ' has-error' : '' }}">
                                <label for="passport_number" class="col-md-4 control-label">Passport No</label>

                                    <div class="col-md-6">
                                        <input 
                                           id="passport_number" 
                                           type="text" 
                                           class="form-control" 
                                           name="passport_number" 
                                           value="{{ old('passport_number') }}" autofocus>

                                            <span class="help-block">
                                                <strong>{{ $errors->first('passport_number') }}</strong>
                                            </span>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                                <label for="phone_number" class="col-md-4 control-label">Phone No</label>

                                    <div class="col-md-6">
                                        <input 
                                            id="phone_number" 
                                            type="text" 
                                            class="form-control" 
                                            name="phone_number" 
                                            value="{{ old('phone_number') }}">

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
                                            value="{{ old('address1') }}" 
                                            cols="5" rows="4">
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
                                        <input 
                                             id="postcode" 
                                             type="text" 
                                             class="form-control" 
                                             name="postcode" 
                                             value="{{ old('postcode') }}">

                                            <span class="help-block">
                                                <strong>{{ $errors->first('postcode') }}</strong>
                                            </span>
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                                <label for="postcode" class="col-md-4 control-label">Country</label>
                                    <div class="col-md-6">
                                        <select id="country" class="form-control" name="country">
                                            <option value="">Your Country</option>
                                                @foreach ($contries as $country)
                                                <option value="{{ $country->country_code }}">{{ $country->country_name }}</option>
                                                @endforeach
                                        </select>

                                        @if ($errors->has('country'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('country') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                                <label for="state" class="col-md-4 control-label">Your State</label>

                                    <div class="col-md-6">
                                        <input 
                                             id="state" 
                                             type="text" 
                                             class="form-control" 
                                             name="state" 
                                             value="{{ old('state') }}">
                                
                                            <span class="help-block">
                                                <strong>{{ $errors->first('state') }}</strong>
                                            </span>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                 <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection