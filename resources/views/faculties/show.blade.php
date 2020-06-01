@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                            <a class="btn btn-warning float-lg-right" href="{{ route('faculties.index') }}"> Back</a>
                        <h5 class="title">
                                Show Faculty
                        </h5>
                    </div>


    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $faculty->name }}
                
            </div>
        </div>

    </div>
                </div>

</div>

@endsection
