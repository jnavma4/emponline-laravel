
{!! Form::label('name','Nombre') !!}
{!! Form::text('name')!!}
{!! Form::label('description','Descripción') !!}
{!! Form::text('description')!!}
{!! Form::label('course_id','Curso') !!}
{!! Form::select('course_id',$courses,null,['placeholder'=>'Selecciona un curso'])!!}
{!! Form::label('temario','Temario') !!}
<div class="custom-file">
    <input type="file" class="custom-file-input" name="temario" lang="es">
    <label class="custom-file-label" name="temario">Seleccionar Archivo</label>
</div>
