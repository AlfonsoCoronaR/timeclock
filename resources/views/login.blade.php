@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="vh-100 row justify-content-center align-items-center">
        <div class="plantilla-login">
            <div class="encabezado text-center mb-5">
                <img src="{{url('/img/GESDES.png')}}" alt="gesdes.png" class="gesdes">   
            </div>
            <div class="row justify-content-center">
                <div class="card form col-sm-8 col-md-8 col-lg-6 col-xl-5">
                    <div class="card-header text-center">
                        <h3>INICIO DE SESIÓN</h3>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{url('/principal')}}">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" name="email" placeholder="Correo electrónico..." class="form-control" value="{{old('email')}}" autofocus autocomplete="off">
                                <label for="email" class="form-label"> Correo Electrónico: </label>
                                @error('email') 
                                    <div class="error">
                                        <small>
                                            {{$message}}
                                        </small>
                                    </div>
                                @enderror
                            </div>
                            
                            <div class="form-floating mb-3">
                                <input type="password" name="password" placeholder="Contraseña..." class="form-control">
                                <label for="password" class="form-label"> Contraseña: </label>
                                @error('password') 
                                <div class="error">
                                    <small>
                                        {{$message}}
                                    </small>
                                </div>
                                @enderror
                            </div>

                            <div class="boton text-center">
                                <input type="submit" value="Entrar" class="btn btn-outline-dark">
                            </div> 
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection



