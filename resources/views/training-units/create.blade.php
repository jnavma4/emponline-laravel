@extends('layouts.app')
@section('title','Crear unidad formativa')
@section('content') 
    <h2>Añadir Unidad Formativa</h2>
    <h3>
    {!! Form::open(['route'=>'training-units.store','method'=>'POST','files'=>true]) !!}
    @include('training-units/form/form')
    <a class="btn boton" href="{{route('training-units.index')}}">Cancelar</a>
    {!! Form::submit('Enviar',['class'=>'btn boton']) !!}
   {!! Form::close() !!}
   </h3>
@endsection
