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
                                <form method="POST" {{-- action="{{url('/principal')}}" --}}>
                                    @csrf
                                    <div class="mb-3">
                                        <label for="usuarios" class="usuario form-label">Nombre: </label>
                                        <input type="text" name="usuarios" placeholder="Nombre completo..." 
                                                class="form-control" {{-- value="{{old('email')}}" --}} required autofocus>
                                        {{-- @error('email') 
                                            <small style="color: red">
                                                {{$message}}</small>
                                        @enderror --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="usuario form-label">Usuario: </label>
                                        <input type="text" name="email" placeholder="Nombre del usuario..." 
                                                class="form-control" {{-- value="{{old('email')}}" --}} required autofocus>
                                        {{-- @error('email') 
                                            <small style="color: red">
                                                {{$message}}</small>
                                        @enderror --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="usuario form-label">Correo Electrónico:</label>
                                        <input type="text" name="email" placeholder="Correo electrónico..." 
                                                class="form-control" {{-- value="{{old('email')}}" --}} required autofocus>
                                        {{-- @error('email') 
                                            <small style="color: red">
                                                {{$message}}</small>
                                        @enderror --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="usuario form-label"> Contraseña: </label>
                                        <input type="password" name="password" placeholder="Contraseña..." class="form-control" required>
                                       {{--  @error('password') 
                                            <small style="color: red">
                                                {{$message}}</small>
                                        @enderror --}}
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="usuario form-label"> Confirmar contraseña: </label>
                                        <input type="password" name="password" placeholder="Escribe de nuevo la contraseña..." class="form-control" required>
                                       {{--  @error('password') 
                                            <small style="color: red">
                                                {{$message}}</small>
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