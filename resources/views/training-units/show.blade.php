@extends('layouts.app')
@section('title','Vista del curso')
@section('content')
<div class="card">
     <h2 class="card-header">{{$trainingUnit->title}}</h2>
    <div class="row">
        <div class="card-body">
            <p>{{$trainingUnit->body}}</p>
        </div>
    </div>
</div>
<div class="card-footer">
    <a class="btn btn-primary" href="{{route('training-units.index')}}"><img src="{{asset('img/deshacer.svg')}}" height="25px"/> Volver</a>
</div>
@endsection
