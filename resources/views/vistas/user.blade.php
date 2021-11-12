@extends('../plantilla')
@section('contenido')
    @extends('../extras/user_sidebar')
    @section('registro')

    <div class="container">
        <div class="table-user row justify-content-center">
            <div class="col-lg-11 mt-4 text-center">

                <h1 class="titulo-informe mb-4">Informe de tus registros, {{$user}}:</h1>

                <table class="table table-striped table-bordered border-white table-dark text-center">

                    <thead>
                        <tr>
                            <th>FECHA</th>
                            <th>ENTRADA</th>
                            <th>ALIMENTOS</th>
                            <th>REGRESO</th>
                            <th>SALIDA</th>
                            <th>VACACIONES</th>
                            <th>FIN VACACIONES</th>
                            <th>ENFERMEDAD</th>
                        </tr>
                    </thead>
        
                    <tbody>

                    <tr>
                        <td></td>
                        <td class="align-middle">
                            <form method="POST" action="{{url('/usuario_entrada')}}" name="miformulario">
                                @csrf
                                
                                <input type="hidden" id="entrada">
                                <button type="submit" class="btn btn-outline-warning btn-lg" data-bs-toggle="tooltip" data-bs-placement="top" title="ENTRADA" onclick="return confirmEntrada()"><i class="fas fa-door-open"></i></button>
                            </form>
                        </td>
                        <td class="align-middle">
                            <form method="POST" action="{{url('/usuario_comida')}}">
                                @csrf
                                <input type="hidden" id="comida">
                                <button type="submit" class="btn btn-outline-warning btn-lg" data-bs-toggle="tooltip" data-bs-placement="top" title="ALIMENTOS" onclick="return confirmAlimentos()"><i class="fas fa-utensils"></i></button>
                            </form>
                        </td>
                        <td class="align-middle">
                            <form method="POST" action="{{url('/usuario_regreso')}}">
                                @csrf
                                <input type="hidden" id="regreso">
                                <button type="submit" class="btn btn-outline-warning btn-lg" data-bs-toggle="tooltip" data-bs-placement="top" title="REGRESO" onclick="return confirmRegreso()"><i class="fas fa-undo-alt"></i></button>
                            </form>
                        </td>
                        <td class="align-middle">
                            <form method="POST" action="{{url('/usuario_salida')}}">
                                @csrf
                                <input type="hidden" id="salida">
                                <button type="submit" class="btn btn-outline-warning btn-lg" data-bs-toggle="tooltip" data-bs-placement="top" title="SALIDA" onclick="return confirmSalida()"><i class="fas fa-door-closed"></i></button>
                            </form>
                        </td>
                        <td class="align-middle">
                            <form method="POST" action="{{url('/usuario_vacaciones')}}">
                                @csrf
                                <input type="hidden" id="vacaciones">
                                <button type="submit" class="btn btn-outline-warning btn-lg" data-bs-toggle="tooltip" data-bs-placement="top" title="VACACIONES" onclick="return confirmVacaciones()"><i class="fas fa-plane-departure"></i></button>
                            </form>
                        </td>
                        <td class="align-middle">
                            <form method="POST" action="{{url('/usuario_finvacaciones')}}">
                                @csrf
                                <input type="hidden" id="finvacaciones">
                                <button type="submit" class="btn btn-outline-warning btn-lg" data-bs-toggle="tooltip" data-bs-placement="top" title="FIN VACACIONES" onclick="return confirmFinVacaciones()"><i class="fas fa-plane-arrival"></i></button>
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{url('/usuario_enfermedad')}}">
                                @csrf
                                <div class="mb-2">
                                    <input name="fecha" type="date" id="enfermedad">
                                </div>
                                <button type="submit" class="btn btn-outline-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="ESTABLECER FECHA" onclick="return confirmEnfermedad()"><i class="far fa-calendar-check"></i></button>
                            </form>
                        </td>
                    </tr>

                    @foreach ($registros as $registro)
                    <tr>
                        <td>{{$registro->fecha}}</td>
                        <td>{{$registro->entrada}}</td>
                        <td>{{$registro->comida}}</td>
                        <td>{{$registro->comida_regreso}}</td>
                        <td>{{$registro->salida}}</td>
                        <td>{{$registro->vacaciones}}</td>
                        <td>{{$registro->fin_vacaciones}}</td>
                        <td>{{$registro->enfermedad}}</td>
                    </tr>
                    @endforeach
                    
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script type="text/javascript">

    function confirmEntrada(){

        let respuesta = confirm("¿Estas seguro que deseas registrar tu ENTRADA?");

        if (respuesta == true){
            return true;
        } else{
            return false;
        }
    }

    function confirmAlimentos(){

        let respuesta = confirm("¿Estas seguro que deseas registrar tu hora de ALIMENTOS?");

        if (respuesta == true){
            return true;
        } else{
            return false;
        }
    }

    function confirmRegreso(){

        let respuesta = confirm("¿Estas seguro que deseas registrar tu REGRESO de alimentos?");

        if (respuesta == true){
            return true;
        } else{
            return false;
        }
    }

    function confirmSalida(){

        let respuesta = confirm("¿Estas seguro que deseas registrar tu SALIDA?");

        if (respuesta == true){
            return true;
        } else{
            return false;
        }
    }

    function confirmVacaciones(){

        let respuesta = confirm("¿Estas seguro que deseas registrar tus VACACIONES?");

        if (respuesta == true){
            return true;
        } else{
            return false;
        }
    }

    function confirmFinVacaciones(){

        let respuesta = confirm("¿Estas seguro que deseas registrar la FINALIZACIÓN DE TUS VACACIONES?");

        if (respuesta == true){
            return true;
        } else{
            return false;
        }
    }

    function confirmEnfermedad(){

        let respuesta = confirm("¿Estas seguro que deseas registrar tu falta por ENFERMEDAD?");

        if (respuesta == true){
            return true;
        } else{
            return false;
        }
    }

    </script>
    
    @endsection
@endsection