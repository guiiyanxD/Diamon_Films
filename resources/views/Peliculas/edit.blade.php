@extends('layouts.app')
@section('content')
<div class="container" style="padding-top: 35px;">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div style="text-align: center;">
                <h1>Formulario de edicion de peliculas</h1>
            </div>
            <div class="card">
                <h5 class="card-header info-color white-text text-center py-4">
                    <strong>Datos de la pelicula</strong>
                </h5>
                <div class="card-body px-lg-5 pt-0">

                    <!-- Form -->
                    <form class="text-center" style="color: #757575;" action="{{route('peliculas.update',[$peliculas->id_pelicula])}}" method="POST">
                        @csrf
                        @method("PUT")
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <input value="{{$peliculas->nombre}}" type="text" id="nombre" name="nombre" class="form-control">
                                    <label for="nombre">Nombre de la pelicula</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="md-form">
                                    <input value="{{$peliculas->clasificacion}}" type="text" id="clasificacion" name="clasificacion" class="form-control">
                                    <label for="clasificacion">Clasificacion</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="md-form">
                                    <input value="{{$peliculas->formato}}" type="text" id="formato" name="formato" class="form-control">
                                    <label for="formato">Formato</label>
                                </div>
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" value="{{$peliculas->protagonista}}" id="protagonista" name="protagonista" class="form-control">
                                    <label for="protagonista">Protagonistas</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="md-form">
                                    <input type="text" value="{{$peliculas->sello_cinematografico}}" id="sello_cinematografico" name="sello_cinematografico" class="form-control">
                                    <label for="sello_cinematografico">Sello Cinematografico</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="md-form">
                                <select class="custom-select dropdown-primary custom-select-lg my-xl-auto form-control"
                                        aria-haspopup="true" aria-expanded="false" name="admin_id" id="admin_id" >
                                    <option value="selected">Elija un usuario</option>
                                    @foreach($user as $users)
                                        <option class="dropdown-item" value="{{$users->id_admin}}">{{$users->persona->nombre}}</option>
                                    @endforeach
                                </select>
                                <label for="admin_id">Admin</label>
                            </div>

                            <div class="col">
                                <div class="md-form">
                                    <select class="custom-select dropdown-primary custom-select-lg my-xl-auto form-control"
                                            aria-haspopup="true" aria-expanded="false" name="categoria_id" id="categoria_id" >
                                        <option value="selected">Elija una categoria</option>
                                        @foreach($categorias as $cat)
                                            <option class="dropdown-item" value="{{$cat->id_categoria}}">{{$cat->nombre}}</option>
                                        @endforeach
                                    </select>
                                    <label for="categoria_id">Categoria</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="md-form">
                                    <input value="{{$peliculas->idioma}}" type="text" id="idioma" name="idioma" class="form-control">
                                    <label for="idioma">Idioma</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class="md-form">
                                    <input value="{{$peliculas->genero}}" type="text" id="genero" name="genero" class="form-control">
                                    <label for="genero">Genero</label>
                                </div>
                            </div>
                        </div>
                        <!-- Sign up button -->
                        <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit"> Actualizar </button>
                    </form>
                    <!-- Form -->
                </div>
            </div>
    </div>
</div>
@endsection
