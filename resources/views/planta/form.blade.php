<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Planta') }}
            {{ Form::text('nombreplanta', $planta->nombreplanta, ['class' => 'form-control' . ($errors->has('nombreplanta') ? ' is-invalid' : ''), 'placeholder' => 'Nombreplanta']) }}
            {!! $errors->first('nombreplanta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('direccionplanta', $planta->direccionplanta, ['class' => 'form-control' . ($errors->has('direccionplanta') ? ' is-invalid' : ''), 'placeholder' => 'Direccionplanta']) }}
            {!! $errors->first('direccionplanta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Distancia') }}
            {{ Form::text('distanciaplanta', $planta->distanciaplanta, ['class' => 'form-control' . ($errors->has('distanciaplanta') ? ' is-invalid' : ''), 'placeholder' => 'Distanciaplanta']) }}
            {!! $errors->first('distanciaplanta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('telefonoplanta', $planta->telefonoplanta, ['class' => 'form-control' . ($errors->has('telefonoplanta') ? ' is-invalid' : ''), 'placeholder' => 'Telefonoplanta']) }}
            {!! $errors->first('telefonoplanta', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('estadoplanta', $planta->estadoplanta, ['class' => 'form-control' . ($errors->has('estadoplanta') ? ' is-invalid' : ''), 'placeholder' => 'Estadoplanta']) }}
            {!! $errors->first('estadoplanta', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>