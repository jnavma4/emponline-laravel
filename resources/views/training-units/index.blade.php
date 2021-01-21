@extends('layouts.app')
@section('title','Gestión de unidades formativas')
@section('content')
    <h2>Gestión de unidades formativas</h2>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Curso</th>
        </tr>
        </thead>
        <tbody>
            @foreach($trainingUnits as $trainingUnit )
            <tr>
                <td>{{$trainingUnit->name}}</td>
                <td>{{$trainingUnit->description}}</td>
                <td>{{$trainingUnit->course_id}}</td>
                <td><a href="{{route('training-units.show',$trainingUnit)}}">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>

<a class="btn boton" href="{{route('training-units.create')}}">Crear unidad formativa</a>

@endsection
