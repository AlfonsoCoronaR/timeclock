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
                            <td>{{$user->name}}</td>
                            <td>{{$user->usuario}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->grupo}}</td>
                            <td>{{$user->created_at}}</td>

                            <td><a href="/timeclock/public/usuarios/{{$user->id}}/edit" class="btn btn-warning btn-sm">Editar</a></td>
                            <td><form action="/timeclock/public/eliminar_usuario/{{$user->id}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirmDelete()">Eliminar</button>
                            </form></td>
                        </tr>
            
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <script type="text/javascript">

            function confirmDelete(){
        
                let respuesta = confirm("¿Estas seguro que deseas ELIMINAR al usuario?");
        
                if (respuesta == true){
                    return true;
                } else{
                    return false;
                }
            }

        </script>

    @endsection
@endsection