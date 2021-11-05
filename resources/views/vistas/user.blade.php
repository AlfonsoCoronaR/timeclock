@extends('../plantilla')
@section('contenido')
    @extends('../extras/user_sidebar')
    @section('registro')
    <div class="container">
        <div class="table-user row justify-content-center">
            <div class="col-lg-11 mt-4 text-center">

                <h1 class="titulo-informe mb-4">Informe de tus registros:</h1>

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
                        <td>
                            <form method="POST" action="{{url('/usuario_entrada')}}" name="miformulario">
                                @csrf
                                <input type="hidden" id="entrada">
                                <input type="submit" name="btnEnviar" value="entrar" class="btn btn-primary btn-lg">
                                {{-- <button type="button" class="btn btn-primary btn-lg"><i class="fas fa-door-open"></i></button> --}}
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{url('/usuario_comida')}}">
                                @csrf
                                <input type="hidden" id="comida">
                                <input type="submit" value="comida">
                                {{-- <button type="button" class="btn btn-success btn-lg"><i class="fas fa-utensils"></i></button> --}}
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{url('/usuario_regreso')}}">
                                @csrf
                                <input type="hidden" id="regreso">
                                <input type="submit" value="regreso">
                                {{-- <button type="button" class="btn btn-danger btn-lg"><i class="fas fa-undo-alt"></i></button> --}}
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{url('/usuario_salida')}}">
                                @csrf
                                <input type="hidden" id="salida">
                                <input type="submit" value="salida">
                                {{-- <button type="button" class="btn btn-warning btn-lg"><i class="fas fa-door-closed"></i></button> --}}
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{url('/usuario_vacaciones')}}">
                                @csrf
                                <input type="hidden" id="vacaciones">
                                <input type="submit" value="vacaciones">
                                {{-- <button type="button" class="btn btn-info btn-lg"><i class="fas fa-plane-departure"></i></button> --}}
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{url('/usuario_finvacaciones')}}">
                                @csrf
                                <input type="hidden" id="finvacaciones">
                                <input type="submit" value="finvacaciones">
                                {{-- <button type="button" class="btn btn-danger btn-lg"><i class="fas fa-plane-arrival"></i></button> --}}
                            </form>
                        </td>
                        <td>
                            <form method="POST" action="{{url('/usuario_enfermedad')}}">
                                @csrf
                                <input type="hidden" id="enfermedad">
                                <input type="submit" value="enfermedad">
                                {{-- <button type="button" class="btn btn-light btn-lg"><i class="fas fa-head-side-cough"></i></button> --}}
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
    <script>

        function confirmEnviar() {
            miformulario.btnEnviar.disabled = true; 
            miformulario.btnEnviar.value = "Enviado...";
            setTimeout(function(){
                miformulario.btnEnviar.disabled = false;
                miformulario.btnEnviar.value = "Entrar";
            }, 10000);
                return false;
        }

        miformulario.btnEnviar.addEventListener("change", function(){ 
            return confirmEnviar();
        }, false);

    </script>
    
    @endsection
@endsection