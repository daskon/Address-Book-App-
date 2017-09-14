@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">All User Details| 
                <a href="{{ url('/dashboard') }}">Back</a>
                </div>

                <div class="panel-body">
                  <div class="panel-body">
                    @if ($address->isEmpty())
                        <p>You have no data to view.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Address</th>
                                    <th>Postal Code</th>
                                    <th>State</th>
                                    <th>Country</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($address as $add)
                                <tr>
                                    <td>
                                        {{ $add->address1 }}
                                    </td>
                                    <td>
                                           {{ $add->postcode }}
                                    </td>
                                    <td>
                                      {{$add->state}}
                                    </td>
                                    <td>
                                     {{ $add->country }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                        {{ $address->render() }}
                    @endif
                </div>   
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
