@extends('layouts.app')
@section('title','Dar de alta un estudiante')
@section('content')
    <h3>
    {!! Form::open(['route'=>'students.store','method'=>'POST','files'=>true]) !!}
    @include('students/form/form')
    <a class="btn btn-primary" href="{{route('students.index')}}">Cancelar</a>
    {!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
    <h3>
@endsection
