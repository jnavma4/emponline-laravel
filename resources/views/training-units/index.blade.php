@extends('layouts.app')
@section('title','Gestión de unidades formativas')
@section('content')
    <h2>Gestión de unidades formativas</h2>

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Título</th>
            <th>Curso</th>
            <th>Ver</th>
        </tr>
        </thead>
        <tbody>
            @foreach($trainingUnits as $trainingUnit )
            <tr>
                <td>{{$trainingUnit->title}}</td>
                <td>{{$trainingUnit->course_id}}</td>
                <td><a href="{{route('training-units.show',$trainingUnit)}}">Ver</a></td>
                <td>
                    <a href="{{route('training-units.edit',$trainingUnit)}}">Editar</a>
                </td>
                <td>{!! Form::open(['route'=>['training-units.destroy',$trainingUnit],'method'=>'DELETE']) !!}
                    {!! Form::submit('Borrar') !!}
                    {!! Form::close() !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

<a class="btn boton" href="{{route('training-units.create')}}">Crear unidad formativa</a>

@endsection
