@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div style="text-align: center">
                    <h1>Formulario de registro de una llave</h1>
                </div>
                <div class="card">
                    <div class="card-header text-center info-color white-text py-4">
                        <h5><strong>
                                Datos de la llave
                            </strong></h5>
                    </div>
                    <div class="card-body px-lg-5 pt-0">

                        <form class="text-center" style="color: #757575;" action="{{route('llaves.store')}}" method="post" >
                            @csrf
                            @method("POST")

                            <div class="md-form">
                                <input class="form-control" type="text" id="descripcion" name="descripcion">
                                <label for="descripcion">Despcripcion</label>
                            </div>

                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form">
                                        <input class="form-control" type="text" id="empresa_id" name="empresa_id">
                                        <label for="email">ID Empresa</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="md-form">
                                        <input class="form-control" type="text" id="pelicula_id" name="pelicula_id">
                                        <label for="direccion">ID Pelicula</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group mb-4">
                                        <div class="datepicker date input-group p-0 shadow-sm">
                                            <input type="text" placeholder="Escoja la fecha de inicio" class="form-control py-4 px-4" id="fecha" name="fecha">
                                            <div class="input-group-append"></div>
                                            <label for="fecha">Fecha inicio</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> Guardar </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(function () {
            $('.datepicker').datepicker({
                clearBtn: true,
                format: "yyyy-mm-dd"
            });

        });
    </script>
@endsection
