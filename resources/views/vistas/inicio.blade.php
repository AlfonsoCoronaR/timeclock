@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')
        
        <table class="table table-striped table-bordered border-dark table-info">
            <h1>Registro de usuarios</h1>
            
            <thead>
                <tr>
                    <th>NOMBRE</th>
                    <th>ENTRADA</th>
                    <th>COMIDA</th>
                    <th>REGRESO DE LA COMIDA</th>
                    <th>SALIDA</th>
                    <th>VACACIONES</th>
                    <th>ENFERMEDAD</th>
                </tr>
            </thead>

            <tbody>
                <tr>
            @foreach ($usuarios as $user)

                        <td>{{$user->name}}</td>
                    
            @endforeach
            @foreach ($registros as $registro)
                    
                        <td>{{$registro->entrada}}</td>
                        <td>{{$registro->comida}}</td>
                        <td>{{$registro->comida_regreso}}</td>
                        <td>{{$registro->salida}}</td>
                        <td>{{$registro->vacaciones}}</td>
                        <td>{{$registro->enfermedad}}</td>
                    
             @endforeach
                </tr>
            </tbody>
        </table>
    @endsection
@endsection