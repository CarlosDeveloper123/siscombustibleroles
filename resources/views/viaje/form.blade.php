<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('SALIDA') }}
            {{ Form::text('lugarsalida', $viaje->lugarsalida, ['class' => 'form-control' . ($errors->has('lugarsalida') ? ' is-invalid' : ''), 'placeholder' => 'Lugarsalida']) }}
            {!! $errors->first('lugarsalida', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <!--div class="form-group">
            {{ Form::label('lugardestino') }}
            {{ Form::text('lugardestino', $viaje->lugardestino, ['class' => 'form-control' . ($errors->has('lugardestino') ? ' is-invalid' : ''), 'placeholder' => 'Lugardestino']) }}
            {!! $errors->first('lugardestino', '<div class="invalid-feedback">:message</p>') !!}
        </div-->
        <!--div class="form-group">
            {{ Form::label('idplantas') }}
            {{ Form::text('idplantas', $viaje->idplantas, ['class' => 'form-control' . ($errors->has('idplantas') ? ' is-invalid' : ''), 'placeholder' => 'Idplantas']) }}
            {!! $errors->first('idplantas', '<div class="invalid-feedback">:message</p>') !!}
        </div-->
        <div class="form-group">
            {{ Form::label('DESTINO') }}
            {{ Form::select('idplantas',$plantas, $viaje->idplantas, ['class' => 'form-control' . ($errors->has('idplantas') ? ' is-invalid' : ''), 'placeholder' => '::: Seleccione :::']) }}
            {!! $errors->first('idplantas', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('CANTIDAD') }}
            {{ Form::number('cantidadviaje', $viaje->cantidadviaje, ['class' => 'form-control' . ($errors->has('cantidadviaje') ? ' is-invalid' : ''), 'placeholder' => 'Cantidadviaje']) }}
            {!! $errors->first('cantidadviaje', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <!--div class="form-group">
            {{ Form::label('idvehiculos') }}
            {{ Form::text('idvehiculos', $viaje->idvehiculos, ['class' => 'form-control' . ($errors->has('idvehiculos') ? ' is-invalid' : ''), 'placeholder' => 'Idvehiculos']) }}
            {!! $errors->first('idvehiculos', '<div class="invalid-feedback">:message</p>') !!}
        </div-->
        <div class="form-group">
            {{ Form::label('PLACA') }}
            {{ Form::select('idvehiculos',$vehiculo, $viaje->idvehiculos, ['class' => 'form-control' . ($errors->has('idvehiculos') ? ' is-invalid' : ''), 'placeholder' => '::: Seleccione :::']) }}
            {!! $errors->first('idvehiculos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <!--div class="form-group">
            {{ Form::label('idconductores') }}
            {{ Form::text('idconductores', $viaje->idconductores, ['class' => 'form-control' . ($errors->has('idconductores') ? ' is-invalid' : ''), 'placeholder' => 'Idconductores']) }}
            {!! $errors->first('idconductores', '<div class="invalid-feedback">:message</p>') !!}
        </div-->
        <div class="form-group">
            {{ Form::label('CONDUCTOR') }}
            {{ Form::select('idconductores',$conductor, $viaje->idconductores, ['class' => 'form-control' . ($errors->has('idconductores') ? ' is-invalid' : ''), 'placeholder' => '::: Seleccione :::']) }}
            {!! $errors->first('idconductores', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>