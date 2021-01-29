<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\TrainingUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2) {
            $courses = Course::latest()->paginate(15);
            return view('courses.index', compact('courses'));
        }

    }

    public function create()
    {
        if ( Auth::user()->tipo_usuario==2) {
            return view('courses.create');
        }
    }


    public function store(Request $request)
    {
        if ( Auth::user()->tipo_usuario==2) {
            $request->validate([
                'name' => 'required|unique:courses',
                'hours' => 'required',
                'description' => 'required'
            ]);
            Course::create($request->all());
            return redirect()->route('courses.index')->with('success', 'Se ha creado correctamente');
        }
    }

    public function show(Course $course)
    {
        if (Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2) {
            $ufos = DB::table('training_units')->where('course_id', $course->id)->get();
            return view('courses.show', compact('course', 'ufos'));
        }
    }
    public function edit(Course $course)
    {
        if (Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2) {
            return view('courses.edit', compact('course'));
        }
    }

    public function update(Request $request, Course $course)
    {
        if (Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2) {
            $request->validate([
                'name' => 'required',
                'hours' => 'required',
                'description' => 'required'
            ]);
            $course->update($request->all());
            return redirect()->route('courses.index')->with('success', 'Se ha actualizado con éxito');
        }
    }
    public function destroy(Course $course)
    {
        if (Auth::user()->tipo_usuario==1 || Auth::user()->tipo_usuario==2) {
            $course->delete();
            return redirect()->route('courses.index')->with('success', 'Se ha borrado exitosamente');
        }
    }
}
