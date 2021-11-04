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
                                <form method="POST" action="{{url('/grupos')}}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                      <input type="text" name="grupo" placeholder="Nombre del grupo..." class="form-control" autofocus>
                                      <label for="grupo" class="grupo form-label">Nuevo grupo:</label>
                                        @error('grupo')
                                        <div class="error">
                                          <small>
                                              {{$message}}
                                          </small>
                                      </div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                      <select name="area" class="form-select" aria-label="Default select example">
                                        <option value="" selected>Selecciona una área</option>
                                        @foreach ($areas as $area)
                                          <option value="{{$area->id}}">{{$area->area}}</option>
                                        @endforeach
                                      </select>
                                      @error('area') 
                                      <div class="error">
                                        <small>
                                            {{$message}}
                                        </small>
                                      </div>
                                      @enderror
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