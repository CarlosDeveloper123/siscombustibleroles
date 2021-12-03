@extends('layouts.app')

@section('template_title')
    {{ $viaje->name ?? 'Show Viaje' }}
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
                            <a class="btn btn-primary" href="{{ route('viajes.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Salida:</strong>
                            {{ $viaje->lugarsalida }}
                        </div>
                        <div class="form-group">
                            <strong>Destino:</strong>
                            {{ $viaje->lugardestino }}
                        </div>
                        <div class="form-group">
                            <strong>Planta:</strong>
                            {{ $viaje->planta-> nombreplanta  }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $viaje->cantidadviaje }}
                        </div>
                        <div class="form-group">
                            <strong>Placa:</strong>
                            {{ $viaje->vehiculo-> placavehiculo}}
                        </div>
                        <div class="form-group">
                            <strong>Conductor:</strong>
                            {{ $viaje->conductore->nombreconductor  }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
