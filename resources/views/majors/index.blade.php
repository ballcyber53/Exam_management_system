@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                            <a class="btn btn-success float-lg-right" href="{{ route('majors.create') }}"> Create New Major</a>

                        <h5 class="title">Major Management
                        </h5>
                    </div>
                        <div class="card-body">



    <div class="table-responsive">

            <table class="table">
                <thead class=" text-primary">
        <tr>
            <th>#</th>
            <th>สาขา</th>
            <th>สังกัดคณะ</th>
            <th width="280px">Action</th>
        </tr>
                </thead>
                <tbody>
        @foreach ($majors as $major)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $major->name }} <a href="{{$major->route_map}}" class="now-ui-icons location_pin">Maps</a>
            </td>
            <td>{{ $major->faculty->name }}</td>
            <td>
                <form action="{{ route('majors.destroy',$major->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('majors.show',$major->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('majors.edit',$major->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
        @endforeach
    </table>

    {!! $majors->links() !!}
</div>
</div>
</div>
</div>
@endsection
