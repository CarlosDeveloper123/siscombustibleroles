@extends('layouts.app')

@section('template_title')
    Valescombustible
@endsection

@section('page_css')
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet">
@endsection


@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Control Combustible</h3>
        </div>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <!--span id="card_title">
                                {{ __('Valescombustible') }}
                            </span-->
                            
                             <div class="float-right">
                             @can('crear-combustible')
                                <a href="{{ route('valescombustibles.create') }}" class="btn btn-primary btn-sm"  data-placement="left">
                                  {{ __('Crear nuevo') }}
                                </a>
                            @endcan
                                </div>
                           
&nbsp;
                            <div>
                                <a href="{{ route('valescombustibles.pdf') }}" class="btn btn-primary btn-sm fas fa-file-pdf"   data-placement="left">
                                  {{ __('PDF') }}
                                </a>

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
                            <table id="valescombustibles" class="table table-striped table-hover">
                                <thead class="thead" style="background-color:#6777ef">
                                    <tr>
                                        <th style="display: none; color:#fff;">No</th>
                                        
										<th style="color:#fff;">CODIGO</th>
										<th style="color:#fff;">PLACA</th>
										<th style="color:#fff;">CONDUCTOR</th>
										<th style="color:#fff;">GRIFO</th>
										<th style="color:#fff;">FECHA</th>
										<th style="color:#fff;">KM</th>
										<th style="color:#fff;">GL</th>
										<th style="color:#fff;">PRECIO</th>
										<th style="color:#fff;">TOTAL</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($valescombustibles as $valescombustible)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $valescombustible->numerovale }}</td>
											<td>{{ $valescombustible->vehiculo->placavehiculo }}</td>
											<td>{{ $valescombustible->conductore->nombreconductor }}</td>
											<td>{{ $valescombustible->grifo->direcciongrifo }}</td>
											<td>{{ $valescombustible->fecha }}</td>
											<td>{{ $valescombustible->kilometraje }}</td>
											<td>{{ $valescombustible->galonaje }}</td>
											<td>{{ $valescombustible->precio }}</td>
											<td>{{ $valescombustible->total }}</td>

                                            <td>
                                                <form action="{{ route('valescombustibles.destroy',$valescombustible->id) }}" method="POST">
                                                    @can('ver-combustible')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('valescombustibles.show',$valescombustible->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    @endcan
                                                    @can('editar-combustible')
                                                    <a class="btn btn-sm btn-success" href="{{ route('valescombustibles.edit',$valescombustible->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-combustible')
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
                {!! $valescombustibles->links() !!}
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
    $('#valescombustibles').DataTable({
        "lengthMenu":[[10,15,50,-1],[10,15,50,"All"]],
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