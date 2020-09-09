<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware(['auth'])->group(function() {
route::resource('/representantes', 'RepresentanteController');
route::resource('/usuarios','UserController');
route::resource('/categorias', 'CategoriaController');
route::resource('/peliculas','PeliculaController');
route::resource('/empresas', 'EmpresaController');
route::resource('/contratos_laborales', 'ContratoLaboralController');
route::resource('/contratos_acuerdos', 'ContratoAcuerdoController');
route::resource('/llaves','LlaveController');
route::resource('/Delivery','DeliveryController');
});


route::get('/test', function (){
    $relaciones_persona = \App\Persona::with('usuario')->with('representante')->get();
    $relaciones_representante = \App\Empresa::with('representantes')->get();
    return ['relaciones_personas'=>$relaciones_persona, 'relaciones_representante'=>$relaciones_representante];
});

route::get('test_representante', function (){
    $relaciones_empresa = \App\Empresa::with('representantes')->get();
    $relaciones_representante =  \App\Representante::with('empresa')->get();
    return ['relaciones_empresa'=>$relaciones_empresa,'relaciones_representante'=>$relaciones_representante];
});

route::get('test_pelicula', function(){
    $relacion_categoria = \App\Pelicula::with('categoria')->with('User')->get();
    $relacion_peliculas = \App\Categoria::with('peliculas')->get();
    return ['rekacion_categoria'=>$relacion_categoria, 'relacion_peliculas'=>$relacion_peliculas];
});

route::get('/test_contratos_laborales', function(){
    $contratolaboral = \App\Contrato::with('ContratoLaboral')->get()->where('tipo','1');
    $contratoPadre = \App\Contrato_Laboral::with('Contrato')->get();
    return ['contrato laboral'=>$contratolaboral, 'contratopadre'=>$contratoPadre];
});

route::get('/test_contratos_acuerdos',function(){
    $contratoacuerdo = \App\Contrato::with('ContratoAcuerdo')->get()->where('tipo','2');
    $contratoPadre = \App\Contrato_Acuerdo::with('Contrato')->with('Empresa')->get();
    //$contrato_empresa = \App\Contrato_Acuerdo::with('Empresa')->get();
    return ['contrato laboral'=>$contratoacuerdo, 'contratopadre'=>$contratoPadre];
});




Route::get('/home', 'HomeController@index')->name('home');
