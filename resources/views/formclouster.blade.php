<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('k', 'Valor del couster:') !!}
    {!! Form::text('k', null, ['class' => 'form-control','required', 'id'=>'value']) !!}
</div>
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary boton_mostrar','onclick' => "muestra_oculta('contenido')"]) !!}
    <a href="{!! route('users.index') !!}" class="btn btn-default">Cancel</a>
</div>
