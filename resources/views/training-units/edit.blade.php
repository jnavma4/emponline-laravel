@extends('layouts.app')
@section('title','Edición de unidad formativa')
@section('content')
    <h2>Edición de unidad formativa</h2>
    {!! Form::model($trainingUnit,['route'=>['training-units.update',$trainingUnit],'method'=>'PUT','files'=>'true']) !!}
    @include('training-units.form.form')
    <a  class="btn btn-primary" href="{{route('training-units.index')}}">Cancelar</a>
    {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
