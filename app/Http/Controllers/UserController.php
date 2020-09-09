<?php

namespace App\Http\Controllers;

use App\Http\Requests\LogicaRequest;
use App\Persona;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static $Tipo_Usuario = 1;
    public function index()
    {
        $usuarios = User::with('persona')->get();
        return view('user.index',['usuarios'=>$usuarios]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('User.create');
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

        $usuario = new User();
        $usuario->cargo_admin = $request->input('cargo_admin');
        $usuario->email = $request->input('email');
        $password = $request->input('password');
        $usuario->password = Hash::make($password);
        $usuario->persona_id = $persona->id_persona;
        $usuario->save();
        return redirect()->route('usuarios.index');
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
        $usuario = User::findOrFail($id);
        return view('User.edit',['usuario'=>$usuario]);
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
        $usuario = User::findOrFail($id);
        $usuario->cargo_admin = $request->input('cargo_admin');
        $usuario->email = $request->input('email');
        $usuario->password = $request->input('password');
        $usuario->persona_id = $usuario->persona->id_persona;
        $usuario->save();

        $persona = $usuario->persona;
        $persona->nombre = $request->input('nombre');
        $persona->apellido = $request->input('apellido');
        $persona->carnet_id = $request->input('carnet_id');
        $persona->fecha_nacimiento = $request->input('fecha_nacimiento');
        $persona->email_personal = $request->input('email_personal');
        $persona->celular = $request->input('celular');
        $persona->direccion = $request->input('direccion');
        $persona->tipo = self::$Tipo_Usuario;
        $persona->save();
        return redirect()->route('usuarios.index');
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
        return redirect()->route('usuarios.index');
    }
}
