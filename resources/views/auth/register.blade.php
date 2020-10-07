@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mx-auto ">
            <div style="text-align: center;">
                <h1>Genial! Un nuevo usuario, bienvenido!</h1>
            </div>
            <div class="card">
                <div class="card-header">Escribí tus datos acá!</div>

                <div class="card-body px-lg-5 pt-0">
                    <form method="POST" action="{{ route('usuarios.store') }}">
                        @csrf
                        <div class="form-row">

                            <div class="col">
                                <div class="md-form">
                                    <input id="nombre" type="text" class="form-control" name="nombre" value="{{ old('nombre') }}" placeholder="Nombre">
                                    <label for="nombre">Nombre</label>
                                    @error('nombre')
                                        <span class="invalid-feedback" role="alert">0
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col">
                                <input type="text" id="apellido" name="apellido" class="form-control" value="{{ old('apellido') }}" placeholder="Apellido">
                                <label for="apellido" >Apellido</label>
                            </div>

                            <div class="col">
                                <input type="text" name="carnet_id" id="carnet_id" class="form-control" value="{{old('carnet_id')}}" placeholder="Carné de identidad" >
                                <label for="carnet_id">Carne de identidad</label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="celular" id="celular" class="form-control"  value="{{old('celular')}}" placeholder="Nro. celular">
                                <label for="celular">Nro. Celular</label>
                            </div>
                            <div class="col">
                                <div class="form-group mb-4">
                                    <div class="datepicker date input-group p-0 shadow-sm">
                                        <input type="text" placeholder="Fecha de nacimiento" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento">
                                        <div class="input-group-append"></div>
                                        <label for="fecha_nacimiento">Fecha de nacimiento</label>
                                    </div>
                                </div>
                            </div>

                            <div class="col">
                                <input type="text" name="cargo_admin" id="cargo_admin" class="form-control" value="{{old('cargo_admin')}}">
                                <label for="cargo_admin">Cargo administrativo</label>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col">
                                <input type="text" name="direccion" id="direccion" class="form-control" value="{{old('direccion')}}" placeholder="Direccion">
                                <label for="direccion">Direccion</label>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="col">
                                <input type="email" name="email" id="email" class="form-control" value="{{old('email')}}" placeholder="Email de su institucion">
                                <label for="email">E-mail institucional</label>
                            </div>
                            <div class="col">
                                <input type="email" name="email_personal" id="email_personal" class="form-control" value="{{old('email_personal')}}" placeholder="Email personal">
                                <label for="email_personal">E-mail personal</label>
                            </div>
                            <div class="col">
                                <input type="password" name="password" id="password" class="form-control" value="{{old('password')}}" placeholder="Contraseña">
                                <label for="password">Contraseña</label>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="col">
                                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> Registrar </button>
                            </div>
                            <div class="col">
                                <a class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0" href="/"> Cancelar </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
