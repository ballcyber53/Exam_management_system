@extends('layouts.master')

@section('content')
<div class="row">
        <div class="card">
              <div class="card-header">
                    <a class="btn btn-warning float-md-right" href="{{ route('users.index') }}"> Back</a>

                <h5 class="title">Edit Profile
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

    <form action="{{ route('users.update',$user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group row">
                <label for="usertype" class="col-md-4 col-form-label text-md-right">{{ __('ประภทผู้ใช้') }}</label>

                <div class="col-md-6">

                        <select name="usertype" id="type" class="form-control @error('usertype') is-invalid @enderror" value="{{ old('usertype') }}" required autocomplete="usertype" autofocus>
                                @if($user->usertype=='admin')
                        <option value="">เลือกประเภทผู้ใช้</option>
                        <option value="admin" selected>Admin</option>
                        <option value="user">User</option>

                    @else
                        <option value="">เลือกประเภทผู้ใช้</option>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        @endif
                    </select>
                    @error('usertype')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
        <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ - สกุล') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            {{-- <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('ที่อยู่') }}</label>

                <div class="col-md-6">
                    <div class="form-group">
                        <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address"   rows="3" >{{ $user->address }}</textarea>
                        @error('address')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('เบอร์ติดต่อ') }}</label>

                <div class="col-md-6">
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $user->phone }}" required autocomplete="phone" autofocus>

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="school" class="col-md-4 col-form-label text-md-right">{{ __('โรงเรียน') }}</label>

                <div class="col-md-6">
                    <input id="school" type="text" class="form-control @error('school') is-invalid @enderror" name="school" value="{{ $user->school }}" required autocomplete="school" autofocus>

                    @error('school')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="education_background" class="col-md-4 col-form-label text-md-right">{{ __('วุฒิการศึกษา') }}</label>
                <div class="col-md-6">
                <select name="education_background" class="form-control @error('education_background') is-invalid @enderror" required autocomplete="education_background" autofocus>
                    <option selected><p>กรุณาเลือกวุฒิการศึกษา</p></option>

                    <option value="มัธยมศึกษาตอนปลาย">มัธยมศึกษาตอนปลาย</option>
                    <option value="ประกาศนียบัตรวิชาชีพ">ประกาศนียบัตรวิชาชีพ</option>
                    <option value="ประกาศนียบัตรวิชาชีพขั้นสูง">ประกาศนียบัตรวิชาชีพขั้นสูง</option>
                </select>
                    @error('education_background')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="faculty_id" class="col-md-4 col-form-label text-md-right">{{ __('คณะ') }}</label>

                <div class="col-md-6">
                <select name="faculty_id" id="faculty_id" class="form-control @error('faculty_id') is-invalid @enderror" required  autofocus>
                    <option selected><p>กรุณาเลือกคณะที่ต้องการ</p></option>

                    @foreach ($faculties as $faculty)
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

            <div class="form-group row">
                <label for="major_id" class="col-md-4 col-form-label text-md-right">{{ __('สาขา') }}</label>

                <div class="col-md-6">

                <select name="major_id" id="major_id" class="form-control @error('major_id') is-invalid @enderror" value="{{ old('major_id') }}" required autocomplete="major_id" autofocus>
                        <option selected><p>กรุณาเลือกสาขาที่ต้องการ</p></option>
                        @foreach ($majors as $major)

                                <option value="{{$major->id}}" re>{{$major->name}}</option>

                        @endforeach
                    </select>
                    @error('major_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>--}}

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('รหัสผ่าน') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" value="{{$user->password}}">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>



            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Update') }}
                    </button>
                </div>
            </div>

    </form>
</div>
</div>
</div>
@endsection
