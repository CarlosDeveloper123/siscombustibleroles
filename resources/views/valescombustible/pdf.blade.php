<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte</title>

    <link href="{{ public_path('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css"-->
    <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"-->
    <!--link rel="stylesheet" href="{{ public_path('css/app.css')}}" type="text/css"/-->
<body>

<div>
    
<table class="table table-bordered" style="text-align: right;">
    <tbody>
        <tr>
        <dl> 
           <i> Negociaciones Vimer E.I.R.L</i> <br>
           <i> Fecha: {{ date('d-m-Y') }}</i><br> 
           <i> Hora : {{ date("H:i:s a")}}</i><br>
        </dl>
</tr>                
</tbody>
</table>
</div>    
<hr style="width:75%;">
<h5 style="text-align: center;">LISTA DE CONSUMOS</h5> <br>

<table id="valescombustibles" class=" table is-striped is-hoverable" style="text-align: center;">
                                <thead class="thead">
                                    <tr>
                                        <th class="table-success"></th>
                                         
										<th class="table-success">Nº</th>
										<th class="table-success">Placa</th>
										<th class="table-success">Conductor</th>
										<th class="table-success">Grifo</th>
										<th class="table-success">Fecha</th>
										<th class="table-success">Km</th>
										<th class="table-success">Gl</th>
										<th class="table-success">Precio</th>
										<th class="table-success">Total</th>

                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($valescombustibles as $valescombustible)
                                        <tr>
                                            <td></td>
                                            
											<td>{{ $valescombustible->numerovale }}</td>
											<td>{{ $valescombustible->vehiculo->placavehiculo }}</td>
											<td>{{ $valescombustible->conductore->nombreconductor }}</td>
											<td>{{ $valescombustible->grifo->direcciongrifo }}</td>
											<td>{{ $valescombustible->fecha}}</td>
											<td>{{ $valescombustible->kilometraje }}</td>
											<td>{{ $valescombustible->galonaje }}</td>
											<td>{{ $valescombustible->precio }}</td>
											<td>{{ $valescombustible->total }}</td>

                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            </div>
                            
                           

</body>
</html>




