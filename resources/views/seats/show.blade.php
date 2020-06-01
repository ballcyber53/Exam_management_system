@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                        <h5 class="title">Show Seat
                        </h5>
                        <a class="btn btn-warning float-lg-right" href="{{ route('seats.index') }}"> Back</a></a></div>
                      <div class="card-body">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $seat->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                {{ $seat->email }}
            </div>
        </div>
    </div>
                      </div>
                </div>
        </div>
</div>
@endsection
