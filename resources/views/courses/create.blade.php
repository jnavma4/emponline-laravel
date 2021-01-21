@extends('layouts.app')
@section('title','Añadir curso')
@section('content')
    <h2>Añadir curso</h2>
    {!! Form::open(['route'=>'courses.store','method'=>'POST','files'=>'true'])!!}
        @include('courses.form.form')
    <a href="{{route('courses.index')}}">Cancelar</a>
    {!! Form::submit('Enviar') !!}
    {!! Form::close() !!}
@endsection
