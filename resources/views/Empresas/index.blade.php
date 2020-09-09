@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px; text-align: Left;">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h1>Listado de empresas</h1>
                </div>
                <div>
                    <a href="{{route('empresas.create')}}" class="btn btn-success" style="border-radius: 5px;">Añadir Empresa</a>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">Id Empresa</th>
                        <th scope="col" style="text-align: center;">Nombre</th>
                        <th scope="col" style="text-align: center;">E-mail</th>
                        <th scope="col" style="text-align: center;">Direccion</th>
                        <th scope="col" style="text-align: center;">NIT</th>
                        <th scope="col" style="text-align: center;">Telefono</th>
                        <th scope="col" style="text-align: center;"> Editar</th>
                        <th scop="col"  style="text-align: center;">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($empresas as $empresa)
                        <tr>
                            <td style="vertical-align: middle; text-align: center">{{$empresa->id_empresa}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$empresa->nombre}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$empresa->email}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$empresa->direccion}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$empresa->NIT}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$empresa->telefono}}</td>
                            <td style="text-align:center; vertical-align: middle;"><a href="{{route('empresas.edit',[$empresa->id_empresa]) }}" class="btn btn-secondary" style="border-radius: 5px;"> Editar</a></td>
                            <td style="text-align:center; vertical-align: middle;">
                                <form method="POST" action="{{route('empresas.destroy',[$empresa->id_empresa]) }}">
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
@endsection
