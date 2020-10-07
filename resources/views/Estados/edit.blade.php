@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div style="text-align: center">
                    <h1>Formulario de creacion de un nuevo estado</h1>
                </div>
                <div class="card">
                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Datos del estado</strong>
                    </h5>
                    <div class="card-body px-lg-5 pt-0">
                        <form class="text-center" style="color: #757575;" action="{{route('estados.store')}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-row">

                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="nombre" name="nombre" class="form-control" value="{{$est->nombre}}">
                                        <label for="nombre">Nombre del estado</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$est->descripcion}}">
                                        <label for="descripcion">Describir el estado</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Sign up button -->
                            <div class="form-row">
                                <div class="col">
                                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> Guardar </button>
                                </div>
                                <div class="col">
                                    <a href="{{route('estados.index')}}" class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
