@extends('layouts.app')

@section('template_title')
    {{ $valescombustible->name ?? 'Show Valescombustible' }}
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
                            <a class="btn btn-primary" href="{{ route('valescombustibles.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Numerovale:</strong>
                            {{ $valescombustible->numerovale }}
                        </div>
                        <div class="form-group">
                            <strong>Idvehiculos:</strong>
                            {{ $valescombustible->vehiculo->placavehiculo }}
                        </div>
                        <div class="form-group">
                            <strong>Idconductores:</strong>
                            {{ $valescombustible->conductore->nombreconductor }}
                        </div>
                        <div class="form-group">
                            <strong>Idgrifos:</strong>
                            {{ $valescombustible->grifo->direcciongrifo }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha:</strong>
                            {{ $valescombustible->fecha }}
                        </div>
                        <div class="form-group">
                            <strong>Kilometraje:</strong>
                            {{ $valescombustible->kilometraje }}
                        </div>
                        <div class="form-group">
                            <strong>Galonaje:</strong>
                            {{ $valescombustible->galonaje }}
                        </div>
                        <div class="form-group">
                            <strong>Precio:</strong>
                            {{ $valescombustible->precio }}
                        </div>
                        <div class="form-group">
                            <strong>Total:</strong>
                            {{ $valescombustible->total }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
