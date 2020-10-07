<?php

namespace App\Http\Controllers;

use App\Contrato;
use App\Contrato_Acuerdo;
use App\Contrato_Laboral;
use Illuminate\Http\Request;

class ContratoLaboralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static $Tipo_contrato = 1;
    public function index()
    {
        $contrato = Contrato_Laboral::with('Contrato')->with('UserRequest')->get();
        return view('ContratosLaborales.index',['contrato'=>$contrato]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contratoslaborales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contrato = new Contrato();
        $contrato->admin_id = $request->input('admin_id_registrando');
        $contrato->fecha_inicio = $request->input('fecha_inicio');
        $contrato->fecha_fin = $request->input('fecha_fin');
        $contrato->tipo = self::$Tipo_contrato;
        $contrato->save();

        $laboral = new Contrato_Laboral();
        $laboral->contrato_id = $contrato->id_contrato;
        $laboral->admin_id = $request->input('admin_id_contratado');
        $laboral->sueldo = $request->input('sueldo');
        $laboral->save();

        return redirect()->route('contratos_laborales.index');
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
        $laboral = Contrato_Laboral::with('Contrato')->findOrFail($id);
        return view('contratoslaborales.edit',['laboral'=>$laboral]);
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
        $laboral = Contrato_Laboral::findOrFail($id);
        $contrato = Contrato::findOrFail($laboral->contrato_id);
        $contrato->fecha_inicio = $request->input('fecha_inicio');
        $contrato->fecha_fin = $request->input('fecha_fin');
        $contrato->admin_id = $request->input('admin_id_editando');
        $contrato->tipo = self::$Tipo_contrato;
        $contrato->save();

        $laboral->sueldo = $request->input('sueldo');
        $laboral->admin_id = $request->input('admin_id_contratado');
        $laboral->save();

        return redirect()->route('contratos_laborales.index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $laboral = Contrato_Laboral::findOrFail($id);
        $laboral->delete();
        return redirect()->route('contratos_laborales.index');
    }
}
