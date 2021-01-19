@extends('welcome')
@section('title','Gestión de cursos')
@section('content')
<h2>Gestión de cursos</h2>
<table>
<tr>
    <th>Nombre</th>
    <th>Horas</th>
    <th>Descripcion</th>
</tr>
<tr>
    @foreach($courses as $course)
        <td>{{$course->name}}</td>
        <td>{{$course->hours}}</td>
        <td>{{$course->description}}</td>
        <td><a href="{{route('courses.edit',$course)}}">Editar</a></td>
        <td>{!! Form::open(['route'=>['courses.destroy',$course],'method'=>'DELETE']) !!}
            {!! Form::submit('Borrar') !!}
            {!! Form::close() !!}
        </td>
    @endforeach

</tr>
</table>
    <a href="{{route('courses.create')}}">Crear curso</a>
@endsection
