<div class="box box-info padding-1">
    <div class="box-body">

    
        <div class="form-group">
            {{ Form::label('Codigo') }}
            {{ Form::text('numerovale', $valescombustible->numerovale, ['class' => 'form-control' . ($errors->has('numerovale') ? ' is-invalid' : ''), 'placeholder' => 'Numerovale']) }}
            {!! $errors->first('numerovale', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <!--div class="form-group">
            {{ Form::label('idvehiculos') }}
            {{ Form::text('idvehiculos', $valescombustible->idvehiculos, ['class' => 'form-control' . ($errors->has('idvehiculos') ? ' is-invalid' : ''), 'placeholder' => 'Idvehiculos']) }}
            {!! $errors->first('idvehiculos', '<div class="invalid-feedback">:message</p>') !!}
        </div-->
        <div class="form-group">
            {{ Form::label('Placa') }}
            {{ Form::select('idvehiculos',$vehiculo, $valescombustible->idvehiculos, ['class' => 'form-control' . ($errors->has('idvehiculos') ? ' is-invalid' : ''), 'placeholder' => ':: Seleccione ::']) }}
            {!! $errors->first('idvehiculos', '<div class="invalid-feedback">:message</p>') !!}
        </div>

        <!--div class="form-group">
            {{ Form::label('idconductores') }}
            {{ Form::text('idconductores', $valescombustible->idconductores, ['class' => 'form-control' . ($errors->has('idconductores') ? ' is-invalid' : ''), 'placeholder' => 'Idconductores']) }}
            {!! $errors->first('idconductores', '<div class="invalid-feedback">:message</p>') !!}
        </div-->
        <div class="form-group">
            {{ Form::label('Conductor') }}
            {{ Form::select('idconductores',$conductor, $valescombustible->idconductores, ['class' => 'form-control' . ($errors->has('idconductores') ? ' is-invalid' : ''), 'placeholder' => ':: Seleccione ::']) }}
            {!! $errors->first('idconductores', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <!--div class="form-group">
            {{ Form::label('idgrifos') }}
            {{ Form::text('idgrifos', $valescombustible->idgrifos, ['class' => 'form-control' . ($errors->has('idgrifos') ? ' is-invalid' : ''), 'placeholder' => 'Idgrifos']) }}
            {!! $errors->first('idgrifos', '<div class="invalid-feedback">:message</p>') !!}
        </div-->
        <div class="form-group">
            {{ Form::label('Grifo') }}
            {{ Form::select('idgrifos',$grifo, $valescombustible->idgrifos, ['class' => 'form-control' . ($errors->has('idgrifos') ? ' is-invalid' : ''), 'placeholder' => ':: Seleccione ::']) }}
            {!! $errors->first('idgrifos', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('Fecha') }}
            {{ Form::date('fecha', $valescombustible->fecha, ['class' => 'form-control' . ($errors->has('fecha') ? ' is-invalid' : ''), 'placeholder' => 'Fecha']) }}
            {!! $errors->first('fecha', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('kilometraje (no separar por puntos)') }}
            {{ Form::number('kilometraje', $valescombustible->kilometraje, ['class' => 'form-control' . ($errors->has('kilometraje') ? ' is-invalid' : ''),'step' =>'0.001', 'placeholder' => 'Kilometraje']) }}
            {!! $errors->first('kilometraje', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('galonaje') }}
            {{ Form::number('galonaje', $valescombustible->galonaje,['class' => 'form-control' . ($errors->has('galonaje') ? ' is-invalid' : ''),'id' => 'cantgalonaje','step'=>'0.001','placeholder' => 'Galonaje']) }}
            {!! $errors->first('galonaje', '<div class="invalid-feedback">:message</p>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::number('precio', $valescombustible->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''),'id'=>'cantprecio','step'=>'0.001','placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total* (Ingresar como maximo 2 decimales)') }}
            {{ Form::number('total', $valescombustible->total, ['class' => 'form-control' . ($errors->has('total') ? ' is-invalid' : ''),'id'=>'resultprecio','step'=>'0.01','min'=>'0','value'=>'0','pattern'=>'^\d+(?:\.\d{1,2})?$','placeholder' => '0.00']) }}
            {!! $errors->first('total', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>

@section('page_js')
<script>

const input_cant_galonaje = document.getElementById('cantgalonaje'),
input_cant_precio = document.getElementById('cantprecio'),
input_result_precio = document.getElementById('resultprecio');


input_cant_galonaje.addEventListener('input', () => {
    if (input_cant_galonaje.value == "" || input_cant_precio.value == "") {
      input_result_precio.value = 0;
    }else{
      input_result_precio.value = input_cant_galonaje.value * input_cant_precio.value;
    }
  })
  input_cant_precio.addEventListener('input', () => {
    if (input_cant_galonaje.value == "" || input_cant_precio.value == "") {
      input_result_precio.value = 0;
    }else{
      input_result_precio.value = input_cant_galonaje.value * input_cant_precio.value;
    }
  })    

</script>

<script src='path/to/decimal.js-light'></script>

@endsection

@push('scripts')


@endpush