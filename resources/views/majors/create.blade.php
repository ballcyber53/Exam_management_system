@extends('layouts.master')

@section('content')
<div class="row">
        <div class="container">
                <div class="row">
                        <div class="card">
                              <div class="card-header">
                                    <a class="btn btn-warning float-lg-right" href="{{ route('majors.index') }}"> Back</a>

                                <h5 class="title">Create New Major
                                </h5>
                            </div>
                                <div class="card-body">


    {{-- @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route('majors.store') }}" method="POST">
        @csrf

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อสาขา') }}</label>

                            <div class="col-md-6">
                    <input type="text" name="name" class="form-control" placeholder="Name">
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
                    <input type="text" name="route_map" class="form-control" placeholder="link location">
                    @error('route_map')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group row">
                            <label for="faculty_id" class="col-md-4 col-form-label text-md-right">{{ __('คณะ') }}</label>

                            <div class="col-md-6">
                            {{-- <select name="faculty_id" id="faculty_id" class="form-control @error('faculty_id') is-invalid @enderror" value="{{ old('faculty_id') }}" required autocomplete="faculty_id" autofocus>
                                <option><p>กรุณาเลือกคณะที่ต้องการ</p></option>
                                <option value="1">คณะครุศาสตร์อุตสาหกรรมและเทคโนโลยี</option>
                                <option value="2">คณะบริหารธุรกิจ</option>
                                <option value="3">คณะวิศวกรรมศาสตร์</option>
                                <option value="4">คณะศิลปศาสตร์</option>
                                <option value="5">คณะสถาปัตยกรรมศาสตร์</option>
                                <option value="6">วิทยาลัยรัตภูมิ</option>
                            </select> --}}

                            <select name="faculty_id" id="faculty_id" class="form-control @error('faculty_id') is-invalid @enderror" value="{{ old('faculty_id') }}" required autocomplete="faculty_id" autofocus>
                                    <option><p>กรุณาเลือกสาขาที่ต้องการ</p></option>
                                    @foreach ($facultys as $faculty)

                                    <option value="{{$faculty->id}}">{{$faculty->name}}</option>

                                    @endforeach

                                </select>
                                @error('faculty_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
                                </div>
                        </div>
                </div>
        </div>
@endsection
