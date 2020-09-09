<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Persona;
use App\Representante;
use Illuminate\Http\Request;

class RepresentanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static $Tipo_Usuario = 2;
    public function index()
    {
        $rep = Representante::with('persona')->with('empresa')->get();
        return view('representantes.index',['rep'=>$rep]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('representantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $persona = new Persona();
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->carnet_id = $request->input('carnet_id');
        $persona->fecha_nacimiento = $request->input('fecha_nacimiento');
        $persona->email_personal = $request->input('email_personal');
        $persona->celular = $request->input('celular');
        $persona->direccion = $request->input('direccion');
        $persona->tipo = self::$Tipo_Usuario;
        $persona->save();

        $rep = new Representante();
        $rep->cargo_representante = $request->input('cargo_representante');
        $rep->persona_id = $persona->id_persona;
        $rep->empresa_id = $request->input('empresa_id');
        $rep->save();
        return redirect()->route('representantes.index');
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
        $rep = Representante::findOrFail($id);
        return view('representantes.edit',['rep'=>$rep]);
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
        $rep = Representante::findOrFail($id);
        $persona = $rep->persona;

        $rep->cargo_representante = $request->input('cargo_representante');
        $rep->persona_id = $persona->id_persona;
        $rep->empresa_id = $request->input('empresa_id');
        $rep->save();

        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->carnet_id = $request->input('carnet_id');
        $persona->Fecha_nacimiento = $request->input('fecha_nacimiento');
        $persona->email_personal = $request->input('email_personal');
        $persona->celular = $request->input('celular');
        $persona->direccion = $request->input('direccion');
        $persona->tipo = self::$Tipo_Usuario;
        $persona->save();


        return redirect()->route('representantes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();
        return redirect()->route('representantes.index');
    }
}
