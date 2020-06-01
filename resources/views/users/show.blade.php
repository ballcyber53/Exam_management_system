@extends('layouts.master')

@section('content')
<div class="row">
        <div class="card">
              <div class="card-header">
                    <a class="btn btn-primary float-md-right" href="{{ route('users.index') }}"> Back</a>

                <h5 class="title">Show Profile
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


        <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ - สกุล') }}</label>

                <div class="col-md-6">
                        {{ $user->name}}

                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('ที่อยู่') }}</label>

                <div class="col-md-6">
                    <div class="form-group">
                            {{ $user->address}}

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('เบอร์ติดต่อ') }}</label>

                <div class="col-md-6">
                        {{ $user->phone}}
                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">{{ __('โรงเรียน') }}</label>

                <div class="col-md-6">

                        {{ $user->school}}

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">{{ __('วุฒิการศึกษา') }}</label>
                <div class="col-md-6">
                        {{ $user->education_background}}

                </div>
            </div>
            <div class="form-group row">
                <label class="col-md-4 col-form-label text-md-right">{{ __('คณะ') }}</label>

                <div class="col-md-6">
                        {{ $user->faculty->name }}

                </div>
            </div>

            <div class="form-group row">
                <label for="major_id" class="col-md-4 col-form-label text-md-right">{{ __('สาขา') }}</label>

                <div class="col-md-6">
                        {{ $user->major->name }}

                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    {{ $user->email }}

                </div>
            </div>



</div>
</div>
</div>
@endsection
