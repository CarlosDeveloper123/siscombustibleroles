@extends('layouts.app')

@section('template_title')
    {{ $grifo->name ?? 'Show Grifo' }}
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
                            <a class="btn btn-primary" href="{{ route('grifos.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Razon:</strong>
                            {{ $grifo->razongrifo }}
                        </div>
                        <div class="form-group">
                            <strong>Ruc:</strong>
                            {{ $grifo->rucgrifo }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion:</strong>
                            {{ $grifo->direcciongrifo }}
                        </div>
                        <div class="form-group">
                            <strong>Telefono:</strong>
                            {{ $grifo->telefonogrifo }}
                        </div>
                        <div class="form-group">
                            <strong>Estado:</strong>
                            {{ $grifo->estadogrifo }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
