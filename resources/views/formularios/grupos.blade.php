@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')

        <div class="container ml-5">
            <div class="vh-100 row justify-content-center align-items-center">
                <div class="plantilla">
                    <div class="card mb-3">
                        <div class="row g-0">
                          <div class="img-group col-md-4">
                            <img src="{{url('img/grupo.png')}}" class="img-fluid rounded-start" alt="grupos.png">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h3 class="card-title text-center">CREAR UN NUEVO GRUPO</h3>

                              <div class="card-body">
                                <form method="POST" {{-- action="{{url('/principal')}}" --}}>
                                    @csrf
                                    <div class="mb-3">
                                        <label for="email" class="grupo form-label">Nuevo grupo </label>
                                        <input type="text" name="email" placeholder="Nombre del grupo..." 
                                                class="form-control" {{-- value="{{old('email')}}" --}} required autofocus>
                                        {{-- @error('email') 
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