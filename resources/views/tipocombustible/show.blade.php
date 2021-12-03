@extends('layouts.app')

@section('template_title')
    {{ $tipocombustible->name ?? 'Show Tipocombustible' }}
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
                            <a class="btn btn-primary" href="{{ route('tipocombustibles.index') }}"> Regresar</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Tipo de combustible:</strong>
                            {{ $tipocombustible->nombretipocombustible }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
