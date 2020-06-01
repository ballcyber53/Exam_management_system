@extends('layouts.master')

@section('content')
<div class="row">
        <div class="container">
                <div class="row">
                        <div class="card">
                              <div class="card-header">
                                    <a class="btn btn-warning float-lg-right" href="{{ route('majors.index') }}"> Back</a>
                                <h5 class="title">Edit Major
                                </h5>
                            </div>
                                <div class="card-body">

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

    <form action="{{ route('majors.update',$major->id) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อสาขา') }}</label>

                                    <div class="col-md-6">
                            <input type="text" name="name" class="form-control" value="{{$major->name}}">
                            @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        </div>
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group row">
                                    <label for="route_map" class="col-md-4 col-form-label text-md-right now-ui-icons location_pin">{{ __('Maps') }}</label>

                                    <div class="col-md-6">
                            <input type="text" name="route_map" class="form-control" value="{{$major->route_map}}">
                            @error('route_map')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        </div>
                        <a href="{{$major->route_map}}" class="now-ui-icons location_pin">Maps</a>
                    </div>
                    </div>
                    

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
                                </div>
                        </div>
                </div>
        </div>
@endsection
