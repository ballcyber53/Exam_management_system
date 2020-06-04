@extends('layouts.master')
@section('title','Home')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>ข้อมูลการสมัคร</h3></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ - สกุล') }}</label>

                        <div class="col-md-6">

                            {{Auth::user()->name}}

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('ที่อยู่') }}</label>

                        <div class="col-md-6">

                            {{Auth::user()->address}}

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('เบอร์ติดต่อ') }}</label>

                        <div class="col-md-6">

                            {{Auth::user()->phone}}

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('โรงเรียน') }}</label>

                        <div class="col-md-6">

                            {{Auth::user()->school}}

                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('วุฒิการศึกษา') }}</label>

                        <div class="col-md-6">

                            {{Auth::user()->education_background}}

                        </div>
                    </div>
<span><h3>ข้อมูลการสอบ</h3></span>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('สมัครสอบคณะ') }}</label>

                        <div class="col-md-6">
                                {{-- เรียกใช้ relationship faculty --}}
                                {{Auth::user()->faculty->name}}
                                {{-- <a href="{{Auth::user()->faculty->route_map}}">แผนที่</a> --}}

                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right">{{ __('สมัครสอบสาขา') }}</label>

                        <div class="col-md-6">
                                {{-- เรียกใช้ relationship major --}}

                                {{Auth::user()->major->name}}
                                <a href="{{Auth::user()->major->route_map}}" class="now-ui-icons location_pin">Maps</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
