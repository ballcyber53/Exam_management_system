@extends('layouts.master')



@section('content')
        <div class="row">
                <div class="card">
                      <div class="card-header">
                            <a class="btn btn-primary float-lg-right" href="{{ route('users.index') }}"> Back</a>

                        <h5 class="title">Create New User</h5>

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

    <form action="{{ route('users.store') }}" method="POST">
        @csrf

        <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('ชื่อ - สกุล') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('ที่อยู่') }}</label>

                <div class="col-md-6">
                    <div class="form-group">
                        <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address"  rows="3" ></textarea>
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
                    <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

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
                    <input id="school" type="text" class="form-control @error('school') is-invalid @enderror" name="school" value="{{ old('school') }}" required autocomplete="school" autofocus>

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
                <select name="education_background" id="education_background" class="form-control @error('education_background') is-invalid @enderror" value="{{ old('education_background') }}" required autocomplete="education_background" autofocus>
                    <option><p>กรุณาเลือกวุฒิการศึกษา</p></option>
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
                <select name="faculty_id" id="faculty_id" class="form-control @error('faculty_id') is-invalid @enderror" value="{{ old('faculty_id') }}" required autocomplete="faculty_id" autofocus>
                    <option><p>กรุณาเลือกคณะที่ต้องการ</p></option>
                    <option value="1">คณะครุศาสตร์อุตสาหกรรมและเทคโนโลยี</option>
                    <option value="2">คณะบริหารธุรกิจ</option>
                    <option value="3">คณะวิศวกรรมศาสตร์</option>
                    <option value="4">คณะศิลปศาสตร์</option>
                    <option value="5">คณะสถาปัตยกรรมศาสตร์</option>
                    <option value="6">วิทยาลัยรัตภูมิ</option>

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
                    <option><p>กรุณาเลือกสาขาที่ต้องการ</p></option>
                    <option value="1">สาขาครุศาสตร์อุตสาหกรรม</option>
                    <option value="2">สาขาเทคโนโลยีอุตสาหกรรม</option>
                    <option value="3">สาขาการบัญชี</option>
                    <option value="4">สาขาการตลาด</option>
                    <option value="5">สาขาการจัดการ</option>
                    <option value="6">สาขาระบบสารสนเทศ</option>
                    <option value="7">สาขาวิศวกรรมโยธา</option>
                    <option value="8">สาขาวิศวกรรมไฟฟ้า</option>
                    <option value="9">สาขาวิศวกรรมเครื่องกล</option>
                    <option value="10">สาขาวิศวกรรมอุตสาหการ</option>
                    <option value="11">สาขาวิศวกรรมคอมพิวเตอร์</option>
                    <option value="12">สาขาภาษาต่างประเทศ</option>
                    <option value="13">สาขาการโรงแรมและการท่องเที่ยว</option>
                    <option value="14">สาขาคหกรรมศาสตร์</option>
                    <option value="15">สาขาสถาปัตยกรรมและผังเมือง</option>
                    <option value="16">สาขาศิลปกรรมและออกแบบ</option>
                    <option value="17">สาขาอุตสาหกรรม</option>
                    <option value="18">สาขาบริหารธุรกิจ</option>

                </select>
                    @error('major_id')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('ยืนยันรหัสผ่าน') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>

    </form>
                    </div>
</div>
        </div>
@endsection
