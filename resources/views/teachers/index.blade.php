@extends('layouts.app')
@section('title','Gestión de unidades profesores')
@section('content')
    <h2>Gestión de profesores</h2>

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
        @foreach($teachers as $teacher )
            <tr>
                <td>{{$teacher->dni}}</td>
                <td>{{$teacher->name}}</td>
                <td>{{$teacher->last_name}}</td>
                <td>{{$teacher->phone_number}}</td>
                <td>{{$teacher->course_id}}</td>
                <td>
                    <a href="{{route('teachers.edit',$teacher)}}">Editar</a>
                </td>
                <td>{!! Form::open(['route'=>['teachers.destroy',$teacher],'method'=>'DELETE']) !!}
                    {!! Form::submit('Borrar') !!}
                    {!! Form::close() !!}
                </td>

            </tr>
        @endforeach
        </tbody>
    </table>

    <a class="btn boton" href="{{route('teachers.create')}}">Dar de alta</a>

@endsection
