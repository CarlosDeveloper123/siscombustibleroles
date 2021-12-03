<div class="box box-info padding-1">
    <div class="box-body">
    

        <div class="form-group">
            {{ Form::label('Nombre') }}
            {{ Form::text('nombreconductor', $conductore->nombreconductor, ['class' => 'form-control' . ($errors->has('nombreconductor') ? ' is-invalid' : ''), 'placeholder' => 'Nombreconductor']) }}
            {!! $errors->first('nombreconductor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    

    
        <div class="form-group">
            {{ Form::label('Apellido') }}
            {{ Form::text('apellidoconductor', $conductore->apellidoconductor, ['class' => 'form-control' . ($errors->has('apellidoconductor') ? ' is-invalid' : ''), 'placeholder' => 'Apellidoconductor']) }}
            {!! $errors->first('apellidoconductor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        

    
        <div class="form-group">
            {{ Form::label('DNI') }}
            {{ Form::number('dniconductor', $conductore->dniconductor, ['class' => 'form-control' . ($errors->has('dniconductor') ? ' is-invalid' : ''), 'placeholder' => 'Dniconductor']) }}
            {!! $errors->first('dniconductor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    
    
    
        <div class="form-group">
            {{ Form::label('Licencia') }}
            {{ Form::text('licenciaconductor', $conductore->licenciaconductor, ['class' => 'form-control' . ($errors->has('licenciaconductor') ? ' is-invalid' : ''), 'placeholder' => 'Licenciaconductor']) }}
            {!! $errors->first('licenciaconductor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    
    
        <div class="form-group">
            {{ Form::label('Categoria') }}
            {{ Form::text('categoriaconductor', $conductore->categoriaconductor, ['class' => 'form-control' . ($errors->has('categoriaconductor') ? ' is-invalid' : ''), 'placeholder' => 'Categoriaconductor']) }}
            {!! $errors->first('categoriaconductor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
      

    
        <div class="form-group">
            {{ Form::label('Telefono') }}
            {{ Form::number('telefonoconductor', $conductore->telefonoconductor, ['class' => 'form-control' . ($errors->has('telefonoconductor') ? ' is-invalid' : ''), 'placeholder' => 'Telefonoconductor']) }}
            {!! $errors->first('telefonoconductor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
     

    
        <div class="form-group">
            {{ Form::label('Direccion') }}
            {{ Form::text('direccionconductor', $conductore->direccionconductor, ['class' => 'form-control' . ($errors->has('direccionconductor') ? ' is-invalid' : ''), 'placeholder' => 'Direccionconductor']) }}
            {!! $errors->first('direccionconductor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    

    
        <div class="form-group">
            {{ Form::label('Email') }}
            {{ Form::text('emailconductor', $conductore->emailconductor, ['class' => 'form-control' . ($errors->has('emailconductor') ? ' is-invalid' : ''), 'placeholder' => 'Emailconductor']) }}
            {!! $errors->first('emailconductor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    
        
   
        <div class="form-group">
            {{ Form::label('Estado') }}
            {{ Form::text('estadoconductor', $conductore->estadoconductor, ['class' => 'form-control' . ($errors->has('estadoconductor') ? ' is-invalid' : ''), 'placeholder' => 'Estadoconductor']) }}
            {!! $errors->first('estadoconductor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    


    <div class="col-lg-4 col-sm-4 col-md-4 col-sx-12">
        <button type="submit" class="btn btn-primary">Guardar</button>
    </div>
</div>