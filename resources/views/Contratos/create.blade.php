@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div>
                    <h1 style="text-align: center;">Formulario de creacion de contrato</h1>
                </div>
                <div class="card">
                    <div class="card-header info-color white-text text-center py-4">
                        <h5>
                            <strong>Datos del contrato</strong>
                        </h5>
                    </div>
                    <div class="card-body px-lg-5 pt-0">
                        <form class="text-center" style="color: #757575;" action="" method="POST">
                            @csrf
                            @method("POST")
                            <div class="form-row">
                                <div class="col">
                                    <div class="form-group mb-4">
                                        <div class="datepicker date input-group p-0 shadow-sm">
                                            <input type="text" placeholder="Escoja la fecha de inicio" class="form-control py-4 px-4" id="reservationDate">
                                            <div class="input-group-append"></div>
                                            <label for="descripcion">Fecha inicio</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group mb-4">
                                        <div class="datepicker date input-group p-0 shadow-sm">
                                            <input type="text" placeholder="Escoja la fecha de inicio" class="form-control py-4 px-4" id="reservationDate">
                                            <div class="input-group-append"></div>
                                            <label for="descripcion">Fecha final</label>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Sign up button -->
                            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> Guardar </button>
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
