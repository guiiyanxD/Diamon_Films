@extends('layouts.app')
@section('content')
    <div class="container" style="padding-left:120px; padding-right:120px;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Formulario de edicion
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('usuarios.update',[$usuario->id_admin])}}">
                            @csrf
                            @method("PUT")

                            <div class="input-group">
                                <div class="input-group-prepend mb-3">
                                    <span class="input-group-text">Nombre(s) y Apellido(s)</span>
                                </div>
                                <input value="{{$usuario->persona->nombre}}" type="text" name="nombre" id="nombre" aria-label="First name" class="form-control">
                                <input value="{{$usuario->persona->apellido}}" type="text" name="apellido" id="apellido" aria-label="Last name" class="form-control">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Carne Identidad</span>
                                </div>
                                <input value="{{$usuario->persona->carnet_id}}" type="text" name="carnet_id" id="carnet_id" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">fecha de nacimiento</span>
                                </div>
                                <input value="{{$usuario->persona->fecha_nacimiento}}"  type="text" name="fecha_nacimiento" id="fecha_nacimiento" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email Personal</span>
                                </div>
                                <input value="{{$usuario->persona->email_personal}}" type="text" name="email_personal" id="email_personal" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Email institucional</span>
                                </div>
                                <input  value="{{$usuario->email}}" type="text" name="email" id="email" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Celular</span>
                                </div>
                                <input value="{{$usuario->persona->celular}}"  type="text" name="celular" id="celular" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Direccion</span>
                                </div>
                                <input value="{{$usuario->persona->direccion}}" type="text" name="direccion" id="direccion" class="form-control" aria-describedby="basic-addon1">
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Cargo administrativo</span>
                                </div>
                                <input value="{{$usuario->cargo_admin}}" type="text" name="cargo_admin" id="cargo_admin" class="form-control"  aria-describedby="basic-addon1" required>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="basic-addon1">Contraseña</span>
                                </div>
                                <input value="{{$usuario->password}}" type="text" name="password" id="password" class="form-control" aria-describedby="basic-addon1">
                            </div>
                            <button type="submit" class="btn btn-outline-primary waves-effect">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
