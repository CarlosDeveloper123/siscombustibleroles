<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Tipo de combustible') }}
            {{ Form::text('nombretipocombustible', $tipocombustible->nombretipocombustible, ['class' => 'form-control' . ($errors->has('nombretipocombustible') ? ' is-invalid' : ''), 'placeholder' => 'Nombretipocombustible']) }}
            {!! $errors->first('nombretipocombustible', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>