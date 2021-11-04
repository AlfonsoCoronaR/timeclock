@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')
        
        <h1 class="titulo-informe mb-4">Registro de usuarios:</h1>

        <table class="table table-striped table-bordered border-white table-dark">
            
            
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
                <tr>

            @foreach ($usuarios as $user)
            
                <td>{{$user->usuario}}</td>
                    
            @endforeach

            @foreach ($registros as $registro)
                
                <td>{{$registro->fecha}}</td>
                <td>{{$registro->entrada}}</td>
                <td>{{$registro->comida}}</td>
                <td>{{$registro->comida_regreso}}</td>
                <td>{{$registro->salida}}</td>
                <td>{{$registro->vacaciones}}</td>
                <td>{{$registro->fin_vacaciones}}</td>
                <td>{{$registro->enfermedad}}</td>
                    
            @endforeach
                </tr>
            </tbody>
        </table>
    @endsection
@endsection