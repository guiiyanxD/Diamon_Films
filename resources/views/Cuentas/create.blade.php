@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div style="text-align: center">
                    <h1>Formulario de creacion de nueva cuenta</h1>
                </div>

                <!-- Material form register -->
                <div class="card">

                    <h5 class="card-header info-color white-text text-center py-4">
                        <strong>Datos de cuenta</strong>
                    </h5>

                    <!--Card content-->
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575;" action="{{route('cuentas.store')}}" method="POST">
                            @csrf
                            @method("POST")
                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="nombre" name="nombre" class="form-control">
                                        <label for="nombre">Nombre de la cuenta</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="monto" name="monto" class="form-control">
                                        <label for="monto">monto de la cuenta</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="tipo" name="tipo" class="form-control">
                                        <label for="tipo">tipo</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="descripcion" name="descripcion" class="form-control">
                                        <label for="descripcion">Describir la cuenta</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="estado" name="estado" class="form-control">
                                        <label for="estado">Estado</label>
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> Guardar </button>
                                </div>
                                <div class="col">
                                    <a href="{{route('cuentas.index')}}" class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0">Cancelar</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
