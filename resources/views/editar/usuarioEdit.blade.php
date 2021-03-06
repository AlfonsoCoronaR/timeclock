@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')

        <div class="container ml-5">
            <div class="vh-100 row justify-content-center align-items-center">
                <div class="usuarios mt-4">
                    <div class="card form" >
                        <div class="row g-0">
                          <div class="img-user col-md-4">
                            <img src="{{url('img/user.png')}}" class="img-fluid rounded-start" alt="usuarios.png">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h3 class="card-title text-center">EDITAR USUARIO</h3>

                              <div class="card-body">
                                <form method="POST" action="/timeclock/public/usuarios/{{$usuario->id}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-floating mb-3">
                                        <input type="text" name="name" placeholder="Nombre completo..." class="form-control" autofocus value="{{$usuario->name}}">
                                        <label for="name" class="usuario form-label">Nombre: </label>
                                        @error('name') 
                                        <div class="error">
                                            <small>
                                                {{$message}}
                                            </small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="user" placeholder="Nombre del usuario..." class="form-control" autofocus value="{{$usuario->usuario}}">
                                        <label for="user" class="usuario form-label">Usuario: </label>
                                        @error('user') 
                                        <div class="error">
                                            <small>
                                                {{$message}}
                                            </small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <select name="grupo" class="form-select" aria-label="Default select example">
                                          <option value="" selected>Selecciona un grupo:</option>
                                          @foreach ($grupos as $grupo)
                                            <option value="{{$grupo->id}}">{{$grupo->grupo}}</option>
                                          @endforeach
                                        </select>
                                        @error('grupo') 
                                        <div class="error">
                                          <small>
                                              {{$message}}
                                          </small>
                                        </div>
                                        @enderror
                                      </div>
                                    <div class="form-floating mb-3">
                                        <input type="text" name="email" placeholder="Correo electr??nico..." class="form-control" autofocus value="{{$usuario->email}}">
                                        <label for="email" class="usuario form-label">Correo Electr??nico:</label>
                                        @error('email') 
                                        <div class="error">
                                            <small>
                                                {{$message}}
                                            </small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="password" placeholder="Contrase??a..." class="form-control">
                                        <label for="password" class="usuario form-label"> Contrase??a: </label>
                                        @error('password') 
                                        <div class="error">
                                            <small>
                                                {{$message}}
                                            </small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" name="password_confirmation" placeholder="Escribe de nuevo la contrase??a..." class="form-control">
                                        <label for="password_confirmation" class="usuario form-label"> Confirmar contrase??a: </label>
                                        @error('password') 
                                        <div class="error">
                                            <small>
                                                {{$message}}
                                            </small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="boton text-center">
                                        <a href="{{url('/usuarios')}}" class="btn btn-secondary">Cancelar</a>
                                        <input type="submit" value="Guardar" class="btn btn-dark">
                                    </div> 
                                </form>
                            </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>

    @endsection
@endsection