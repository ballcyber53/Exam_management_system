@extends('layouts.master')

@section('content')
<div class="container">
        <div class="row">
                <div class="card">
                      <div class="card-header">
                            <a class="btn btn-warning float-lg-right" href="{{ route('classrooms.index') }}"> Back</a>
                        <h5 class="title">
                                Admin send data to Student
                        </h5>
                    </div>
  <div class="container box">
   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <button type="button" class="close" data-dismiss="alert">×</button>
     <ul>
      @foreach ($errors->all() as $error)
       <li>{{ $error }}</li>
      @endforeach
     </ul>
    </div>
   @endif


   {{-- @if ($message = Session::get('success'))
   <div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
           <strong>{{ $message }}</strong>
   </div>
   @endif  --}}



   {{-- <div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">

                <div class="card-title">
                    <div class="card-body">

                        @foreach ($users as $user)

                    {{$user->name}} : {{$user->email}}

                    @endforeach
                </div>

                </div>

            </div>
        </div>
    </div>
</div> --}}

{{-- @foreach ($users as $user)

{{$user->name}} :

@endforeach --}}






   <form method="post" action="{{url('sendemail/send')}}"
    {{ csrf_field() }}



    <div class="form-group">
     <label>Enter Your Student</label>
     <input type="text" name="name" id="name" class="form-control" value="{{ Auth::user()->name }} " />
    </div>


    <div class="form-group">
     <label for="email">Enter Your Student Email</label>


     {{-- @foreach ($users->unique('$user->major->name') as $user) <span>     {{$user->major->name}}            </span>@endforeach --}}


     <select name="email" id="email" class="form-control input-lg dynamic" >
            <option>Select Email Student</option>

            @foreach ($users as $user)

            <option value=" {{$user->email}} ">{{$user->name}} : {{$user->email}} : {{$user->major->name}} </option>

            @endforeach


        </select>
    </div>



    {{-- <div class="form-group">
        <div class="col">



        @foreach ($users as $user)

        <br>

            <input type="checkbox" name="email[1]" value="{{$user->email}}">
            <label>{{$user->name}}

            </label>
            สาขา {{$user->major->name}}
        @endforeach
    </div>
</div> --}}






    <div class="form-group">

     <label>Enter Your Message</label>
     <textarea name="message" class="form-control"></textarea>


    </div>


    <div class="form-group">
     <input type="submit" name="send" class="btn btn-info" value="Send" />
    </div>
    {{ csrf_field() }}

   </form>
  </div>



  {{-- <div class="container box">
        <h3 align="center">Send data to User</h3><br />
        @if (count($errors) > 0)
         <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <ul>
           @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
           @endforeach
          </ul>
         </div>
        @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
         <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif
        <form method="post" action="{{url('sendemail/send')}}">
         {{ csrf_field() }}
         <div class="form-group">
          <label>Enter Your Name</label>
          <input type="text" name="user_name" class="form-control" value="" />
         </div>
         <div class="form-group">
          <label>Enter Your Email</label>
          <input type="text" name="user_email" class="form-control" value="" />
         </div>
         <div class="form-group">
          <label>Enter Your Message</label>
          <textarea name="user_message" class="form-control"></textarea>
         </div>
         <div class="form-group">
          <input type="submit" name="send" class="btn btn-info" value="Send" />
         </div>
        </form>
       </div> --}}


   
       @endsection
