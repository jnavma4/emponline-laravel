<?php

namespace App\Http\Controllers;

use App\Models\Course;
use http\Client;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses=Course::latest()->paginate(15);
        return  view('courses.index',compact('courses'));
    }

    public function create()
    {
        return view('courses.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:courses',
            'hours'=>'required',
            'description'=>'required'
        ]);
        Course::create($request->all());
        return redirect()->route('courses.index')->with('success','Se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }
    public function edit(Course $course)
    {
        return view('courses.edit',compact('course'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name'=>'required',
            'hours'=>'required',
            'description'=>'required'
        ]);
        $course->update($request->all());
        return redirect()->route('courses.index')->with('sucess','Se ha actualizado con éxito');
    }
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success','Se ha borrado exitosamente');
    }
}
