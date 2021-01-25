@extends('layouts.app')
@section('title','Edición de profesor')
@section('content')
    <h2>Edición de profesor</h2>
    {!! Form::model($teacher,['route'=>['teachers.update',$teacher],'method'=>'PUT','files'=>true]) !!}
    @include('teachers.form.form')
    <a  href="{{route('teachers.index')}}">Cancelar</a>
    {!! Form::submit('Guardar') !!}
    {!! Form::close() !!}
@endsection
