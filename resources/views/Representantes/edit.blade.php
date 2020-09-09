@extends('layouts.app')
@section('content')
    <div class="container" style="padding-left:120px; padding-right:120px;">
        <div class="row">
            <div class="col-md-12"  style="padding-top: 35px">
                <div class="card">
                    <div class="card-header">
                        Editar informacion de representante
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('representantes.update',[$rep->id_representante]) }}">
                            @csrf
                            @method("PUT")

                            <div class="input-group">
                                <div class="input-group-prepend mb-3">
                                    <span class="input-group-text">Nombre(s) y Apellido(s)</span>
                                </div>
                                <input value="{{$rep->persona->nombre}}" type="text" name="nombre" id="nombre" aria-label="First name" class="form-control">
                                <input value="{{$rep->persona->apellido}}" type="text" name="apellido" id="apellido" aria-label="Last name" class="form-control">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Carne Identidad</span>
                                </div>
                                <input value="{{$rep->persona->carnet_id}}" type="text" name="carnet_id" id="carnet_id" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Fecha de nacimiento</span>
                                </div>
                                <input value="{{$rep->persona->Fecha_nacimiento}}" type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email Personal</span>
                                </div>
                                <input value="{{$rep->persona->email_personal}}" type="text" name="email_personal" id="email_personal" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Celular</span>
                                </div>
                                <input value="{{$rep->persona->celular}}" type="text" name="celular" id="celular" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Direccion</span>
                                </div>
                                <input value="{{$rep->persona->direccion}}" type="text" name="direccion" id="direccion" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Cargo representante</span>
                                </div>
                                <input value="{{$rep->cargo_representante}}" type="text" name="cargo_representante" id="cargo_representante" class="form-control"  aria-describedby="basic-addon1" >
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Empresa</span>
                                </div>
                                <input value="{{$rep->empresa_id}}" type="text" name="empresa_id" id="empresa_id" class="form-control"  aria-describedby="basic-addon1">
                            </div>
                            <button type="submit" class="btn btn-outline-primary waves-effect">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
