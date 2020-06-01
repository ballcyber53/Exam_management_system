@extends('layouts.master')

@section('content')
<div class="row">
        <div class="container">
                <div class="row">
                        <div class="card">
                              <div class="card-header">
                                    <a class="btn btn-warning float-lg-right" href="{{ route('classrooms.index') }}"> Back</a>
                                <h5 class="title">Edit Classroom
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

    <form action="{{ route('classrooms.update',$classroom->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                                <label for="classroom_no" class="col-md-4 col-form-label text-md-right">{{ __('กำหนดห้องสอบ') }}</label>

                                <div class="col-md-6">
                        <input type="text" name="classroom_no" class="form-control" value="{{$classroom->classroom_no}}">
                        @error('classroom_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                    </div>
                </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group row">
                                <label for="major_id" class="col-md-4 col-form-label text-md-right">{{ __('สาขา') }}</label>

                                <div class="col-md-6">


                                <select name="major_id" id="major_id" class="form-control @error('major_id') is-invalid @enderror" value="{{ old('major_id') }}" required autocomplete="major_id" autofocus>
                                        <option><p>กรุณาเลือกสาขาที่ต้องการ</p></option>
                                        @foreach ($majors as $major)

                                        <option value="{{$major->id}}">{{$major->name}}</option>

                                        @endforeach

                                    </select>
                                    @error('major_id')
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
