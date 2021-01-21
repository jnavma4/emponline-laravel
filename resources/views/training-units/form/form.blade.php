{!! Form::label('code','Código') !!}
{!! Form::text('code') !!}
{!! Form::label('name','Nombre') !!}
{!! Form::text('name')!!}
{!! Form::label('hours','Horas') !!}
{!! Form::number('hours')!!}
{!! Form::label('description','Descripción') !!}
{!! Form::text('description')!!}
{!! Form::label('schedule','Horario') !!}
{!! Form::text('schedule')!!}
{!! Form::label('course_id','Curso') !!}
{!! Form::select('course_id',$courses,null,['placeholder'=>'Selecciona un curso'])!!}
