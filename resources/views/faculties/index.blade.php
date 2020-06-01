@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                            <a class="btn btn-success float-lg-right" href="{{ route('faculties.create') }}"> Create New Faculty</a>

                        <h5 class="title">Faculty Management
                        </h5>
                        <div class="card-body">



  

    <div class="table-responsive">

            <table class="table">
                <thead class=" text-primary">
        <tr>
            <th>#</th>
            <th>คณะ</th>
            <th width="280px">Action</th>
        </tr>
                </thead>
                <tbody>
        @foreach ($faculties as $faculty)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $faculty->name }}</td>
            {{-- <td>{{ $faculty->faculty->name }}</td>
            <td>{{ $faculty->faculty->name }}</td> --}}
            <td>
                <form action="{{ route('faculties.destroy',$faculty->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('faculties.show',$faculty->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('faculties.edit',$faculty->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
    </tbody>
        @endforeach
    </table>

    {!! $faculties->links() !!}
</div>
</div>
</div>
</div>
</div>
@endsection
