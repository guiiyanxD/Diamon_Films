@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div>
                    <h1 style="text-align: left">
                        Listado de representantes
                    </h1>
                </div>
                <div>
                    <a class="btn btn-success" href="{{route('representantes.create')}}" style="border-radius:5px;">Añadir Representante</a>
                </div>
                <div>
                    <table class="table table-striped table-bordered" style="text-align: center; vertical-align: middle;">
                        <thead>
                        <tr>
                            <th scope="col">id_representante</th>
                            <th scope="col">persona_id</th>
                            <th scope="col">empresa</th>
                            <th scope="col">nombre</th>
                            <th scope="col">apellido</th>
                            <th scope="col">cargo representante</th>
                            <th scope="col">Email Personal</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($rep as $reps)
                            <tr>
                                <td>{{$reps->id_representante}}</td>
                                <td>{{$reps->persona->id_persona}}</td>
                                <td>{{$reps->empresa->nombre}}</td>
                                <td>{{$reps->persona->nombre}}</td>
                                <td>{{$reps->persona->apellido}}</td>
                                <td>{{$reps->cargo_representante}}</td>
                                <td>{{$reps->persona->email_personal}}</td>
                                <td><a href="{{route('representantes.edit',[$reps->id_representante]) }}" class="btn btn-secondary" style="border-radius:5px;">Editar</a></td>
                                <td>
                                    <form method="POST" action="{{route('representantes.destroy',[$reps->persona->id_persona]) }}">
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
