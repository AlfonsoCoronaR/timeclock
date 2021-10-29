@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')
        

        <div class="container">
            <div class="row justify-content-end">
                <div class="button mt-4 col-lg-2 col-sm-4">
                    <a class="btn btn-primary" href="areas/create">
                        Crear área
                    </a>
                </div>
            </div>
            <div class="table-area row justify-content-center">
                <div class="col-lg-6 mt-4 text-center">

                    <h1 class="mb-4">Registro de áreas:</h1>

                    <table class="table table-striped table-bordered border-dark table-danger text-center">
 
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>ÁREA</th>
                                <th>REGISTRO</th>
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
            
                        <tbody>
                            <tr>
            
                        @foreach ($areas as $area)
                            
                            <td>{{$area->id}}</td>
                            <td>{{$area->area}}</td>
                            <td>{{$area->created_at}}</td>
            
                        @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection
@endsection