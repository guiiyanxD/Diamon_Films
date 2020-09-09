@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 35px;">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div style="text-align: center">
                <h1>Formulario de creacion de nueva categoria</h1>
            </div>

            <!-- Material form register -->
            <div class="card">

                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Datos de categoria</strong>
                </h5>

                <!--Card content-->
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="{{route('categorias.store')}}" method="POST">
                        @csrf
                        @method("POST")
                        <div class="form-row">

                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="nombre" name="nombre" class="form-control">
                                    <label for="nombre">Nombre de la categoria</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="md-form">
                                    <input type="text" id="descripcion" name="descripcion" class="form-control">
                                    <label for="descripcion">Describir la categoria</label>
                                </div>
                            </div>
                        </div>
                        <!-- Sign up button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> Guardar </button>


                    </form>
                    <!-- Form -->

                </div>

            </div>
            <!-- Material form register -->
        </div>
    </div>
</div>
@endsection
