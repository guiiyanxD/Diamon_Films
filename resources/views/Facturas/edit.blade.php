@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-md-8 mx-auto ">
                <div style="text-align: center;">
                    <h1>Formulario de edición de factura</h1>
                </div>
                <div class="card">
                    <h5 class="card-header info-color white-text bg-info text-center py-4" style="margin-bottom: 3vh;">
                        <strong>Datos de la factura</strong>
                    </h5>
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575; " action="{{route('facturas.update',$factura->id_factura)}}" method="POST">
                            @csrf
                            @method("PUT")
                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form">
                                        <input value ="{{$factura->distribucion->empresa->nombre}}"  class="form-control" readonly>
                                        <label for="nombre">Nombre de la empresa</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="md-form">
                                        <input class="form-control" value="{{$factura->descripcion}}" readonly>
                                        <label for="descripcion">descripcion</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="monto" name="monto" class="form-control">
                                        <label for="monto">Monto</label>
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">

                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="concepto" name="concepto" class="form-control" value="{{$factura->concepto}}" readonly>
                                        <label for="concepto">Concepto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <button  class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> Generar Factura </button>
                                </div>
                                <div class="col">
                                    <a href="{{route('facturas.index')}}" class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0" >Cancelar</a>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
