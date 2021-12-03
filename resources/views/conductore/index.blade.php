@extends('layouts.app')

@section('template_title')
    Conductores
@endsection

@section('page_css')
<link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')

<section class="section">
        <div class="section-header">
            <h3 class="page__heading">Conductores</h3>
        </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <!--span id="card_title">
                                {{ __('Conductore') }}
                            </span-->

                             <div class="float-right">
                                 @can('crear-conductor')
                                <a href="{{ route('conductores.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                            <table id="conductores" class="table table-striped table-hover shadow-lg mt-4"style="width:100%">
                                <thead class="" style="background-color:#6777ef">
                                    <tr>
                                        <th style="display: none; color:#fff;">No</th>
                                        
										<th style="color:#fff;">NOMBRE</th>
										<th style="color:#fff;">APELLIDO</th>
										<th style="color:#fff;">DNI</th>
										<th style="color:#fff;">LICENCIA</th>
										<th style="color:#fff;">CATEGORIA</th>
										<!--th>TELEF.</th>
										<th>DIREC.</th>
										<th>EMAIL</th-->
										<th style="color:#fff;">ESTADO</th>
                                        

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($conductores as $conductore)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $conductore->nombreconductor }}</td>
											<td>{{ $conductore->apellidoconductor }}</td>
											<td>{{ $conductore->dniconductor }}</td>
											<td>{{ $conductore->licenciaconductor }}</td>
											<td>{{ $conductore->categoriaconductor }}</td>
											<!--td>{{ $conductore->telefonoconductor }}</td>
											<td>{{ $conductore->direccionconductor }}</td>
											<td>{{ $conductore->emailconductor }}</td-->
											<td>{{ $conductore->estadoconductor }}</td>
                                            

                                            <td>
                                                <form action="{{ route('conductores.destroy',$conductore->id) }}" method="POST">
                                                    @can('ver-conductor')
                                                    <a class="btn btn-sm btn-primary " href="{{ route('conductores.show',$conductore->id) }}"><i class="fa fa-fw fa-eye"></i> Ver</a>
                                                    @endcan
                                                    @can('editar-conductor')
                                                    <a class="btn btn-sm btn-success" href="{{ route('conductores.edit',$conductore->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @endcan
                                                    @csrf

                                                    @method('DELETE')
                                                    @can('borrar-conductor')
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
                {!! $conductores->links() !!}
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
    $('#conductores').DataTable({
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