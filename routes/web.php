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
route::post('/usuarios', 'UserController@store')->name('usuarios.store');
Auth::routes();
Route::middleware(['auth'])->group(function() {
    route::resource('/representantes', 'RepresentanteController');
    //route::resource('/usuarios','UserController');
    route::get('/usuarios','UserController@index')->name('usuarios.index');
    route::get('/usuarios/create', 'UserController@create')->name('usuarios.create');
    route::get('/usuarios/{id}/edit', 'UserController@edit')->name('usuarios.edit');
    route::put('/usuarios/{id}/', 'UserController@update')->name('usuarios.update');
    route::get('/usuarios/{id}/destroy', 'UserController@destroy')->name('usuarios.destroy');
    route::resource('/categorias', 'CategoriaController');
    route::resource('/peliculas','PeliculaController');
    route::resource('/empresas', 'EmpresaController');
    route::resource('/contratos_laborales', 'ContratoLaboralController');
    route::resource('/contratos_acuerdos', 'ContratoAcuerdoController');
    route::resource('/llaves','LlaveController');
    route::resource('/Delivery','DeliveryController');
    route::resource('/estados', 'EstadoController');
    route::resource('/cuentas','CuentaController');
    route::resource('/facturas','FacturaController');
    route::get('/facturas/{id}/descargar_factura', 'FacturaController@CrearPDF')->name('facturas.descargar');
    //route::resource('/solicitud_distribucion','DistribucionController')->name('','distribuciones');
        //RUTAS DE DISTRIBUCIONES//
    route::get('/solicitud_distribucion','DistribucionController@index')->name('distribuciones.index');
    route::post('/solicitud_distribucion', 'DistribucionController@store')->name('distribuciones.store');
    route::get('/solicitud_distribucion/create', 'DistribucionController@create')->name('distribuciones.create');
    route::get('/solicitud_distribucion/{id}/edit', 'DistribucionController@edit')->name('distribuciones.edit');
    route::put('/solicitud_distribucion/{id}/', 'DistribucionController@update')->name('distribuciones.update');
    route::get('/solicitud_distribucion/{id}/destroy', 'DistribucionController@destroy')->name('distribuciones.destroy');
    route::get('/solicitud_distribucion/{id}/finalizar', 'DistribucionController@FinalizarDist')->name('distribuciones.finalizar');
    route::get('/solicitud_distribucion/{id}/suspender', 'DistribucionCo0000ntroller@SuspenderDist')->name('distribuciones.suspender');
    route::get('/solicitud_distribucion/{id}/generar_factura/', 'DistribucionController@GenerarFactura')->name('distribuciones.facturar');

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
    $relacion_categoria = \App\Pelicula::with('categoria')->with('UserRequest')->get();
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
