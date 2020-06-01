@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                            <a class="btn btn-warning float-lg-right" href="{{ route('faculties.index') }}"> Back</a>
                        <h5 class="title">
                                Add New Faculty
                        </h5>
                    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('faculties.store') }}" method="POST">
        @csrf

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Route Map URL:</strong>
                        <input type="text" name="route_map" class="form-control" placeholder="URL Route Map">
                    </div>
                </div> --}}

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

                </div>
        </div>
</div>
@endsection
