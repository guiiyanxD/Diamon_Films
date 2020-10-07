@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px; text-align: Left;">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h1>Solicitudes de distribucion en curso</h1>
                </div>
                <div style="padding-bottom: 15px;">
                    <a href="{{route('distribuciones.create')}}" class="btn btn-success" style="border-radius: 5px;">Solicitar nueva distribucion</a>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">Distribucion ID</th>
                        <th scope="col" style="text-align: center;">Empresa ID</th>
                        <th scope="col" style="text-align: center;">Pelicula ID</th>
                        <th scope="col" style="text-align: center;">Porcentaje</th>
                        <th scope="col" style="text-align: center;">Presupuesto</th>
                        <th scope="col" style="text-align: center;">Estado</th>
                        <th scope="col" style="text-align: center;">Acciones</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($distribucion as $dist)
                        @if($dist->estado_id == 1)
                        <tr>
                            <td style="vertical-align: middle; text-align: center">{{$dist->id_distribucion}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$dist->empresa->nombre}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$dist->pelicula->nombre}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$dist->porcentaje}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$dist->presupuesto}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$dist->estado->nombre}}</td>
                            <td style="vertical-align: middle; text-align: center">
                                <button class="btn btn-primary dropdown-toggle mr-4"  type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">Acciones</button>
                                <div class="dropdown-menu">
                                    <li>
                                        <a href="{{route('distribuciones.edit',[$dist->id_distribucion]) }}" class="btn btn-info dropdown-item"> Editar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('distribuciones.finalizar',[$dist->id_distribucion]) }}" class="btn btn-warning dropdown-item">Finalizar</a>
                                    </li>
                                    <li>
                                        <a href="{{route('distribuciones.suspender',[$dist->id_distribucion]) }}" class="btn btn-danger dropdown-item">Suspender</a>
                                    </li>
                                </div>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <div class="container" style="padding-top: 35px; text-align: Left;">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h1>Solicitudes de distribucion finalizadas</h1>
                </div>

                <table class="table table-striped table-bordered" style="padding-bottom: 15px;">
                    <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">Distribucion ID</th>
                        <th scope="col" style="text-align: center;">Empresa ID</th>
                        <th scope="col" style="text-align: center;">Pelicula ID</th>
                        <th scope="col" style="text-align: center;">Porcentaje</th>
                        <th scope="col" style="text-align: center;">Presupuesto</th>
                        <th scope="col" style="text-align: center;">Estado</th>
                        <th scope="col" style="text-align: center;">Generar factura</th>
                        <th scope="col" style="text-align: center;">Suspender</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($distribucion as $dist)
                        @if($dist->estado_id == 2)
                            <tr>
                                <td style="vertical-align: middle; text-align: center">{{$dist->id_distribucion}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$dist->empresa->nombre}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$dist->pelicula->nombre}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$dist->porcentaje}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$dist->presupuesto}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$dist->estado->nombre}}</td>
                                <td style="text-align:center; vertical-align: middle;"><a href="{{route('distribuciones.facturar',[$dist->id_distribucion])}}" class="btn btn-success" style="border-radius: 5px;">Generar</a></td>
                                <td style="text-align:center; vertical-align: middle;"><a href="{{route('distribuciones.finalizar',[$dist->id_distribucion]) }}" class="btn btn-danger" style="border-radius: 5px;">Suspender</a></td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>
    <div class="container" style="padding-top: 35px; text-align: Left;">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h1>Solicitudes de distribucion suspendidas</h1>
                </div>

                <table class="table table-striped table-bordered" style="padding-bottom: 15px;">
                    <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">Distribucion ID</th>
                        <th scope="col" style="text-align: center;">Empresa ID</th>
                        <th scope="col" style="text-align: center;">Pelicula ID</th>
                        <th scope="col" style="text-align: center;">Porcentaje</th>
                        <th scope="col" style="text-align: center;">Presupuesto</th>
                        <th scope="col" style="text-align: center;">Estado</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($distribucion as $dist)
                        @if($dist->estado_id == 3)
                            <tr>
                                <td style="vertical-align: middle; text-align: center">{{$dist->id_distribucion}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$dist->empresa->nombre}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$dist->pelicula->nombre}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$dist->porcentaje}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$dist->presupuesto}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$dist->estado->nombre}}</td>
                            </tr>
                        @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <hr>
@endsection
