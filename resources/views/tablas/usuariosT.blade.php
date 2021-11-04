@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')

        <div class="container">
            <div class="table-user row justify-content-center">
                <div class="col-lg-10 mt-4 text-center">

                    <h1 class="titulo-informe mb-4">Registro de usuarios:</h1>

                    <table class="table table-striped table-bordered border-white table-dark text-center">
 
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>USUARIO</th>
                                <th>CORREO ELECTRÓNICO</th>
                                <th>GRUPO</th>
                                <th>REGISTRO</th>
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
            
                        <tbody>
                            
                        @foreach ($usuarios as $user)
                        <tr>
                            
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->usuario}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->id_grupo}}</td>
                            <td>{{$user->created_at}}</td>

                            <td><button type="button" class="btn btn-warning btn-sm">Editar</button></td>
                            <td><button type="button" class="btn btn-danger btn-sm">Eliminar</button></td>
                        </tr>
            
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection
@endsection