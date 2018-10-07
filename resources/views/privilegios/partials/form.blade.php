<div class="form-group">
    {{Form::label('name','Nombre del Privilegio')}}
    {{Form::text('name',null,['class'=>'form-control'])}}

</div>

<div class="form-group">
    {{Form::label('name','Slug')}}
    {{Form::text('slug',null,['class'=>'form-control'])}}

</div>

<div class="form-group">
    {{Form::label('description','descripcion del producto')}}
    {{Form::textarea('description',null,['class'=>'form-control'])}}

</div>

<div class="form-group">

    {{Form::submit('Guardar',null,['class'=>'btn btn-sm btn-primary'])}}

</div>
