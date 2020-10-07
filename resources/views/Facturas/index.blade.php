@extends('layouts.app')
@section('content')
    <div class="container" style="padding-top: 35px; text-align: Left;">
        <div class="row">
            <div class="col-lg-12">
                <div>
                    <h1>FACTURAS</h1>
                </div>
                <div style="padding-bottom: 15px;">

                </div>
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th scope="col" style="text-align: center;">id_factura</th>
                        <th scope="col" style="text-align: center;">Distribucion ID</th>
                        <th scope="col" style="text-align: center;">Empresa</th>
                        <th scope="col" style="text-align: center;">Monto</th>
                        <th scope="col" style="text-align: center;">IVA</th>
                        <th scope="col" style="text-align: center;">Impt. Transaccion</th>
                        <th scope="col" style="text-align: center;">Concepto</th>
                        <th scope="col" style="text-align: center;">Finalizar</th>
                        <th scope="col" style="text-align: center;">Imprimir</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($factura as $fact)
                            <tr>
                                <td style="vertical-align: middle; text-align: center">{{$fact->id_factura}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$fact->distribucion_id}}</td>
                                <td style="vertical-align: middle; text-align: center">#</td>
                                <td style="vertical-align: middle; text-align: center">{{$fact->monto}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$fact->iva_factura}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$fact->it}}</td>
                                <td style="vertical-align: middle; text-align: center">{{$fact->concepto}}</td>
                                <td style="text-align:center; vertical-align: middle;"><a href="{{route('facturas.edit',[$fact->id_factura])}}" class="btn btn-success" style="border-radius: 5px;">Finalizar</a></td>
                                <td style="text-align:center; vertical-align: middle;"><a href="{{route('facturas.descargar',[$fact->id_factura])}}" class="btn btn-info" style="border-radius: 5px;">Imprimir</a></td>
                            </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
