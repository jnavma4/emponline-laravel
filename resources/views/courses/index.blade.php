@extends('layouts.app')
@section('title','Gestión de cursos')
@section('content')
<h2>Gestión de cursos</h2>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>Nombre</th>
        <th>Horas</th>
        <th>Descripcion</th>
    </tr>
    </thead>


    @foreach($courses as $course)
        <tr>
        <td>{{$course->name}}</td>
        <td>{{$course->hours}}</td>
        <td>{{$course->description}}</td>
        <td><a href="{{route('courses.edit',$course)}}">Editar</a></td>
        <td>{!! Form::open(['route'=>['courses.destroy',$course],'method'=>'DELETE']) !!}
            {!! Form::submit('Borrar') !!}
            {!! Form::close() !!}
        </td>
        </tr>
    @endforeach


</table>
    <a href="{{route('courses.create')}}">Crear curso</a>
@endsection
