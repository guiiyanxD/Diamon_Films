<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\User;
use App\Delivery;
use Illuminate\Http\Request;


class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $Deliver = Delivery::with('user')->with('empresa')->get();
        return view('Delivery.index',['Deliver'=>$Deliver]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Delivery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Delivery = new Delivery();
        $Delivery->descripcion = $request->input('descripcion');
        $Delivery->empresa_id = $request->input('empresa_id');
        $Delivery->admin_id = $request->input('admin_id_registrando');
        $Delivery->save();

        return redirect()->route('Delivery.index');
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

        $Deliver = Delivery::findOrFail($id);
        return view('Delivery.edit',['Deliver'=>$Deliver]);
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
        $Deliver = new Delivery();
        $Deliver->admin_id = $request->input('admin_id_registrando');
        $Deliver->empresa_id = $request->input('empresa_id');
        $Deliver->descripcion= $request->input('ddescripcion');
        $Deliver->save();

        return redirect()->route('Delivery.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Deliver = Delivery::findOrFail($id);
        $Deliver->delete();
        return redirect()->route('Delivery.index');
    }
}
