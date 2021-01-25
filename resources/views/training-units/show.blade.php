@extends('layouts.app')
@section('title','Vista del curso')
@section('content')
<div class="card-body">
     <h2 class="card-title">{{$trainingUnit->title}}</h2>
    <div class="row">
        <div class="col">
            <p>{{$trainingUnit->body}}</p>
        </div>
    </div>
</div>
<div class="card-footer">
    <a class="btn" href="{{route('training-units.index')}}">Volver</a>
</div>
@endsection
