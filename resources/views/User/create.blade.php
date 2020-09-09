@extends('layouts.app')
@section('content')
    <div class="container" style="padding-left:120px; padding-right:120px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Crear un nuevo usuario
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('usuarios.store')}}">
                            @csrf
                            @method("POST")

                            <div class="input-group">
                                <div class="input-group-prepend mb-3">
                                    <span class="input-group-text">Nombre(s) y Apellido(s)</span>
                                </div>
                                <input type="text" name="nombre" id="nombre" aria-label="First name" class="form-control">
                                <input type="text" name="apellido" id="apellido" aria-label="Last name" class="form-control">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Carne Identidad</span>
                                </div>
                                <input type="text" name="carnet_id" id="carnet_id" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">fecha de nacimiento</span>
                                </div>
                                <input type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email Personal</span>
                                </div>
                                <input type="text" name="email_personal" id="email_personal" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email institucional</span>
                                </div>
                                <input type="text" name="email" id="email" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Celular</span>
                                </div>
                                <input type="text" name="celular" id="celular" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Direccion</span>
                                </div>
                                <input type="text" name="direccion" id="direccion" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Cargo administrativo</span>
                                </div>
                                <input type="text" name="cargo_admin" id="cargo_admin" class="form-control"  aria-describedby="basic-addon1" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Contraseña</span>
                                </div>
                                <input type="text" name="password" id="password" class="form-control" aria-describedby="basic-addon1">
                            </div>
                            <button type="submit" class="btn btn-outline-primary waves-effect">Añadir</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
