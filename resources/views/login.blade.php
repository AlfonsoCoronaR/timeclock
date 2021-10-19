@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="vh-100 row justify-content-center align-items-center">
        <div class="plantilla">
            <div class="encabezado text-center mb-5">
                <h1>Timeclock GESDES</h1>
            </div>
            <div class="row justify-content-center">
                <div class="card col-sm-8 col-md-8 col-lg-6 col-xl-5">
                    <div class="card-header text-center">
                        <h5>Inicio de sesión</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label"> Correo Electrónico: </label>
                                <input type="text" name="email" placeholder="Correo electrónico..." class="form-control" >
                                @error('email') 
                                    {{$message}}
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"> Contraseña: </label>
                                <input type="password" name="password" placeholder="Contraseña..." class="form-control" >
                                @error('password') 
                                    {{$message}}
                                @enderror
                            </div>
                            <div class="boton text-center">
                                <input type="submit" value="Entrar" class="btn btn-outline-success">
                            </div> 
                        </form>
                        @isset($mensaje)
                            <p>{{$mensaje}}</p>
                        @endisset
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

{{-- <script>
    alert('Escribe algo')
</script> --}}

@endsection



