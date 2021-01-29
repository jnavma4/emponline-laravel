@extends('layouts.app')
@section('title','Edición de alumno')
@section('content')
    <h2>Edición de alumno</h2>
    {!! Form::model($student,['route'=>['students.update',$student],'method'=>'PUT','files'=>true]) !!}
    @include('students.form.form')
    <a class="btn btn-primary" href="{{route('students.index')}}">Cancelar</a>
    {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
