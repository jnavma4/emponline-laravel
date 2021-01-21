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
            'name'=>'required',
            'description'=>'required',
            'course_id'=>'required'
        ]);
        if($request->hasFile('temario')) {
            $temario=$request->file('temario');
            $nombre=time().$temario->getClientOriginalName();
            $urltemario['url']='/images/'.$nombre;
        }

        TrainingUnit::create($request->all());
        TrainingUnit::temario()->create($urltemario);
        return redirect()->route('training-units.index')->with('success','Se ha creado correctamente');
    }

    public function show(TrainingUnit $trainingUnit)
    {
        return view('training-units.show',compact('trainingUnit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrainingUnit  $trainingUnit
     * @return \Illuminate\Http\Response
     */
    public function edit(TrainingUnit $trainingUnit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrainingUnit  $trainingUnit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TrainingUnit $trainingUnit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainingUnit  $trainingUnit
     * @return \Illuminate\Http\Response
     */
    public function destroy(TrainingUnit $trainingUnit)
    {
        //
    }
}
