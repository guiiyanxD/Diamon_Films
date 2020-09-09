@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 35px;">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div style="text-align: center">
                <h1>Formulario de creacion de empresa</h1>
            </div>
            <div class="card">
                <div class="card-header text-center info-color white-text py-4">
                    <h5><strong>
                            Datos de la empresa
                        </strong></h5>
                </div>
                <div class="card-body px-lg-5 pt-0">

                    <form class="text-center" style="color: #757575;" action="{{route('empresas.store')}}" method="post" >
                        @csrf
                        @method("POST")
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <input class="form-control" type="text" id="nombre" name="nombre">
                                    <label for="nombre">Nombre de la empresa</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="md-form">
                                    <input class="form-control" type="text" id="email" name="email">
                                    <label for="email">E-mail</label>
                                </div>
                            </div>
                        </div>

                        <div class="md-form">
                            <input class="form-control" type="text" id="direccion" name="direccion">
                            <label for="direccion">Direccion</label>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <input class="form-control" type="text" id="telefono" name="telefono">
                                    <label for="telefono"> Telefono</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="md-form">
                                    <input class="form-control" type="text" id="NIT" name="NIT">
                                    <label for="NIT">NIT</label>
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
@endsection
