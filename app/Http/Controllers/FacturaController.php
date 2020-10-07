<?php

namespace App\Http\Controllers;

use App\Factura;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $factura = Factura::all();
        return view('Facturas.index',['factura'=>$factura]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Facturas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $factura = new factura();
        $factura->concepto=$request->input('concepto');
        $factura->descripcion=$request->input('descripcion');
        $factura->monto=$request->input('monto');
        $factura->iva_factura=$request->input('iva_factura');
        $factura->it=$request->input('it');

        $factura->save();

        return redirect()->route('Factura.index');
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
        $factura = Factura::findOrFail($id);
        return view('facturas.edit',['factura'=>$factura]);
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
        $factura = Factura::findOrFail($id);
        $monto=$request->input('monto');
        $factura->iva_factura= $monto * 0.16;
        $factura->it = $monto * 0.3;
        $factura->monto= $monto + $factura->iva_factura + $factura->it;
        $factura->save();
        return redirect()->route('facturas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function CrearPDF(Request $request,$id){
        $fact = Factura::findOrFail($id);
        $pdf = \PDF::loadView('Facturas.prueba', compact('fact'));

        return $pdf->download('Factura_DiamondFilms.pdf');
    }
}
