@extends('welcome')
@section('title','Edición de curso')
@section('content')
    <h2>Edición de curso</h2>
    {!! Form::model($course,['route'=>['courses.update',$course],'method'=>'PUT','files'=>'true']) !!}
        @include('courses.form.form')
        <a  href="{{route('courses.index')}}">Cancelar</a>
        {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}
@endsection
