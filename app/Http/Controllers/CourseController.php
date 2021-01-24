<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\TrainingUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function show(Course $course)
    {
        $ufos=DB::table('training_units')->where('course_id',$course->id)->get();
        return view('courses.show',compact('course','ufos'));
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
        return redirect()->route('courses.index')->with('success','Se ha actualizado con éxito');
    }
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success','Se ha borrado exitosamente');
    }
}
