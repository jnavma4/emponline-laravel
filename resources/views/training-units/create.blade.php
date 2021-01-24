@extends('layouts.app')
@section('title','Crear unidad formativa')
@section('content')
    {!! Form::open(['route'=>'training-units.store','method'=>'POST','files'=>true]) !!}
    @include('training-units/form/form')
    <a class="btn boton" href="{{route('training-units.index')}}">Cancelar</a>
    {!! Form::submit('Enviar',['class'=>'btn boton']) !!}
    {!! Form::close() !!}
@endsection
