<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2) {
            $students = Student::latest()->paginate(30);
            return view('students.index', compact('students'));
        }
    }

    public function create()
    {
        if (Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2) {
            $courses = Course::orderBy('name', 'ASC')->pluck('name', 'id');
            return view('students.create', compact('courses'));
        }
    }
    public function store(Request $request)
    {
        if (Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2) {
            $request->validate([
                'course_id' => 'required',
                'dni' => 'required|unique:students',
                'name' => 'required',
                'last_name' => 'required',
                'birth_date' => 'required',
                'phone_number' => 'required|max:9|min:9',
                'email' => 'required'
            ]);

            Student::create($request->all());
            return redirect()->route('students.index')->with('success', 'Se ha creado correctamente');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }
    public function edit(Student $student)
    {
        if (Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2) {
            $courses = Course::orderBy('name', 'ASC')->pluck('name', 'id');
            return view('students.edit', compact('student', 'courses'));
        }
    }

    public function update(Request $request, Student $student)
    {
        if (Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2) {
            $request->validate([
                'course_id' => 'required',
                'dni' => 'required|unique:students',
                'name' => 'required',
                'last_name' => 'required',
                'birth_date' => 'required',
                'phone_number' => 'required|max:9|min:9',
                'email' => 'required'
            ]);
            $student->update($request->all());
            return redirect()->route('students.index')->with('success', 'Se ha actualizado');
        }
    }

    public function destroy(Student $student)
    {
        if (Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2) {
            $student->delete();
            return redirect()->route('students.index')->with('success', 'Se ha borrado exitosamente');
        }
    }
}
