@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                            <a class="btn btn-success float-lg-right" href="{{ route('users.create') }}"> Create New User</a>

                        <h5 class="title">User Management
                        </h5>
                    </div>
                      <div class="card-body">


    <div class="table-responsive">

        <table class="table">
            <thead class=" text-primary">
            <tr>
            <th>#</th>
            <th>ชื่อ - สกุล</th>
            {{-- <th class="w-auto">ที่อยู่</th> --}}
            <th>Email - Address</th>
            <th>เบอร์ติดต่อ</th>
            <th>โรงเรียน</th>
            {{-- <th class="w-auto">วุฒิการศึกษา</th> --}}
            <th>สมัครสอบคณะ</th>
            <th>สมัครสอบสาขา</th>
            <th width="280px">Action</th>
        </tr>
            </thead>
            <tbody>
        @foreach ($users as $user)

        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $user->name }}</td>
            {{-- <td class="w-100">{{ $user->address }}</td> --}}
            <td>{{ $user->email }}</td>
            <td>{{ $user->phone }}</td>
            <td>{{ $user->school }}</td>
            {{-- <td class="w-auto">{{ $user->education_background }}</td> --}}
            <td>{{ $user->faculty->name }}</td>
            <td>{{ $user->major->name }}</td>
            <td>

                <form action="{{ route('users.destroy',$user->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')
                    @if($user->usertype!=='admin')

                    <button type="submit" class="btn btn-danger">Delete</button>
                    @endif

                </form>
            </td>
        </tr>
    </tbody>
        @endforeach
    </table>

    {!! $users->links() !!}
</div>
            </div>
        </div>
        </div>
</div>



@endsection
