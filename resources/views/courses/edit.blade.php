@extends('layouts.app')
@section('title','Edición de curso')
@section('content')
    <h2>Edición de curso</h2>
    <h3>
    {!! Form::model($course,['route'=>['courses.update',$course],'method'=>'PUT','files'=>'true']) !!}
        @include('courses.form.form')
        <a class='btn btn-primary'  href="{{route('courses.index')}}">Cancelar</a>
        {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}
    </h3>
@endsection
