@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')

        <div class="container">
            <div class="table-registro row justify-content-center">
                <div class="col-lg-11 mt-4 text-center">

                    <h1 class="titulo-informe mb-4">Registro de usuarios:</h1>

                    <div class="card registros">
                        <div class="card-body ">
                            <table id="registros" class="table table-striped table-bordered border-dark table-light text-center">
                        
                        
                                <thead>
                                    <tr>
                                        <th>USUARIO</th>
                                        <th>FECHA</th>
                                        <th>ENTRADA</th>
                                        <th>COMIDA</th>
                                        <th>REGRESO</th>
                                        <th>SALIDA</th>
                                        <th>VACACIONES</th>
                                        <th>FINALIZA VACACIONES</th>
                                        <th>ENFERMEDAD</th>
                                    </tr>
                                </thead>
        
                                <tbody>
                                    
                                @foreach ($consultas as $consulta)
                                <tr>
                                    <td>{{$consulta->name}}</td>
                                    <td>{{$consulta->fecha}}</td>
                                    <td>{{$consulta->entrada}}</td>
                                    <td>{{$consulta->comida}}</td>
                                    <td>{{$consulta->comida_regreso}}</td>
                                    <td>{{$consulta->salida}}</td>
                                    <td>{{$consulta->vacaciones}}</td>
                                    <td>{{$consulta->fin_vacaciones}}</td>
                                    <td>{{$consulta->enfermedad}}</td>
                                </tr>   
                                @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
@endsection