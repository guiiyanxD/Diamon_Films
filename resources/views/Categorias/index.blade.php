@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 35px; text-align: Left;">
    <div class="row">
        <div class="col-lg-12">
            <div>
                <h1>Listado de categorias</h1>
            </div>
            <div>
                <a href="{{route('categorias.create')}}" class="btn btn-success" style="border-radius: 5px;">Añadir Categoria</a>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col" style="text-align: center;">Id Categoria</th>
                    <th scope="col" style="text-align: center;">Nombre</th>
                    <th scope="col" style="text-align: center;">Descripcion</th>
                    <th scope="col" style="text-align: center;"> Editar</th>
                    <th scop="col"  style="text-align: center;">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($categorias as $cat)
                <tr>
                    <td style="vertical-align: middle; text-align: center">{{$cat->id_categoria}}</td>
                    <td style="vertical-align: middle; text-align: center">{{$cat->nombre}}</td>
                    <td style="vertical-align: middle; text-align: center">{{$cat->descripcion}}</td>
                    <td style="text-align:center; vertical-align: middle;"><a href="{{route('categorias.edit',[$cat->id_categoria]) }}" class="btn btn-secondary" style="border-radius: 5px;"> Editar</a></td>
                    <td style="text-align:center; vertical-align: middle;">
                        <form method="POST" action="{{route('categorias.destroy',[$cat->id_categoria]) }}">
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
