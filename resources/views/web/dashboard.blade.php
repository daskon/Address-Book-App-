@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Welcome Back
                    @if (Auth::user()->is_admin == 1)
                      Admin
                    @else
                      User
                    @endif
                </div>

                <div class="panel-body">
                
                    <div>
                        @if (session('status'))
                            <div class="alert alert-danger">
                            {{ session('status') }}
                            </div>
                        @endif
                  </div>
                  @if (Auth::user()->is_admin == 1) 
                    <div class="col-md-3">
                       <a class="btn btn-info" href="{{ url('api/show') }}">View User Details</a>
                    </div>
                  @else
                    <div class="col-md-3">
                       <a class="btn btn-info" href="{{ url('addbook/create') }}">Add Details</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-info" href="{{ url('addbook/'.Auth::user()->id.'/edit') }}">Update Details</a>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-info" href="{{ url('addbook/show') }}">View Details</a>
                    </div>
                  @endif             
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
