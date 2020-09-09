<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\Pelicula;
use App\User;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas = Pelicula::with('categoria')->with('User')->get();
        return view('peliculas.index',['peliculas'=>$peliculas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $peliculas = Pelicula::with('categoria')->with('User')->get();
        $categorias =    Categoria::all();
        $user = User::all();
        return view('peliculas.create',['peliculas'=>$peliculas, 'categorias'=>$categorias, 'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula = new Pelicula();
        $pelicula->nombre = $request->input('nombre');
        $pelicula->clasificacion = $request->input('clasificacion');
        $pelicula->formato = $request->input('formato');
        $pelicula->protagonista = $request->input('protagonista');
        $pelicula->sello_cinematografico = $request->input('sello_cinematografico');
        $pelicula->categoria_id = $request->categoria_id;
        $pelicula->admin_id = $request->admin_id;
        $pelicula->idioma = $request->input('idioma');
        $pelicula->genero = $request->input('genero');
        $pelicula->save();
        return redirect()->route('peliculas.index');
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
        $peliculas = Pelicula::findOrFail($id);
        $categorias = Categoria::all();
        $user = User::all();
        return view('peliculas.edit', ['peliculas' => $peliculas, 'categorias'=> $categorias, 'user'=>$user]);
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
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->nombre = $request->input('nombre');
        $pelicula->clasificacion = $request->input('clasificacion');
        $pelicula->formato = $request->input('formato');
        $pelicula->protagonista = $request->input('protagonista');
        $pelicula->sello_cinematografico = $request->input('sello_cinematografico');
        $pelicula->categoria_id = $request->categoria_id;
        $pelicula->admin_id = $request->admin_id;
        $pelicula->idioma = $request->input('idioma');
        $pelicula->genero = $request->input('genero');
        $pelicula->save();
        return redirect()->route('peliculas.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pelicula = Pelicula::findOrFail($id);
        $pelicula->delete();
        return redirect()->route('peliculas.index');
    }
}
