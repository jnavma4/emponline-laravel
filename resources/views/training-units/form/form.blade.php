<div class="mb-3">
{!! Form::label('title','Título') !!}
{!! Form::text('title')!!}
</div>
<div class="mb-3">
{!! Form::label('course_id','Curso') !!}
{!! Form::select('course_id',$courses,null,['placeholder'=>'Selecciona un curso'])!!}
</div>
<div class="mb-3">
{!! Form::label('body','Contenido') !!}
</div>
<div class="mb-3">
{!! Form::textarea('body')!!}
</div>
