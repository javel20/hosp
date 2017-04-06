<?php

namespace hosp\Http\Controllers;

use Illuminate\Http\Request;

use hosp\Http\Requests;

use hosp\Hospedaje;
use hosp\Trabajador;
use hosp\Cliente;
use hosp\Habitacion;

class HospedajesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hospedajes = Hospedaje::all();
        return view('hospedajes.index')->with([
            'hospedaje' => $hospedaje
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $hospedaje = new Hospedaje;
        $trabajadors = Trabajador::all();
        $clientes = Cliente::all();
        $habitacions = Habitacion::all();
        return view("licencias.create")->with([
             'licencia' => $licencia, 
             'trabajadors' => $trabajadors,
             'clientes' => $clientes,
             'habitacions' => $habitacions
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hospedaje = new Hospedaje;

        $hospedaje->codigo = $request->codigo;
        $hospedaje->fechai = $fechai;
        $hospedaje->fechaf = $fechaf;
        $hospedaje->costo = $request->costo;
        $hospedaje->estado = $request->estado;
        $hospedaje->descripcion = $request->descripcion;
        $hospedaje->trabajador_id = $request->trabajador;
        $hospedaje->cliente_id = $request->cliente;
        $hospedaje->habitacion_id = $request->habitacion;

        if($hospedaje->save()){
            //  dd($hospedaje);
            return redirect("/hospedajes");
        }else{
            //  dd($hospedaje);
            return view("/hospedajes.edit");
        }
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
        $hospedaje = Hospedaje::find($id);
        $trabajadors = Trabajador::all();
        $clientes = Cliente::all();
        $habitacions = Habitacion::all();
        return view("licencias.create")->with([
             'licencia' => $licencia, 
             'trabajadors' => $trabajadors,
             'clientes' => $clientes,
             'habitacions' => $habitacions
        ]);

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
        $hospedaje = Hospedaje::find($id);

        $hospedaje->codigo = $request->codigo;
        $hospedaje->fechai = $fechai;
        $hospedaje->fechaf = $fechaf;
        $hospedaje->costo = $request->costo;
        $hospedaje->estado = $request->estado;
        $hospedaje->descripcion = $request->descripcion;
        $hospedaje->trabajador_id = $request->trabajador;
        $hospedaje->cliente_id = $request->cliente;
        $hospedaje->habitacion_id = $request->habitacion;

        if($hospedaje->save()){
            //  dd($hospedaje);
            return redirect("/hospedajes");
        }else{
            //  dd($hospedaje);
            return view("/hospedajes.edit");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hospedaje::Destroy($id);
        return redirect('/hospedajes');
    }
}
