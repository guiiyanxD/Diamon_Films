@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-lg-12 mx-auto">
                <div>
                    <h1 style="text-align: left;">Listado de usuarios</h1>
                </div>
                <div style="padding-bottom: 15px;">
                    <a class="btn btn-success" href="{{route('usuarios.create')}}" style="border-radius:5px;">Añadir Usuario</a>
                </div>
                <div>
                    <table class="table table-striped table-bordered" style="text-align: center; vertical-align: middle;">
                        <thead>
                        <tr>
                            <th>Id Administrador</th>
                            <th>Cargo Administrador</th>
                            <th>E-mail Administrativo</th>
                            <th>id_persona</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>E-mail personal</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($usuarios as $usuario)
                            <tr>
                                <td>{{$usuario->id_admin}}</td>
                                <td>{{$usuario->cargo_admin}}</td>
                                <td>{{$usuario->email}}</td>
                                <td>{{$usuario->persona->id_persona}}</td>
                                <td>{{$usuario->persona->nombre}}</td>
                                <td>{{$usuario->persona->apellido}}</td>
                                <td>{{$usuario->persona->email_personal}}</td>
                                <td><a href="{{route('usuarios.edit',[$usuario->id_admin]) }}" class="btn btn-secondary" style="border-radius:5px;">Editar</a></td>
                                <td>
                                    <form method="POST" action="{{route('usuarios.destroy',[$usuario->persona->id_persona]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="border-radius: 5px; margin-top: auto;">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
