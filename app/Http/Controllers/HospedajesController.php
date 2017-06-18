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
        // dd($hospedaje);
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
            // 'fechai' => 'required',
            // 'fechaf' => 'required',
            'tipohabitacion' => 'required',
            'preciototal' => 'required|numeric',
            // 'estado' => 'required',
            'habitacion' => 'required',
            'descripcion' => 'max:100'

        ]);


        $hospedaje = new Hospedaje;

        $hospedaje->codigo = $request->codigo;
        $hospedaje->tipohabitacion = $request->tipohabitacion;
        $hospedaje->preciototal = $request->preciototal;
        $hospedaje->estado = "Ocupado";
        $hospedaje->descripcion = $request->descripcion;
        $hospedaje->trabajador_id = $request->trabajador;
        $hospedaje->cliente_id = $request->cliente;
        $hospedaje->habitacion_id = $request->habitacion;
        // dd($request->habitacion);

        if($_POST['diahora'] == "Dia"){
        // dd($request);
            $hospedaje->fechai = $request->fechai;
            $hospedaje->fechaf = $request->fechaf;
            $hospedaje->horai = null;
            $hospedaje->horaf = null;
        }elseif($_POST['diahora'] == "Hora"){
            $hospedaje->horai = $request->horai;
            $hospedaje->horaf = $request->horaf;
            $hospedaje->fechai = null;
            $hospedaje->fechaf = null;
        }

        if($hospedaje->save()){
            // dd($_POST['diahora']);
            // dd($request);
            $habitacions = Habitacion::find($request->habitacion);
            $habitacions->vigencia = 'Inactivo';
            $habitacions->save();
            
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
        return view("hospedajes.edit")->with([
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
        // dd($hospedaje->habitacion_id);

            $habitacions = Habitacion::find($hospedaje->habitacion_id);
            $habitacions->vigencia = 'Activo';
            $habitacions->save();

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
        // $habitacion->vigencia = 'Activo';
        if($hospedaje->save()){
            // $habitacions->vigencia = 'Activo';

            $hospedaje = Hospedaje::find($id);


            $hospedaje = Hospedaje::find($id);
            $habitacions = Habitacion::find($request->habitacion);
            // dd($request->habitacion);
            $habitacions->vigencia = 'Inactivo';
            $habitacions->save();


            return redirect("/hospedajes");
        }else{
            //  dd($hospedaje);
            return view("/hospedajes.edit");
        }
    }

        public function habitacionAjax(Request $request){

        $habitacion = Habitacion::habitacionAjax($request->id);
        //  dd($habitacion);
        return $habitacion;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
         $hospedaje = Hospedaje::find($id);

// dd($hospedaje);
        // $hospedaje = Hospedaje::find($id);

        // $hospedaje->estado = "Habilitado";


        //     if($hospedaje->update()){
        //     //  dd($hospedaje);
        //     // $habitacions->vigencia = 'Activo';
        //     $habitacions = Habitacion::find($request->habitacion);
        //     $habitacions->vigencia = 'Activo';
            
        //     $habitacions->save();
        //     return redirect("/hospedajes");
        //      }else{
        //     //  dd($hospedaje);
        //     return view("/hospedajes.edit");
        // }
// dd($hospedaje);
        $habitacions = Habitacion::find($hospedaje->habitacion_id);
// dd($habitacions);
            $habitacions->vigencia = 'Activo';
            $habitacions->save();
        Hospedaje::Destroy($id);
        return redirect('/hospedajes');
    }
}
