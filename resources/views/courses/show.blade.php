@extends('layouts.app')
@section('title','Vista de cursos')
@section('content')
    <div class="card">

    <div class="card-header">
        <h1 class="card-title">{{$course->name}}</h1>
        <p>{{$course->hours}} horas </p>
        <p class="card-text">{{$course->description}}</p>
    </div>
    @foreach($ufos as $trainingUnit)
        <div class="list-group list-group-flush">
            <div class="list-group-item">
                <h3 class="card-title">{{$trainingUnit->title}}</h3>
                <p class="card-text">{{$trainingUnit->body}} </p>
            </div>
        </div>

    @endforeach
        <div class="card-body">
            <a class="btn btn-outline-primary" href="{{route('training-units.create')}}">Crear unidad formativa</a>
        </div>
        <div class="card-footer">
            <a class="btn btn-outline-primary" href="{{route('courses.index')}}"><img src="{{asset('img/deshacer.svg')}}" height="25px"/> Volver</a>
        </div>

    </div>
@endsection
