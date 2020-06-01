@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                            <a class="btn btn-warning float-lg-right" href="{{ route('classrooms.index') }}"> Back</a>
                        <h5 class="title">                {{ $classroom->classroom_no }}

                        </h5>
                    </div>
                        <div class="card-body">

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ห้องสอบ</strong>
                {{ $classroom->classroom_no }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>สังกัดสาขา:</strong>

                <td>{{ $classroom->major->name }}</td>

                {{-- {{$classroom->major->users[0]->name}}
                {{$classroom->major->users[1]->name}}
                {{$classroom->major->users[2]->name}}
                {{$classroom->major->users[3]->name}}
                {{$classroom->major->users[4]->name}} --}}


            </div>
        </div>

    </div>
                                </div>
                        </div>
                </div>
        </div>
@endsection
