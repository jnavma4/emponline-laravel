@extends('layouts.app')
@section('title','Gestión de cursos')
@section('content')
<h2 class="titulos">Gestión de cursos</h2>
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
         <td><a href="{{route('courses.show',$course)}}">Ver</a></td>
        <td><a href="{{route('courses.edit',$course)}}">Editar</a></td>
        <td>{!! Form::open(['route'=>['courses.destroy',$course],'method'=>'DELETE']) !!}
            {!! Form::submit('Borrar') !!}
            {!! Form::close() !!}
        </td>
        </tr>
    @endforeach


</table>
    <a class="btn btn-success" href="{{route('courses.create')}}"><img src="{{asset('img/boton-agregar.svg')}}" height="20px"/> Crear curso</a>
@endsection
