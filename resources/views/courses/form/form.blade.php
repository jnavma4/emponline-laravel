<div class="mb-3">
    {!! Form::label('name','Nombre', ['class' => 'form-label']) !!}
    {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>
<div class="mb-3">
    {!! Form::label('hours','Horas') !!}
    {!! Form::number('hours') !!}
</div>
<div class="mb-3">
    {!! Form::label('description','Descripción', ['class' => 'form-label']) !!}
    {!! Form::text('description',null, ['class'=>'form-control']) !!}
</div>
