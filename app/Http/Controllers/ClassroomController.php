<?php

namespace App\Http\Controllers;

use App\Classroom;
use App\Major;
use App\User;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classrooms = Classroom::orderBy('major_id', 'asc')->paginate(5);

        return view('classrooms.index',compact('classrooms'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $majors = Major::all();

        return view('classrooms.create')->with('majors',$majors);
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
            'classroom_no' => 'required',
            'major_id' => 'required',

        ]);

        Classroom::create($request->all());

        $majors = Major::all();

        return redirect()->route('classrooms.index')
                        ->with('majors',$majors)
                        ->with('success','Classroom created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function show(Classroom $classroom)
    {

        return view('classrooms.show',compact('classroom'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function edit(Classroom $classroom)
    {
        $majors = Major::all();

        return view('classrooms.edit',compact('classroom'))->with('majors',$majors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classroom $classroom)
    {
        $request->validate([
            'classroom_no' => 'required',
            'major_id' => 'required',

        ]);

        $classroom->update($request->all());

        $majors = Major::all();

        return redirect()->route('classrooms.index')
                        ->with('majors',$majors)
                        ->with('success','Classroom updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Classroom  $classroom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classroom $classroom)
    {
        $classroom->delete();

        return redirect()->route('classrooms.index')
                        ->with('error','Classroom deleted successfully');
    }
}
