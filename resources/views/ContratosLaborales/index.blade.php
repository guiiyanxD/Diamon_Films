@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-md-12 mx-auto">
                <div style="text-align: left;">
                    <h1> Listado de contratos laborales</h1>
                </div>
                <div>
                    <a href="{{route('contratos_laborales.create')}}" class="btn btn-success" style="border-radius: 5px;">Añadir contrato</a>
                </div>
                <div>
                    <table class="table table-bordered table-striped" style="text-align: center; vertical-align: middle;">
                        <thead>
                            <tr>
                                <th>ID Contrato Laboral</th>
                                <th>Contrato ID</th>
                                <th>Admin ID pertenece</th>
                                <th>Fecha Inicio</th>
                                <th>Fecha Fin</th>
                                <th>Sueldo (Bs.)</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($contrato as $contract)
                                <tr>
                                    <td>{{$contract->id_laboral}}</td>
                                    <td>{{$contract->contrato_id}}</td>
                                    <td>{{$contract->admin_id}}</td>
                                    <td>{{$contract->contrato->fecha_inicio}}</td>
                                    <td>{{$contract->contrato->fecha_fin}}</td>
                                    <td>{{$contract->sueldo}}</td>
                                    <td> <a href="{{ route('contratos_laborales.edit', [$contract->id_laboral]) }}" class="btn btn-secondary" style="border-radius: 5px;">Editar</a> </td>
                                    <td>
                                        <form method="POST" action="{{route('contratos_laborales.destroy', [$contract->id_laboral]) }}">
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
