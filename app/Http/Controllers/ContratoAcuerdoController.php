<?php

namespace App\Http\Controllers;

use App\Contrato;
use App\Empresa;
use App\Contrato_Acuerdo;
use Illuminate\Http\Request;

class ContratoAcuerdoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static $TIPO_CONTRATO = 2;
    public function index()
    {
        $acuerdos = Contrato_Acuerdo::with('Contrato')->with('empresa')->get();
        return view('ContratosAcuerdos.index',['acuerdos'=>$acuerdos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contratosacuerdos.create');
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
        $contrato->tipo = self::$TIPO_CONTRATO;
        $contrato->save();

        $acuerdo = new Contrato_Acuerdo();
        $acuerdo->contrato_id = $contrato->id_contrato;
        $acuerdo->empresa_id = $request->input('empresa_id');
        $acuerdo->save();

        return redirect()->route('contratos_acuerdos.index');
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
        $acuerdo = Contrato_Acuerdo::with('contrato')->findOrFail($id);
        return view('ContratosAcuerdos.edit',['acuerdo'=>$acuerdo]);
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
        $acuerdo = Contrato_Acuerdo::findOrFail($id);
        $contrato = Contrato::findOrFail($acuerdo->contrato_id);
        $contrato->fecha_inicio = $request->input('fecha_inicio');
        $contrato->fecha_fin = $request->input('fecha_fin');
        $contrato->admin_id = $request->input('admin_id_editando');
        $contrato->tipo = self::$TIPO_CONTRATO;
        $contrato->save();

        $acuerdo->empresa_id = $request->input('empresa_id');
        $acuerdo->save();

        return redirect()->route('contratos_acuerdos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $acuerdo = Contrato_Acuerdo::findOrFail($id);
        $acuerdo->delete();
        return redirect()->route('contratos_acuerdos.index');
    }
}
