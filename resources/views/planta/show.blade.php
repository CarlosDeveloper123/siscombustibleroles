@extends('layouts.app')

@section('template_title')
    {{ $planta->name ?? 'Show Planta' }}
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
                            <a class="btn btn-primary" href="{{ route('plantas.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Planta:</strong>
                            {{ $planta->nombreplanta }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $planta->direccionplanta }}
                        </div>
                        <div class="form-group">
                            <strong>Distancia:</strong>
                            {{ $planta->distanciaplanta }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $planta->telefonoplanta }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $planta->estadoplanta }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
