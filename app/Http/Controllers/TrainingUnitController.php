<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\TrainingUnit;
use Illuminate\Http\Request;

class TrainingUnitController extends Controller
{

    public function index()
    {
        $trainingUnits=TrainingUnit::latest()->paginate('20');
        return view('training-units.index',compact('trainingUnits'));
    }


    public function create()
    {
        $courses=Course::orderBy('name','ASC')->pluck('name','id');
        return view('training-units.create',compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'course_id'=>'required'
        ]);

        TrainingUnit::create($request->all());
        return redirect()->route('training-units.index')->with('success','Se ha creado correctamente');
    }

    public function show(TrainingUnit $trainingUnit)
    {
        return view('training-units.show',compact('trainingUnit'));
    }

    public function edit(TrainingUnit $trainingUnit)
    {
        $courses=Course::orderBy('name','ASC')->pluck('name','id');
        return view('training-units.edit',compact('trainingUnit','courses'));
    }

    public function update(Request $request, TrainingUnit $trainingUnit)
    {
        $request->validate([
            'title'=>'required',
            'body'=>'required',
            'course_id'=>'required'
        ]);

        $trainingUnit->update($request->all());
        return redirect()->route('training-units.index')->with('success','Se ha actualizado');
    }

    public function destroy(TrainingUnit $trainingUnit)
    {
        $trainingUnit->delete();
        return redirect()->route('training-units.index')->with('success','Se ha borrado exitosamente');
    }
}
