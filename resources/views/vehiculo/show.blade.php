@extends('layouts.app')

@section('template_title')
    {{ $vehiculo->name ?? 'Show Vehiculo' }}
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
                            <a class="btn btn-primary" href="{{ route('vehiculos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $vehiculo->placavehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo:</strong>
                            {{ $vehiculo->tipovehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Año:</strong>
                            {{ $vehiculo->añovehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Marca:</strong>
                            {{ $vehiculo->marcavehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Empresa:</strong>
                            {{ $vehiculo->empresavehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $vehiculo->estadovechiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Tipo de combustible:</strong>
                            {{ $vehiculo->tipocombustible->nombretipocombustible }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
