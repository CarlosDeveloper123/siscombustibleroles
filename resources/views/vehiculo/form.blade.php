<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::text('placavehiculo', $vehiculo->placavehiculo, ['class' => 'form-control' . ($errors->has('placavehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Placavehiculo']) }}
            {!! $errors->first('placavehiculo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Tipo') }}
            {{ Form::text('tipovehiculo', $vehiculo->tipovehiculo, ['class' => 'form-control' . ($errors->has('tipovehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Tipovehiculo']) }}
            {!! $errors->first('tipovehiculo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Año') }}
            {{ Form::text('añovehiculo', $vehiculo->añovehiculo, ['class' => 'form-control' . ($errors->has('añovehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Añovehiculo']) }}
            {!! $errors->first('añovehiculo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Marca') }}
            {{ Form::text('marcavehiculo', $vehiculo->marcavehiculo, ['class' => 'form-control' . ($errors->has('marcavehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Marcavehiculo']) }}
            {!! $errors->first('marcavehiculo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Empresa') }}
            {{ Form::text('empresavehiculo', $vehiculo->empresavehiculo, ['class' => 'form-control' . ($errors->has('empresavehiculo') ? ' is-invalid' : ''), 'placeholder' => 'Empresavehiculo']) }}
            {!! $errors->first('empresavehiculo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('estadovechiculo', $vehiculo->estadovechiculo, ['class' => 'form-control' . ($errors->has('estadovechiculo') ? ' is-invalid' : ''), 'placeholder' => 'Estadovechiculo']) }}
            {!! $errors->first('estadovechiculo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <!--div class="form-group">
            {{ Form::label('idtipocombustibles') }}
            {{ Form::text('idtipocombustibles', $vehiculo->idtipocombustibles, ['class' => 'form-control' . ($errors->has('idtipocombustibles') ? ' is-invalid' : ''), 'placeholder' => 'Idtipocombustibles']) }}
            {!! $errors->first('idtipocombustibles', '<div class="invalid-feedback">:message</p>') !!}
        </div-->
        <div class="form-group">
            {{ Form::label('Tipo de combustible') }}
            {{ Form::select('idtipocombustibles',$tipocombustible,  $vehiculo->idtipocombustibles, ['class' => 'form-control' . ($errors->has('idtipocombustibles') ? ' is-invalid' : ''), 'placeholder' => ':: Seleccione ::']) }}
            {!! $errors->first('idtipocombustibles', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>