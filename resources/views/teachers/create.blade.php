@extends('layouts.app')
@section('title','Dar de alta profesor')
@section('content')
    <h3>
    {!! Form::open(['route'=>'teachers.store','method'=>'POST','files'=>true]) !!}
    @include('teachers/form/form')
    <a class="btn boton" href="{{route('teachers.index')}}">Cancelar</a>
    {!! Form::submit('Enviar',['class'=>'btn boton']) !!}
    {!! Form::close() !!}
    </h3>
@endsection
