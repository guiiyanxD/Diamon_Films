@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 35px; text-align: Left;">
    <div class="row">
        <div class="col-lg-12 mx-auto">
            <div>
                <h1>Listado de peliculas</h1>
            </div>
            <div style="padding-bottom: 15px;" >
                <a href="{{route('peliculas.create')}}" class="btn btn-success" style="border-radius: 5px;">Añadir Pelicula</a>
            </div>
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th scope="col" style="text-align: center;">Id Pelicula</th>
                    <th scope="col" style="text-align: center;">Id Categoria</th>
                    <th scope="col" style="text-align: center;">Id Admin</th>
                    <th scope="col" style="text-align: center;">Nombre</th>
                    <th scope="col" style="text-align: center;">Clasificacion</th>
                    <th scope="col" style="text-align: center;">Formato</th>
                    <th scope="col" style="text-align: center;">Protagonista</th>
                    <th scope="col" style="text-align: center;">Sello Cinematografico</th>
                    <th scope="col" style="text-align: center;">Idioma</th>
                    <th scope="col" style="text-align: center;">Genero</th>
                    <th scope="col" style="text-align: center;">Editar</th>
                    <th scope="col" style="text-align: center;">Eliminar</th>
                </tr>
                </thead>
                <tbody>
                @foreach($peliculas as $pelis)
                    <tr>
                        <td style="vertical-align: middle; text-align: center">{{$pelis->id_pelicula}}</td>
                        <td style="vertical-align: middle; text-align: center">{{$pelis->categoria->nombre}}</td>
                        <td style="vertical-align: middle; text-align: center">{{$pelis->User->persona->nombre}} {{$pelis->User->persona->apellido}}</td>
                        <td style="vertical-align: middle; text-align: center">{{$pelis->nombre}}</td>
                        <td style="vertical-align: middle; text-align: center">{{$pelis->clasificacion}}</td>
                        <td style="vertical-align: middle; text-align: center">{{$pelis->formato}}</td>
                        <td style="vertical-align: middle; text-align: center">{{$pelis->protagonista}}</td>
                        <td style="vertical-align: middle; text-align: center">{{$pelis->sello_cinematografico}}</td>
                        <td style="vertical-align: middle; text-align: center">{{$pelis->idioma}}</td>
                        <td style="vertical-align: middle; text-align: center">{{$pelis->genero}}</td>
                        <td style="text-align:center; vertical-align: middle;"><a href="{{route('peliculas.edit',[$pelis->id_pelicula]) }}" class="btn btn-secondary" style="border-radius: 5px;"> Editar</a></td>
                        <td style="text-align:center; vertical-align: middle;">
                            <form method="POST" action="{{route('peliculas.destroy',[$pelis->id_pelicula]) }}">
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
