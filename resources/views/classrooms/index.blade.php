@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                            <a class="btn btn-success float-lg-right" href="{{ route('classrooms.create') }}"> Create New Classroom</a>

                        <h5 class="title">Classroom Management
                        </h5>
                    </div>
                        <div class="card-body">




    <div class="table-responsive">

            <table class="table">
                <thead class=" text-primary">
        <tr>
            <th>#</th>
            <th>ห้องสอบ</th>
            <th>สังกัดสาขา</th>
            <th width="280px">Action</th>
        </tr>
                </thead>
                <tbody>
        @foreach ($classrooms as $classroom)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $classroom->classroom_no }}</td>
            <td>{{ $classroom->major->name }}</td>
            <td>
                <form action="{{ route('classrooms.destroy',$classroom->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('classrooms.show',$classroom->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('classrooms.edit',$classroom->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
        @endforeach
    </table>

    {!! $classrooms->links() !!}
</div>
</div>
</div>
</div>
@endsection
