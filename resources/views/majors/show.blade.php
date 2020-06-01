@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                            <a class="btn btn-warning float-lg-right" href="{{ route('majors.index') }}"> Back</a>
                        <h5 class="title">                {{ $major->name }}

                        </h5>
                    </div>
                        <div class="card-body">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>สาขา:</strong>
                {{ $major->name }}                         <a href="{{$major->route_map}}" class="now-ui-icons location_pin">Maps</a>

            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>สังกัดคณะ:</strong>
                <td>{{ $major->faculty->name }}</td>
            </div>
        </div>
    </div>
</div>
                        </div>
                </div>
        </div>
@endsection
