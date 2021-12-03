@extends('layouts.app')

@section('template_title')
    Grifo
@endsection

@section('page_css')
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Grifos</h3>
        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <!--span id="card_title">
                                {{ __('Grifo') }}
                            </span-->

                             <div class="float-right">
                                 @can('crear-grifo')
                                <a href="{{ route('grifos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table id="grifos" class="table table-striped table-hover">
                                <thead class="thead" style="background-color:#6777ef">
                                    <tr>
                                        <th style="display: none; color:#fff;">No</th>
                                        
										<th style="color:#fff;">RAZÓN</th>
										<th style="color:#fff;">RUC</th>
										<th style="color:#fff;">DIRECCIÓN</th>
										<th style="color:#fff;">TELEFONO</th>
										<th style="color:#fff;">ESTADO</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($grifos as $grifo)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $grifo->razongrifo }}</td>
											<td>{{ $grifo->rucgrifo }}</td>
											<td>{{ $grifo->direcciongrifo }}</td>
											<td>{{ $grifo->telefonogrifo }}</td>
											<td>{{ $grifo->estadogrifo }}</td>

                                            <td>
                                                <form action="{{ route('grifos.destroy',$grifo->id) }}" method="POST">
                                                    @can('ver-grifo')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('grifos.show',$grifo->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    @endcan
                                                    @can('editar-grifo')
                                                    <a class="btn btn-sm btn-success" href="{{ route('grifos.edit',$grifo->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('borrar-grifo')
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
                {!! $grifos->links() !!}
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
    $('#grifos').DataTable({
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