@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')
        

        <div class="container">
            <div class="row justify-content-end">
                <div class="button mt-4 col-lg-2 col-sm-4">
                    <a class="btn btn-info" href="grupos/create">
                        <img src="{{url('img/flecha.png')}}" alt="flecha.png" style="height: 25px">
                        Crear grupo
                    </a>
                </div>
            </div>
            <div class="table-grupo row justify-content-center">
                <div class="col-lg-6 mt-4 text-center">

                    <h1 class="mb-4">Registro de grupos:</h1>

                    <table class="table table-striped table-bordered border-white table-dark text-center">
 
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>GRUPO</th>
                                <th>ÁREA</th>
                                <th>REGISTRO</th>
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
            
                        <tbody>
                            
                        @foreach ($grupos as $grupo)
                        <tr>
                            
                            <td>{{$grupo->id}}</td>
                            <td>{{$grupo->grupo}}</td>
                            <td>{{$grupo->id_area}}</td>
                            <td>{{$grupo->created_at}}</td>

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