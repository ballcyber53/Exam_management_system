@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                        <h5 class="title">Create New Seat
                        </h5>
                        <a class="btn btn-warning float-lg-right" href="{{ route('seats.index') }}"> Back</a></div>
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

    <form action="{{ route('seats.store') }}" method="POST">
        @csrf

         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>เลขที่นั่งสอบ</strong>
                    <input type="seat_no" name="seat_no" class="form-control" placeholder="seat_no">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>เลือกห้องสอบ</strong>
<select name="" id="">

<option value=""></option>

</select>
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
