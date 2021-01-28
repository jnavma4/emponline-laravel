<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if ( Auth::user()->user_type==2) {
            $teachers = Teacher::latest()->paginate(15);
            return view('teachers.index', compact('teachers'));
        }
    }
    public function create()
    {
        if ( Auth::user()->user_type==2) {
            $courses = Course::orderBy('name', 'ASC')->pluck('name', 'id');
            return view('teachers.create', compact('courses'));
        }
    }
    public function store(Request $request)
    {
        if ( Auth::user()->user_type==2) {
            $request->validate([
                'dni' => 'required|unique:teachers',
                'name' => 'required',
                'last_name' => 'required',
                'birth_date' => 'required',
                'phone_number' => 'required|max:9|min:9',
                'email' => 'required',
                'course_id' => 'required'
            ]);

            Teacher::create($request->all());
            return redirect()->route('teachers.index')->with('success', 'Se ha creado correctamente');
        }
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
        if ( Auth::user()->user_type==2) {
            $courses = Course::orderBy('name', 'ASC')->pluck('name', 'id');
            return view('teachers.edit', compact('teacher', 'courses'));
        }
    }

    public function update(Request $request, Teacher $teacher)
    {
        if ( Auth::user()->user_type==2) {
            $request->validate([
                'dni' => 'required',
                'name' => 'required',
                'last_name' => 'required',
                'birth_date' => 'required',
                'phone_number' => 'required|max:9|min:9',
                'email' => 'required',
                'course_id' => 'required'
            ]);


            $teacher->update($request->all());
            return redirect()->route('teachers.index')->with('success', 'Se ha actualizado');
        }
    }

    public function destroy(Teacher $teacher)
    {
        if ( Auth::user()->user_type==2) {
            $teacher->delete();
            return redirect()->route('teachers.index')->with('success', 'Se ha borrado exitosamente');
        }
    }
}
