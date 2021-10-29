@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')

        <div class="container ml-5">
            <div class="vh-100 row justify-content-center align-items-center">
                <div class="usuarios mt-4">
                    <div class="card" >
                        <div class="row g-0">
                          <div class="img-user col-md-4">
                            <img src="{{url('img/user.png')}}" class="img-fluid rounded-start" alt="usuarios.png">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h3 class="card-title text-center">CREAR UN NUEVO USUARIO</h3>

                              <div class="card-body">
                                <form method="POST" action="{{url('/usuarios')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="name" class="usuario form-label">Nombre: </label>
                                        <input type="text" name="name" placeholder="Nombre completo..." class="form-control" autofocus>
                                        @error('name') 
                                        <div class="error">
                                            <small>
                                                {{$message}}
                                            </small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="user" class="usuario form-label">Usuario: </label>
                                        <input type="text" name="user" placeholder="Nombre del usuario..." class="form-control" autofocus>
                                        @error('user') 
                                        <div class="error">
                                            <small>
                                                {{$message}}
                                            </small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="grupo" class="usuario form-label">Seleccionar grupo:</label>
                                        <select name="grupo" class="form-select" aria-label="Default select example">
                                          <option value="" selected>Selecciona un grupo</option>
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
                                    <div class="mb-3">
                                        <label for="email" class="usuario form-label">Correo Electrónico:</label>
                                        <input type="text" name="email" placeholder="Correo electrónico..." class="form-control" autofocus>
                                        @error('email') 
                                        <div class="error">
                                            <small>
                                                {{$message}}
                                            </small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="usuario form-label"> Contraseña: </label>
                                        <input type="password" name="password" placeholder="Contraseña..." class="form-control">
                                        @error('password') 
                                        <div class="error">
                                            <small>
                                                {{$message}}
                                            </small>
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password_confirmation" class="usuario form-label"> Confirmar contraseña: </label>
                                        <input type="password" name="password_confirmation" placeholder="Escribe de nuevo la contraseña..." class="form-control">
                                        {{-- @error('password') 
                                        <div class="error">
                                            <small>
                                                {{$message}}
                                            </small>
                                        </div>
                                        @enderror --}}
                                    </div>
                                    <div class="boton text-center">
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