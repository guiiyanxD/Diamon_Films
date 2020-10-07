<?php

namespace App\Http\Controllers;

use App\Delivery;
use App\Distribucion;
use App\Empresa;
use App\Estado;
use App\Factura;
use App\Pelicula;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DistribucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $distribucion = Distribucion::all();
        return view('distribuciones.index',['distribucion'=>$distribucion]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pelicula = Pelicula::all();
        $empresa = Empresa::all();
        $delivery = Delivery::all();
        $estado = Estado::all();
        return view('distribuciones.create',['pelicula'=>$pelicula, 'empresa'=>$empresa, 'delivery'=>$delivery, 'estado'=>$estado]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $distribucion = new Distribucion();
            $distribucion->empresa_id = $request->input('empresa_id');
            $distribucion->pelicula_id = $request->input('pelicula_id');
            $distribucion->estado_id = $request->input('estado_id');
            $distribucion->delivery_id = $request->input('delivery_id');
            $distribucion->porcentaje = $request->input('porcentaje');
            $distribucion->presupuesto = $request->input('presupuesto');
            $distribucion->save();
            return redirect()->route('distribuciones.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $distribuciones = Distribucion::findOrFail($id);
        $pelicula = Pelicula::all();
        $empresa = Empresa::all();
        $delivery = Delivery::all();
        $estado = Estado::all();
        return view('distribuciones.edit',['distribuciones'=>$distribuciones,'pelicula'=>$pelicula, 'empresa'=>$empresa, 'delivery'=>$delivery, 'estado'=>$estado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $distribuciones = Distribucion::findOrFail($id);
        $distribuciones->empresa_id = $request->input('empresa_id');
        $distribuciones->pelicula_id = $request->input('pelicula_id');
        $distribuciones->porcentaje = $request->input('porcentaje');
        $distribuciones->presupuesto = $request->input('presupuesto');
        $distribuciones->estado_id = $request->input('estado_id');
        $distribuciones->save();
        return redirect()->route('disstribuciones.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $distribuciones = Distribucion::findOrFail($id);
        $distribuciones->delete();
        return redirect()->route('distribuciones.index');
    }

    public function FinalizarDist($id){
        $dist = Distribucion::findOrFail($id);
        $dist->estado_id = 2;
        $dist->save();
        return redirect()->route('distribuciones.index');
    }

    public function SuspenderDist($id){
        $dist = Distribucion::findOrFail($id);
        $dist->estado_id = 3;
        $dist->save();
        return redirect()->route('distribuciones.index');
    }

    public function GenerarFactura($id){
        $dist = Distribucion::findOrFail($id);
        $factura = new Factura();
        $factura->concepto = "Por distribucion de la pelicula " .$dist->pelicula->nombre. " con un porcentaje de ganancia
                    de: " .$dist->porcentaje. " sobre el total ganado de la exhibicion de la pelicula";
        $factura->descripcion = "Por distribucion";
        $factura->fecha =  Carbon::now()->toDateString();
        $factura->distribucion_id = $id;
        $factura->cuenta_id = 1;

        $factura->save();
        return redirect()->route('facturas.index');

    }
}
