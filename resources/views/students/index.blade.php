@extends('layouts.app')
@section('title','Gestión de estudiantes')
@section('content')
    <h2>Gestión de estudiantes</h2>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Teléfono</th>
            <th>Curso</th>
        </tr>
        </thead>
        <tbody>
        @foreach($students as $student )
            <tr>
                <td>{{$student->dni}}</td>
                <td>{{$student->name}}</td>
                <td>{{$student->last_name}}</td>
                <td>{{$student->phone_number}}</td>
                <td>{{$student->course_id}}</td>
                <td>
                    <a href="{{route('students.edit',$student)}}">Editar</a>
                </td>
                <td>{!! Form::open(['route'=>['students.destroy',$student],'method'=>'DELETE']) !!}
                    {!! Form::submit('Borrar') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a class="btn boton" href="{{route('students.create')}}">Dar de alta</a>

@endsection
