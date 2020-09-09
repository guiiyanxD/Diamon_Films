@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div>
                    <h1 style="text-align: center;">Formulario de edicion de Delivery</h1>
                </div>
                <div class="card">
                    <div class="card-header info-color white-text text-center py-4">
                        <h5>
                            <strong>Datos del contrato</strong>
                        </h5>
                    </div>
                    <div class="card-body px-lg-5 pt-0">
                        <form class="text-center" style="color: #757575;" action="{{route('Delivery.update',[$Delivery->id_delivery])}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-row">

                                <div class="col">
                                    <div class="form-group mb-4">
                                        <input type="text" id="admin_id_editando" name="admin_id_editando"
                                               class="form-control" value="{{Auth::user()->id_admin}}" style="pointer-events: none;">
                                        <label for="admin_id_editando">Admin ID Editando</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group mb-4">
                                        <input type="text" id="empresa_id" name="empresa_id" value="{{$Delivery->empresa_id}}" class="form-control">
                                        <label for="empresa_id">Empresa ID</label>
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
                                    <a class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0" href="{{route('contratos_acuerdos.index')}}"> Cancelar </a>
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
