
{!! Form::label('title','Título') !!}
{!! Form::text('title')!!}
{!! Form::label('course_id','Curso') !!}
{!! Form::select('course_id',$courses,null,['placeholder'=>'Selecciona un curso'])!!}
{!! Form::label('body','Contenido') !!}
{!! Form::textarea('body')!!}

