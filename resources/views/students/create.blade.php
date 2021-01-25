@extends('layouts.app')
@section('title','Dar de alta un estudiante')
@section('content')
    {!! Form::open(['route'=>'students.store','method'=>'POST','files'=>true]) !!}
    @include('students/form/form')
    <a class="btn boton" href="{{route('students.index')}}">Cancelar</a>
    {!! Form::submit('Enviar',['class'=>'btn boton']) !!}
    {!! Form::close() !!}
@endsection
