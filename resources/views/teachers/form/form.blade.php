{!! Form::label('dni','DNI') !!}
{!! Form::text('dni')!!}
{!! Form::label('name','Nombre') !!}
{!! Form::text('name')!!}
{!! Form::label('last_name','Apellidos') !!}
{!! Form::text('last_name')!!}
{!! Form::label('birth_date','Fecha de nacimiento') !!}
{!! Form::date('birth_date')!!}
{!! Form::label('phone_number','Número de teléfono') !!}
{!! Form::number('phone_number')!!}
{!! Form::label('email','Email') !!}
{!! Form::text('email')!!}
{!! Form::label('course_id','Curso') !!}
{!! Form::select('course_id',$courses,null,['placeholder'=>'Selecciona un curso'])!!}


