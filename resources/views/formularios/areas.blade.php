@extends('../plantilla')
@section('contenido')
    @extends('../extras.sidebar')
        @section('registro')

        <div class="container ml-5">
            <div class="vh-100 row justify-content-center align-items-center">
                <div class="plantilla">
                    <div class="card mb-3">
                        <div class="row g-0">
                          <div class="img-area col-md-4">
                            <img src="{{url('img/areas.png')}}" class="img-fluid rounded-start" alt="areas.png">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h3 class="card-title text-center">CREAR UNA NUEVA ÁREA</h3>

                              <div class="card-body">
                                <form method="POST" action="{{url('/areas')}}">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="area" class="area form-label">Nueva área: </label>
                                        <input type="text" name="area" placeholder="Nombre del área..." class="form-control" autofocus>
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