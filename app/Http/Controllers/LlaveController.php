<?php

namespace App\Http\Controllers;

use App\Llave;
use App\Pelicula;
use Illuminate\Http\Request;


class LlaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keys = Llave::all();
        return view('Llaves.index',['keys'=>$keys]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('llaves.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $llave = new Llave();
        $llave->descripcion = $request->input('descripcion');
        $llave->empresa_id = $request->input('empresa_id');
        $llave->pelicula_id = $request->input('pelicula_id');
        $llave->fecha = $request->input('fecha');
        $llave->save();
        return redirect()->route('llaves.index');


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
        $keys = Llave::findOrFail($id);
        return view('llaves.edit',['keys'=>$keys]);
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
        $key = Llave::findOrFail($id);
        $key->descripcion = $request->input('descripcion');
        $key->empresa_id = $request->input('empresa_id');
        $key->pelicula_id = $request->input('pelicula_id');
        $key->fecha = $request->input('fecha');
        $key->save();
        return redirect()->route('llaves.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $llaves = Llave::findorFail($id);
        $llaves->delete();
        return redirect()->route('llaves.index');
    }
}
