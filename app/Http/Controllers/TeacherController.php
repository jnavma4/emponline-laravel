<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers=Teacher::latest()->paginate(15);
        return view('teachers.index',compact('teachers'));
    }
    public function create()
    {
        $courses=Course::orderBy('name','ASC')->pluck('name','id');
        return view('teachers.create',compact('courses'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'dni'=>'required|unique:teachers',
            'name'=>'required',
            'last_name'=>'required',
            'birth_date'=>'required',
            'phone_number'=>'required|max:9|min:9',
            'email'=>'required',
            'course_id'=>'required'
        ]);

        Teacher::create($request->all());
        return redirect()->route('teachers.index')->with('success','Se ha creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    public function edit(Teacher $teacher)
    {
        $courses=Course::orderBy('name','ASC')->pluck('name','id');
        return view('teachers.edit',compact('teacher','courses'));

    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'dni'=>'required',
            'name'=>'required',
            'last_name'=>'required',
            'birth_date'=>'required',
            'phone_number'=>'required|max:9|min:9',
            'email'=>'required',
            'course_id'=>'required'
        ]);


        $teacher->update($request->all());
        return redirect()->route('teachers.index')->with('success','Se ha actualizado');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return view('teachers.index')->with('success','Se ha eliminado correctamente');
    }
}
