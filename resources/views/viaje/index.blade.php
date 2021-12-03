@extends('layouts.app')

@section('template_title')
    Viaje
@endsection

@section('page_css')
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Viajes</h3>
        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <!--span id="card_title">
                                {{ __('Viaje') }}
                            </span-->

                             <div class="float-right">
                                 @can('crear-viaje')
                                <a href="{{ route('viajes.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                                @endcan
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="viajes" class="table table-striped table-hover">
                                <thead class="thead" style="background-color:#6777ef">
                                    <tr>
                                        <th style="display: none; color:#fff;">No</th>
                                        
										<th style="color:#fff;">SALIDA</th>
										<th style="color:#fff;">DESTINO</th>
										<!--th>DESTINO</th-->
										<th style="color:#fff;">CANT. VIAJE</th>
										<th style="color:#fff;">PLACA</th>
										<th style="color:#fff;">CONDUCTOR</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($viajes as $viaje)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $viaje->lugarsalida }}</td>
											<!--td>{{ $viaje->lugardestino }}</td-->
											<td>{{ $viaje->planta-> nombreplanta }}</td>
											<td>{{ $viaje->cantidadviaje }}</td>
											<td>{{ $viaje->vehiculo-> placavehiculo}}</td>
											<td>{{ $viaje->conductore->nombreconductor }}</td>

                                            <td>
                                                <form action="{{ route('viajes.destroy',$viaje->id) }}" method="POST">
                                                    @can('ver-viaje')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('viajes.show',$viaje->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    @endcan
                                                    @can('editar-viaje')
                                                    <a class="btn btn-sm btn-success" href="{{ route('viajes.edit',$viaje->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-viaje')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                    @endcan
                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $viajes->links() !!}
            </div>
        </div>
    </div>
@endsection

@section('page_js')

<!--script src ="https://code.jquery.com/jquery-3.5.1.js"></script-->
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap4.min.js"></script>

<script>

$(document).ready(function() {
    $('#viajes').DataTable({
        "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]],
        responsive: true,
        autoWidth: false,
       
        "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "Nada encontrado - lo siento",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(filtrado de _MAX_ registros totales)",
            'search':'Buscar:',
            'paginate':{
                'next':'Siguiente',
                'previous':'Anterior'
            }
        }
    });
} );
</script>
@endsection