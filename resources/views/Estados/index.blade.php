@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px; text-align: Left;">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h1>Listado de estados</h1>
                </div>
                <div>
                    <a href="{{route('estados.create')}}" class="btn btn-success" style="border-radius: 5px;">Añadir Estado</a>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">Id Estado</th>
                        <th scope="col" style="text-align: center;">Nombre</th>
                        <th scope="col" style="text-align: center;">Descripcion</th>
                        <th scope="col" style="text-align: center;"> Editar</th>
                        <th scop="col"  style="text-align: center;">Eliminar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($estados as $est)
                        <tr>
                            <td style="vertical-align: middle; text-align: center">{{$est->id_estado}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$est->nombre}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$est->descripcion}}</td>
                            <td style="text-align:center; vertical-align: middle;"><a href="{{route('estados.edit',[$est->id_estado]) }}" class="btn btn-secondary" style="border-radius: 5px;"> Editar</a></td>
                            <td style="text-align:center; vertical-align: middle;">
                                <form method="POST" action="{{route('estados.destroy',[$est->id_estado]) }}">
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
