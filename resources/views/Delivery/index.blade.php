@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div style="text-align: left;">
                    <h1> Listado de deliveries recientes</h1>
                </div>
                <div>
                    <a href="{{route('Delivery.create')}}" class="btn btn-success" style="border-radius: 5px;">Añadir nuevo delivery</a>
                </div>
                <div>
                    <table class="table table-bordered table-striped" style="text-align: center; vertical-align: middle;">
                        <thead>
                        <tr>
                            <th>ID DELIVERY</th>
                            <th>DESCRIPCION</th>
                            <th>Empresa ID </th>
                            <th>ADMINISTRADOR</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($Deliver as $Delivery)
                            <tr>
                                <td>{{$Delivery->id_delivery}}</td>
                                <td>{{$Delivery->descripcion}}</td>
                                <td>{{$Delivery->empresa->nombre}}</td>
                                <td>{{$Delivery->user->nombre}}</td>

                                <td>
                                    <a
                                        href="#" class="btn btn-secondary" style="border-radius: 5px;">Editar
                                    </a>
                                </td>
                                <td>
                                    <form method="POST" action="#">
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
