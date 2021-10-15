@extends('plantilla')
@section('contenido')

<div class="container">
    <div class="vh-100 row justify-content-center align-items-center">
        <div class="plantilla">
            <div class="encabezado text-center mb-5">
                <h1>Timeclock GESDES</h1>
            </div>
            <div class="row justify-content-center">
                <div class="card col col-lg-4">
                    <div class="card-header text-center">
                        <h5>Inicio de sesión</h5>
                    </div>
                    <div class="card-body">
                        <form method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="usuario" class="form-label"> Usuario: </label>
                                <input type="text" name="usuario" placeholder="usuario..." class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label"> Contraseña: </label>
                                <input type="password" name="password" placeholder="contraseña..." class="form-control">
                            </div>
                            <div class="boton text-center">
                                <input type="submit" value="Entrar" class="btn btn-outline-success">
                            </div> 
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

@endsection



