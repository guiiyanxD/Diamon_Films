@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px; text-align: Left;">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h1>Listado de Llaves</h1>
                </div>
                <div>
                    <a href="{{route('llaves.create')}}" class="btn btn-success" style="border-radius: 5px;">Añadir Llave</a>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">ID Llave</th>
                        <th scope="col" style="text-align: center;">Empresa ID</th>
                        <th scope="col" style="text-align: center;">Pelicula ID</th>
                        <th scope="col" style="text-align: center;">Fecha de emision</th>
                        <th scope="col" style="text-align: center;">Descripcion</th>
                        <th scope="col" style="text-align: center;"> Editar</th>
                        <th scop="col"  style="text-align: center;">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($keys as $key)
                        <tr>
                            <td style="vertical-align: middle; text-align: center">{{$key->id_llave}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$key->empresa->nombre}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$key->pelicula->nombre}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$key->fecha}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$key->descripcion}}</td>
                            <td style="text-align:center; vertical-align: middle;"><a href="{{route('llaves.edit',[$key->id_llave])}}" class="btn btn-secondary" style="border-radius: 5px; color: #e2e3e5"> Editar</a></td>
                            <td style="text-align:center; vertical-align: middle;">
                                <form method="POST" action="{{route('llaves.destroy',[$key->id_llave]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="    border-radius: 5px; margin-top: auto;">Eliminar</button>
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
