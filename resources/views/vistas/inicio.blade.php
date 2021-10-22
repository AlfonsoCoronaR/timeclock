@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')
        
        <table class="table table-striped table-bordered border-dark table-info">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>ENTRADA</th>
                    <th>COMIDA</th>
                    <th>REGRESO DE LA COMIDA</th>
                    <th>SALIDA</th>
                    <th>VACACIONES</th>
                    <th>ENFERMEDAD</th>
                    <th>USUARIO</th>
                    <th>FECHA DE REGISTRO</th>
                </tr>
            </thead>

            {{-- <tbody>
                @foreach ($registros as $registro)
                    <tr>
                        <td>{{$registro->id}}</td>
                        <td>{{$registro->entrada}}</td>
                        <td>{{$registro->comida}}</td>
                        <td>{{$registro->comida_regreso}}</td>
                        <td>{{$registro->salida}}</td>
                        <td>{{$registro->vacaciones}}</td>
                        <td>{{$registro->enfermedad}}</td>
                        <td>{{$registro->id_usuario}}</td>
                        <td>{{$registro->created_at->diffForHummands()}}</td>
                    </tr>
                @endforeach
            </tbody> --}}
        </table>
    @endsection
@endsection