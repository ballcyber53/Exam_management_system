<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Faculty;
use App\Major;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $users = User::orderBy('faculty_id', 'asc')
                        ->where('usertype','user' )
                        ->paginate(5);

        return view('users.index',compact('users'))

            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function examroom()
    {

        // $users = User::orderBy('major_id')->get()->groupBy(function($item) {
        //     return $item->major_id;
        // });

        // return view('examroom', compact('users'));


        // $users = DB::table('users')
        //                 ->where(function ($query) {
        //           $query->Where('usertype', '=', 'user');
        //             })

        //                 ->get();
        $user = Auth::user();
        $id = $user->major_id;

        // $idroom = $classrooms->classroom_no;


        // $classrooms->classroom_no = $id;



        $users = Major::find($id)->users
                ->where('usertype','=','user');



        $classrooms = Classroom::find(1);

        // $classrooms = Major::find($id)->classrooms;



        // foreach ($users as $user) {
        //     echo $user->name;
        // }


        return view('examroom', [
            'users' => $users,
            'classrooms'=>$classrooms,
                                ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'address' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required'],
            'school' => ['required'],
            'education_background' => ['required'],
            'faculty_id' => ['required'],
            'major_id' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        User::create([
            'name' => $request['name'],
            'address' => $request['address'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'school' => $request['school'],
            'education_background' => $request['education_background'],
            'faculty_id' => $request['faculty_id'],
            'major_id' => $request['major_id'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('users.index')
                        ->with('success','User created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $majors = Major::all();
        $faculties = Faculty::all();

        return view('users.edit',compact('user'))->with('majors',$majors)->with('faculties',$faculties);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'usertype' => ['required'],
            'name' => ['required', 'string', 'max:255'],
            // 'address' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255'],
            // 'phone' => ['required'],
            // 'school' => ['required'],
            // 'education_background' => ['required'],
            // 'faculty_id' => ['required'],
            // 'major_id' => ['required'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        // $user->update($request->all());


        $user->update([
            'usertype' => $request['usertype'],
            'name' => $request['name'],
            // 'address' => $request['address'],
            'email' => $request['email'],
            // 'phone' => $request['phone'],
            // 'school' => $request['school'],
            // 'education_background' => $request['education_background'],
            // 'faculty_id' => $request['faculty_id'],
            // 'major_id' => $request['major_id'],
            'password' => Hash::make($request['password']),
        ]);


        return redirect()->route('users.index')
                        ->with('success','User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
                        ->with('error','User deleted successfully');
    }


  
}
