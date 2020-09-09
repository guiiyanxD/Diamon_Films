@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div style="text-align: center">
                    <h1>Formulario de edicion de una llave</h1>
                </div>

                <!-- Material form register -->
                <div class="card">

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Datos de la llave</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="{{route('llaves.update',[$keys->id_llave])}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="md-form">
                                <input value="{{$keys->descripcion}}" type="text" id="descripcion" name="descripcion" class="form-control">
                                <label for="descripcion">Descripcion</label>
                            </div>

                            <div class="form-row">

                                <div class="col">
                                    <div class="md-form">
                                        <input value="{{$keys->empresa_id}}" type="text" id="empresa_id" name="empresa_id" class="form-control">
                                        <label for="empresa_id">ID Empresa</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="md-form">
                                        <input value="{{$keys->pelicula_id}}" type="text" id="pelicula_id" name="pelicula_id" class="form-control">
                                        <label for="pelicula_id">ID Pelicula</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="datepicker date input-group p-0  md-form">
                                        <input type="text" placeholder="Escoja la fecha de emision" class="form-control py-4 px-4" id="fecha" name="fecha">
                                        <div class="input-group-append"></div>
                                        <label for="fecha">Fecha Emision</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Sign up button -->
                            <div class="form-row">
                                <div class="col">
                                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> Actualizar </button>
                                </div>
                                <div class="col">
                                    <a class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0" href="{{route('llaves.index')}}"> Cancelar </a>
                                </div>
                            </div>

                        </form>
                        <!-- Form -->
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
