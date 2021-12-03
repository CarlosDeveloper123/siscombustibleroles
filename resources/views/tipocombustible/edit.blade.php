@extends('layouts.app')

@section('template_title')
    Update Tipocombustible
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Editar tipo de combustible</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('tipocombustibles.update', $tipocombustible->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('tipocombustible.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
