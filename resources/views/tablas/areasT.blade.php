@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')
        

        <div class="container">
            <div class="row justify-content-end">
                <div class="button mt-4 col-lg-2 col-sm-4">
                    <a class="fondo-boton btn btn-info" href="areas/create">
                        <img src="{{url('img/flecha.png')}}" alt="flecha.png" style="height: 25px">
                        Crear área
                    </a>
                </div>
            </div>
            <div class="table-area row justify-content-center">
                <div class="col-lg-6 mt-4 text-center">

                    <h1 class="titulo-informe mb-4">Registro de áreas:</h1>

                    <table class="table table-striped table-bordered border-white table-dark text-center">
 
                        <thead>
                            <tr>
                                <th>ÁREA</th>
                                <th>REGISTRO</th>
                                <th>EDITAR</th>
                                <th>ELIMINAR</th>
                            </tr>
                        </thead>
            
                        <tbody>
                            
                        @foreach ($areas as $area)
                        <tr>
                            <td>{{$area->area}}</td>
                            <td>{{$area->created_at}}</td>

                            <td><a href="/timeclock/public/areas/{{$area->id}}/edit" class="btn btn-warning btn-sm">Editar</a></td>
                            <td>
                                <form action="/timeclock/public/eliminar_area/{{$area->id}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
            
                        @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    @endsection
@endsection