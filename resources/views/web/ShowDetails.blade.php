@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Details| 
                <a href="{{ url('/dashboard') }}">Back</a>
                </div>

                <div class="panel-body">
                
                     <div class="col-md-6">
                      <label for="passport_number" class="col-md-4 control-label">Passport</label>
                       {{ $userd->passport_number }}
                      </div>
                    
                     <div class="col-md-6">
                      <label for="passport_number" class="col-md-4 control-label">Phone No</label>
                          {{ $userd->phone_number }} 
                     </div>
                    <hr>
                     <div class="col-md-6">
                      <label for="passport_number" class="col-md-4 control-label">Address</label>
                          {{ $address->address1 }}
                     </div>

                     <div class="col-md-6">
                      <label for="passport_number" class="col-md-4 control-label">Postal Code</label>
                          {{ $address->postcode }}
                     </div>

                     <div class="col-md-6">
                      <label for="passport_number" class="col-md-4 control-label">State</label>
                          {{ $address->state }}
                     </div>

                     <div class="col-md-6">
                      <label for="passport_number" class="col-md-4 control-label">Country</label>
                          {{ $address->country }}
                     </div>
                    <br/>
                    <div class="col-md-3">
                        <a class="btn btn-info" href="{{ url('api/apiroute/destroy') }}" onclick="return confirm('Are you sure?')">
                            Delete Details
                        </a>
                    </div>            
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
