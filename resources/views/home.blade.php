@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Sistema de control de combustible</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                          
                                <div class="row">
                                    <div class="col-md-4 col-xl-4">
                                    
                                    <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                            <h5>Usuarios</h5>                                               
                                                @php
                                                 use App\Models\User;
                                                $cant_usuarios = User::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/usuarios" class="text-white">Ver más</a></p>
                                            </div>                                            
                                        </div>                                    
                                    </div>
                                    
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Roles</h5>                                               
                                                @php
                                                use Spatie\Permission\Models\Role;
                                                 $cant_roles = Role::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/roles" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>                                                                
                                    
                                    <!--div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Blogs</h5>                                               
                                                @php
                                                 use App\Models\Blog;
                                                $cant_blogs = Blog::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-blog f-left"></i><span>{{$cant_blogs}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/blogs" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div-->

                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-red order-card">
                                            <div class="card-block">
                                                <h5>Registros Consumo</h5>                                               
                                                @php
                                                 use App\Models\Valescombustible;
                                                $cant_vales = Valescombustible::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-book f-left"></i><span>{{$cant_vales}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="/valescombustibles" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <form action="POST" action="/home" id="form1">
        @csrf 
        <input type="hidden" name="id" value="1">
        <input type="hidden" name="">
    </form>

    

   




    <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                          
                                <div class="row">

                                    <div class="row col-md-6 col-xl-6">
                                        <canvas id="myChart" width="400" height="400"></canvas>
                                    </div><br><br>


                                    <table id="" class="table table-striped table-hover col-md-6 col-xl-6">
                                                <thead class="thead" style="background-color:#6777ef">
                                                <tr>
                                                    <th style="color:#fff;">Id</th>
                                                    
                                                    <th style="color:#fff;">GALONAJE</th>
                                                    <!--th style="color:#fff;">kilometraje</th-->
                                                    <th style="color:#fff;">FECHA</th>
                                                    <!--th style="color:#fff;">placa</th-->
                                                    <th>&nbsp;</th>                                  
                                                </tr>
                                                </thead>
                                                <tbody id="tbody">     
                                       
                                                </tbody>
                                    </table>
                                    

                                </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                          
                                <div class="row">

                                <div class="row col-md-6 col-xl-6">
                                        <canvas id="myChart2" width="400" height="400"></canvas>
                                    </div><br><br>
                      
                                </div>
                    </div>
                </div>
            </div>
        </div-->


@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js"></script>

<script>

var fecha=[];
var galonaje=[];

$(document).ready(function(){
    $.ajax({
        url: '/home',
        method: 'POST',
        data:{
            id:1,
            _token:$('input[name="_token"]').val()
        }
    }).done(function(res){
        var arreglo = JSON.parse(res);
        console.log(arreglo);

        for(var x=0; x<arreglo.length;x++){
            var todo='<tr><td>'+arreglo[x].id+'</td>';
            todo+='<td>'+arreglo[x].galonaje+'</td>';
            
            todo+='<td>'+arreglo[x].fecha+'</td>';
            
            todo+='<td></td></tr>';
            $('tbody').append(todo);
            fecha.push(arreglo[x].fecha);
            galonaje.push(arreglo[x].galonaje);
        }
        generarGrafica(),
        compareRadialChart();
    });

    
});
   

   function generarGrafica(){
       const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: fecha,
        datasets: [{
            label: 'Ultimos consumos',
            data: galonaje,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

   }




</script>


@endsection