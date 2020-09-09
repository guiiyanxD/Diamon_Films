@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div style="text-align: left;">
                    <h1> Listado de contratos de acuerdos</h1>
                </div>
                <div>
                    <a href="{{route('contratos_acuerdos.create')}}" class="btn btn-success" style="border-radius: 5px;">Añadir contrato</a>
                </div>
                <div>
                    <table class="table table-bordered table-striped" style="text-align: center; vertical-align: middle;">
                        <thead>
                        <tr>
                            <th>ID Contrato Acuerdo</th>
                            <th>Contrato ID</th>
                            <th>Empresa ID </th>
                            <th>Fecha Inicio</th>
                            <th>Fecha Fin</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($acuerdos as $contract)
                            <tr>
                                <td>{{$contract->id_acuerdo}}</td>
                                <td>{{$contract->contrato_id}}</td>
                                <td>{{$contract->empresa->nombre}}</td>
                                <td>{{$contract->contrato->fecha_inicio}}</td>
                                <td>{{$contract->contrato->fecha_fin}}</td>
                                <td> <a href="{{ route('contratos_acuerdos.edit', [$contract->id_acuerdo]) }}" class="btn btn-secondary" style="border-radius: 5px;">Editar</a> </td>
                                <td>
                                    <form method="POST" action="{{route('contratos_acuerdos.destroy', [$contract->id_acuerdo]) }}">
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
