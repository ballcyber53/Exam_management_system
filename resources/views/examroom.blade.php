@extends('layouts.master')
@section('title','Exam Room')

@section('content')
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
{{-- @foreach ($students as $student)
{{$student->name}}
@endforeach --}}
                <h5 class="title"> {{Auth::user()->major->name}} จำนวนผู้สอบทั้งหมด {{count($users)}} คน

                        <br>
                        {{-- จำนวนห้องสอบ {{count($classrooms)}} ห้อง <br> --}}




                        {{-- @foreach ($classrooms as $class)
                        ห้องสอบ {{$class->classroom_no}}
                        จำกัด {{$class->max_seat}} คน
                        <br>
                        @endforeach --}}

                </h5>
                        <p class="category">{{Auth::user()->faculty->name}}
                            </p>
                        <div class="card-body all-icons">
                                {{-- @foreach ($classrooms as $class)
                                ห้องสอบ {{$class->classroom_no}}

                                @endforeach --}}






                                {{-- @foreach ($users->chunk($class->max_seat) as $users) --}}
                                <div class="row">
                                        {{-- @if(count($users)===$class->max_seat) --}}

                                        {{-- @foreach ($users as $user)
                                        @if ($user->id == 1)
                                            @continue
                                        @endif

                                        <li>{{ $user->name }}</li>

                                        @if ($user->id == 5)
                                            @break
                                        @endif
                                    @endforeach --}}


                                        @foreach ($users as $user)


                                  <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">

                                    <div class="font-icon-detail">
                                            @if(Auth::user()->name === $user->name)


                                            <i class="now-ui-icons users_single-02" style=" color:green">Seat<p style=" color:green">{{$loop->iteration}}</p></i>
                                            <p style=" color:green">{{$user->name}}</p>
                                            <p style=" color:green">{{$user->school}}</p>
                                            {{-- <p style=" color:green">{{$user->major_id}}</p> --}}
                                        @else

                                      <i class="now-ui-icons users_single-02">Seat<p>{{$loop->iteration}}</p></i>
                                      <p>{{$user->name}}</p>
                                      <p>{{$user->school}}</p>
                                      {{-- <p>{{$user->major_id}}</p> --}}

                                      {{-- <p>{{$user->faculty_id}}</p>
                                      <p>{{$user->major_id}}</p> --}}
                                      @endif



                                    </div>

                                  </div>





                                @endforeach


                                </div>
                                {{-- @endforeach --}}

                                {{-- {{$users->links()}} --}}

                              </div>

              </div>
              <div class="card-body all-icons">
                {{-- <div class="row">
                    @foreach ($users as $user)


                  <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6 col-xs-6">

                    <div class="font-icon-detail">
                            @if(Auth::user()->name === $user->name)


                            <i class="now-ui-icons users_single-02">Seat<p style=" color:green">{{$loop->iteration}}</p></i>
                            <p style=" color:green">{{$user->name}}</p>
                            <p style=" color:green">{{$user->school}}</p>
                            <p style=" color:green">{{$user->major_id}}</p>

                        @else
                      <i class="now-ui-icons users_single-02">Seat<p>{{$loop->iteration}}</p></i>
                      <p>{{$user->name}}</p>
                      <p>{{$user->school}}</p>
                      <p style=" color:green">{{$user->major_id}}</p>

                      <p>{{$user->faculty_id}}</p>
                      <p>{{$user->major_id}}</p>

                      @endif

                    </div>

                  </div>
                    @endforeach






                </div>
              </div> --}}

            </div>

          </div>

        </div>

      </div>


  @endsection
