<div class="box box-info padding-1">
    <div class="box-body">
 
   

        <div class="form-group">
            {{ Form::label('Razón') }}
            {{ Form::text('razongrifo', $grifo->razongrifo, ['class' => 'form-control' . ($errors->has('razongrifo') ? ' is-invalid' : ''), 'placeholder' => 'Razongrifo']) }}
            {!! $errors->first('razongrifo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    

    
        <div class="form-group">
            {{ Form::label('Ruc') }}
            {{ Form::text('rucgrifo', $grifo->rucgrifo, ['class' => 'form-control' . ($errors->has('rucgrifo') ? ' is-invalid' : ''), 'placeholder' => 'Rucgrifo']) }}
            {!! $errors->first('rucgrifo', '<div class="invalid-feedback ">:message</p>') !!}
        </div>
    

 
        <div class="form-group">
            {{ Form::label('Dirección') }}
            {{ Form::text('direcciongrifo', $grifo->direcciongrifo, ['class' => 'form-control' . ($errors->has('direcciongrifo') ? ' is-invalid' : ''), 'placeholder' => 'Direcciongrifo']) }}
            {!! $errors->first('direcciongrifo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    
    

    
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::text('telefonogrifo', $grifo->telefonogrifo, ['class' => 'form-control' . ($errors->has('telefonogrifo') ? ' is-invalid' : ''), 'placeholder' => 'Telefonogrifo']) }}
            {!! $errors->first('telefonogrifo', '<div class="invalid-feedback">:message</p>') !!}
        </div>
  

   
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('estadogrifo', $grifo->estadogrifo, ['class' => 'form-control' . ($errors->has('estadogrifo') ? ' is-invalid' : ''), 'placeholder' => 'Estadogrifo']) }}
            {!! $errors->first('estadogrifo', '<div class="invalid-feedback ">:message</p>') !!}
        </div>
    

    
    
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>