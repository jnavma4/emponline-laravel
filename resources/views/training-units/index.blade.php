@extends('layouts.app')
@section('title','Gestión de unidades formativas')
@section('content')
    <h2>Gestión de unidades formativas</h2>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Código</th>
            <th>Nombre</th>
            <th>Horas</th>
            <th>Descripción</th>
            <th>Horario</th>
            <th>Curso</th>
        </tr>
        </thead>
        <tbody>
            @foreach($trainingUnits as $trainingUnit )
            <tr>
                <td>{{$trainingUnit->code}}</td>
                <td>{{$trainingUnit->name}}</td>
                <td>{{$trainingUnit->hours}}</td>
                <td>{{$trainingUnit->description}}</td>
                <td>{{$trainingUnit->schedule}}</td>
                <td>{{$trainingUnit->course_id}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

<a class="btn boton" href="{{route('training-units.create')}}">Crear unidad formativa</a>

@endsection
