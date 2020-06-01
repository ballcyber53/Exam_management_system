<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\Major;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $majors = Major::orderBy('faculty_id', 'asc')->paginate(5);

        return view('majors.index',compact('majors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $facultys = Faculty::all();

        return view('majors.create')->with('facultys',$facultys)
                                    ->with('success','Classroom created successfully.');
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
            'name' => 'required',
            'faculty_id' => 'required',
            'route_map' => 'required'

        ]);

        Major::create($request->all());

        return redirect()->route('majors.index')
                        ->with('success','Major created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function show(Major $major)
    {

        return view('majors.show',compact('major'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
    {
        $facultys = Faculty::all();

        return view('majors.edit',compact('major'))->with('facultys',$facultys);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Major $major)
    {
        $request->validate([
            'name' => 'required',
            // 'faculty_id' => 'required',
            'route_map' => 'required'
        ]);

        $major->update($request->all());

        return redirect()->route('majors.index')
                        ->with('success','Major updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function destroy(Major $major)
    {
        $major->delete();

        return redirect()->route('majors.index')
                        ->with('error','Major deleted successfully');
    }
}
