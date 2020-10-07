@extends('layouts.app')

@section('content')
    <div class="container" style="padding-top: 35px;">
        <div class="row">
            <div class="col-md-8 mx-auto ">
                <div style="text-align: center;">
                    <h1>Formulario de solicitud de distribucion</h1>
                </div>
                <div class="card">
                    <h5 class="card-header info-color white-text bg-info text-center py-4" style="margin-bottom: 3vh;">
                        <strong>Requisitos para la nueva distribucion</strong>
                    </h5>
                    <div class="card-body px-lg-5 pt-0">

                        <!-- Form -->
                        <form class="text-center" style="color: #757575; " action="{{route('distribuciones.store')}}" method="POST">
                            @csrf
                            @method("POST")
                            <div class="form-row">
                                <div class="col">
                                    <div class="md-form">
                                        <select class="custom-select dropdown-primary custom-select-lg my-xl-auto form-control"
                                                aria-haspopup="true" aria-expanded="false" name="pelicula_id" id="pelicula_id" >
                                            <option value="selected">Elija un filme</option>
                                            @foreach($pelicula as $peli)
                                                <option class="dropdown-item" value="{{$peli->id_pelicula}}">{{$peli->nombre}}</option>
                                            @endforeach
                                        </select>
                                        <label for="pelicula_id">Nombre de la pelicula solicitada por la empresa</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="md-form">
                                        <select class="custom-select dropdown-primary custom-select-lg my-xl-auto form-control"
                                                aria-haspopup="true" aria-expanded="false" name="empresa_id" id="empresa_id" >
                                            <option value="selected">Elija el nombre de la empresa</option>
                                            @foreach($empresa as $emp)
                                                <option class="dropdown-item" value="{{$emp->id_empresa}}">{{$emp->nombre}}</option>
                                            @endforeach
                                        </select>
                                        <label for="empresa_id">Nombre de la empresa solicitante</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="md-form">
                                        <select class="custom-select dropdown-primary custom-select-lg my-xl-auto form-control"
                                                aria-haspopup="true" aria-expanded="false" name="delivery_id" id="delivery_id" >
                                            <option value="selected">Elija el delivery</option>
                                            @foreach($delivery as $del)
                                                <option class="dropdown-item" value="{{$del->id_delivery}}">{{$del->id_delivery}}</option>
                                            @endforeach
                                        </select>
                                        <label for="delivery_id">Codigo de delivery que entregara el filme</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row" style="padding-top: 15px">
                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="porcentaje" name="porcentaje" class="form-control" placeholder="Determine el porcentaje">
                                        <label for="porcentaje">Porcentaje</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="md-form">
                                        <input type="text" id="presupuesto" name="presupuesto" class="form-control" placeholder="Determine el presupuesto">
                                        <label for="presupuesto">Presupuesto</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="md-form">
                                        <select class="custom-select dropdown-primary custom-select-lg my-xl-auto form-control"
                                                aria-haspopup="true" aria-expanded="false" name="estado_id" id="estado_id" >
                                            <option value="selected">Elija el estado de la solicitud</option>
                                            @foreach($estado as $est)
                                                <option class="dropdown-item" value="{{$est->id_estado}}">{{$est->nombre}}</option>
                                            @endforeach
                                        </select>
                                        <label for="estado_id">Codigo del estado de la solicitud</label>
                                    </div>
                                </div>
                            </div>
                            <!-- Sign up button -->
                            <div class="form-row">
                                <div class="col">
                                    <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> Guardar </button>
                                </div>
                                <div class="col">
                                    <a href="{{route('distribuciones.index')}}" class="btn btn-outline-danger btn-rounded btn-block my-4 waves-effect z-depth-0"> Cancelar </a>
                                </div>
                            </div>


                        </form>
                        <!-- Form -->

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
