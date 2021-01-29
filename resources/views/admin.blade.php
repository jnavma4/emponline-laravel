@extends('layouts.app')
@section('title','Panel administración')
@section('content')
    {{--Poonerlo con alguna imagen dento de un card con su head title footer --}}
    <a href="{{route('courses.index')}}">Ver cursos</a>
    {{--Poonerlo con alguna imagen dento de un card con su head title footer --}}
    <a href="{{route('teachers.index')}}">Ver profesores</a>
    {{--Poonerlo con alguna imagen dento de un card con su head title footer --}}
    <a href="{{route('students.index')}}">Ver estudiantes</a>
    {{--Poonerlo con alguna imagen dento de un card con su head title footer --}}
    <a href="{{route('training-units.index')}}">Ver unidades formativas</a>
@endsection
