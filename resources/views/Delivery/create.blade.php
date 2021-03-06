@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div>
                    <h1 style="text-align: center;">Formulario de creacion de delivery</h1>
                </div>
                <div class="card">
                    <div class="card-header info-color white-text text-center py-4">
                        <h5>
                            <strong>Datos del contrato</strong>
                        </h5>
                    </div>
                    <div class="card-body px-lg-5 pt-0">
                        <form class="text-center" style="color: #757575;" action="{{route('Delivery.store')}}" method="POST">
                            @csrf
                            @method("POST")
                            <div class="form-row">

                                <div class="col">
                                    <div class="form-group mb-4">
                                        <input type="text" id="admin_id_registrando" placeholder="{{Auth::user()->nombre}}" name="admin_id_registrando" class="form-control" value="{{Auth::user()->id_admin}}" style="pointer-events: none;">
                                        <label for="admin_id_registrando">Admin ID registrando</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group mb-4">
                                        <input type="text" id="empresa_id" name="empresa_id" class="form-control">
                                        <label for="empresa_id">Empresa ID</label>
                                    </div>
                                </div>


                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="descripcion" name="descripcion" class="form-control">
                                    <label for="descripcion">descripcion del pedido</label>
                                </div>
                            </div>


                            <!-- Sign up button -->
                            <div class="form-row">
                                <div class="col">
                                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> Guardar </button>
                                </div>
                                <div class="col">
                                    <a class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0" href="{{route('Delivery.index')}}"> Cancelar </a>
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
