<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\TrainingUnit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TrainingUnitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if ( Auth::user()->user_type==2) {
            $trainingUnits = TrainingUnit::latest()->paginate('20');
            return view('training-units.index', compact('trainingUnits'));
        }
    }


    public function create()
    {
        if ( Auth::user()->user_type==2) {
            $courses = Course::orderBy('name', 'ASC')->pluck('name', 'id');
            return view('training-units.create', compact('courses'));

        }
    }

    public function store(Request $request)
    {
        if ( Auth::user()->user_type==2) {
            $request->validate([
                'title' => 'required',
                'body' => 'required',
                'course_id' => 'required'
            ]);

            TrainingUnit::create($request->all());
            return redirect()->route('training-units.index')->with('success', 'Se ha creado correctamente');
        }
    }

    public function show(TrainingUnit $trainingUnit)
    {
        if ( Auth::user()->user_type==2) {
            return view('training-units.show', compact('trainingUnit'));
        }
    }

    public function edit(TrainingUnit $trainingUnit)
    {
        if ( Auth::user()->user_type==2) {
            $courses = Course::orderBy('name', 'ASC')->pluck('name', 'id');
            return view('training-units.edit', compact('trainingUnit', 'courses'));
        }
    }

    public function update(Request $request, TrainingUnit $trainingUnit)
    {
        if ( Auth::user()->user_type==2) {
            $request->validate([
                'title' => 'required',
                'body' => 'required',
                'course_id' => 'required'
            ]);

            $trainingUnit->update($request->all());
            return redirect()->route('training-units.index')->with('success', 'Se ha actualizado');
        }
    }

    public function destroy(TrainingUnit $trainingUnit)
    {
        if ( Auth::user()->user_type==2) {
            $trainingUnit->delete();
            return redirect()->route('training-units.index')->with('success', 'Se ha borrado exitosamente');
        }
    }
}
