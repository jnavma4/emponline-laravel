<div class="mb-3">
{!! Form::label('dni','DNI') !!}
{!! Form::text('dni')!!}
</div>
<div class="mb-3">
{!! Form::label('name','Nombre') !!}
{!! Form::text('name')!!}
</div>
<div class="mb-3">
{!! Form::label('last_name','Apellidos') !!}
{!! Form::text('last_name')!!}
</div>
<div class="mb-3">
{!! Form::label('birth_date','Fecha de nacimiento') !!}
{!! Form::date('birth_date')!!}
</div>
<div class="mb-3">
{!! Form::label('phone_number','Número de teléfono') !!}
{!! Form::number('phone_number')!!}
</div>
<div class="mb-3">
{!! Form::label('email','Email') !!}
{!! Form::text('email')!!}
</div>
<div class="mb-3">
{!! Form::label('course_id','Curso') !!}
{!! Form::select('course_id',$courses,null,['placeholder'=>'Selecciona un curso'])!!}
</div>

