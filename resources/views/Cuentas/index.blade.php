@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px; text-align: Left;">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h1>Listado de cuenta</h1>
                </div>
                <div>

                    <a href="{{route('cuentas.create')}}" class="btn btn-success" style="border-radius: 5px;">abonar</a>
                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">Id cuenta</th>
                        <th scope="col" style="text-align: center;">Nombre</th>
                        <th scope="col" style="text-align: center;">Descripcion</th>
                        <th scope="col" style="text-align: center;">Monto</th>
                        <th scope="col" style="text-align: center;">Tipo</th>
                        <th scope="col" style="text-align: center;">Estado</th>
                        <th scope="col" style="text-align: center;">Editar</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cuentas as $cue)
                        <tr>
                            <td style="vertical-align: middle; text-align: center">{{$cue->id_cuenta}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$cue->nombre}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$cue->descripcion}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$cue->monto}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$cue->tipo}}</td>
                            <td style="vertical-align: middle; text-align: center">{{$cue->estado_id}}</td>
                            <td style="text-align:center; vertical-align: middle;"><a href="{{route('cuentas.create',[$cue->id_cuenta]) }}" class="btn btn-secondary" style="border-radius: 5px;"> Editar</a></td>
                            <td style="text-align:center; vertical-align: middle;">

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
