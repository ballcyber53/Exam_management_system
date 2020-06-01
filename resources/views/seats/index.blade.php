@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                        <h5 class="title">Seat Management
                        </h5>
                        <a class="btn btn-success float-lg-right" href="{{ route('seats.create') }}"> Create New Seat</a></a></div>
                      <div class="card-body">
    <div class="table-responsive">

            <table class="table">
                <thead class=" text-primary">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Details</th>
            <th width="280px">Action</th>
        </tr>
                </thead>
                <tbody>
        @foreach ($seats as $seat)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $seat->name }}</td>
            <td>{{ $seat->email }}</td>
            {{-- <td>{{ $seat->faculty->name }}</td>
            <td>{{ $seat->seat->name }}</td> --}}
            <td>
                <form action="{{ route('seats.destroy',$seat->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('seats.show',$seat->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('seats.edit',$seat->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
        @endforeach
    </table>

    {!! $seats->links() !!}
                      </div>
                </div>
        </div>
</div>
@endsection
