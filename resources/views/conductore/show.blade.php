@extends('layouts.app')

@section('template_title')
    {{ $conductore->name ?? 'Show Conductore' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title"></span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('conductores.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $conductore->nombreconductor }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $conductore->apellidoconductor }}
                        </div>
                        <div class="form-group">
                            <strong>Dni:</strong>
                            {{ $conductore->dniconductor }}
                        </div>
                        <div class="form-group">
                            <strong>Licencia:</strong>
                            {{ $conductore->licenciaconductor }}
                        </div>
                        <div class="form-group">
                            <strong>Categoria:</strong>
                            {{ $conductore->categoriaconductor }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $conductore->telefonoconductor }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $conductore->direccionconductor }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $conductore->emailconductor }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $conductore->estadoconductor }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
