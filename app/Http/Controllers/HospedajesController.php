<?php

namespace hosp\Http\Controllers;

use Illuminate\Http\Request;

use hosp\Http\Requests;

use hosp\Hospedaje;
use hosp\Trabajador;
use hosp\Cliente;
use hosp\Habitacion;
use hosp\Tipohabitacion;

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
            'hospedajes' => $hospedajes
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
        $tipohabitacions = Tipohabitacion::all();
        // dd($tipohabitacions);
        $habitacions = Habitacion::all();
        return view("hospedajes.create")->with([
             'hospedaje' => $hospedaje,
             'tipohabitacions' => $tipohabitacions,
             'trabajadors' => $trabajadors,
             'clientes' => $clientes,
             'habitacions' => $habitacions
        ]);
    }

    public function habitacionAjax(Request $request){

        $habitacion = Habitacion::habitacionAjax($request->id);
        //  dd($habitacion);
        return $habitacion;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'codigo' => 'required|integer',
            'cliente' => 'required',
            'fechai' => 'required',
            'fechaf' => 'required',
            'tipohabitacion' => 'required',
            'preciototal' => 'required|numeric',
            'estado' => 'required',
            'habitacion' => 'required',
            'descripcion' => 'max:100'

        ]);


        $hospedaje = new Hospedaje;

        $hospedaje->codigo = $request->codigo;
        $hospedaje->fechai = $request->fechai;
        $hospedaje->fechaf = $request->fechaf;
        $hospedaje->tipohabitacion = $request->tipohabitacion;
        $hospedaje->preciototal = $request->preciototal;
        $hospedaje->estado = $request->estado;
        $hospedaje->descripcion = $request->descripcion;
        $hospedaje->trabajador_id = $request->trabajador;
        $hospedaje->cliente_id = $request->cliente;
        $hospedaje->habitacion_id = $request->habitacion;

        if($hospedaje->save()){
            // $habitacion = Habitacion::find($id);
            // $habitacion->vigencia = 'Inactivo';
            // $habitacion->update();
            //  dd($hospedaje);
            return redirect("/hospedajes");
        }else{
            //  dd($hospedaje);
            return view("/hospedajes.create");
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
        $tipohabitacions = TipoHabitacion::all();
        $habitacions = Habitacion::all();
        return view("hospedajes.create")->with([
             'hospedaje' => $hospedaje,
             'tipohabitacions' => $tipohabitacions,
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

        $this->validate($request,[
            // 'codigo' => 'required|integer',
            'cliente' => 'required',
            'fechai' => 'required',
            'fechaf' => 'required',
            'tipohabitacion' => 'required',
            'preciototal' => 'required|numeric',
            'estado' => 'required',
            'habitacion' => 'required',
            'descripcion' => 'max:100'

        ]);


        $hospedaje = Hospedaje::find($id);

        $hospedaje->codigo = $request->codigo;
        $hospedaje->fechai = $request->fechai;
        $hospedaje->fechaf = $request->fechaf;
        $hospedaje->tipohabitacion = $request->tipohabitacion;
        $hospedaje->preciototal = $request->preciototal;
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
