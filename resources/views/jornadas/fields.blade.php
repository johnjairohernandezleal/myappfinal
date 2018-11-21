<!-- Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo', 'Codigo:') !!}
    {!! Form::text('codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Jornada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('jornada', 'Jornada:') !!}
    {!! Form::text('jornada', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('jornadas.index') !!}" class="btn btn-default">Cancel</a>
</div>
