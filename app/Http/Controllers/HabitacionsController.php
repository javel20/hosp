<?php

namespace hosp\Http\Controllers;

use Illuminate\Http\Request;

use hosp\Http\Requests;

use hosp\Habitacion;
use hosp\Tipohabitacion;

class HabitacionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $habitacions = Habitacion::All();

        // foreach($habitacions as $hab){
        //     $hab->tipohabitacion;
        // }
        // // dd($habitacions);
        // return view("habitacions.index")->with([
        //     'habitaciones' => $habitacions
        // ]);

        $habitacions = Habitacion::habitacions();
        // dd($habitacions);
        return view("habitacions.index")->with([
             'habitaciones' => $habitacions
        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $habitacion=new Habitacion;
        $tipoHabitacion = Tipohabitacion::all();
        return view("habitacions.create")->with([
             'habitacion' => $habitacion, 
             'tipos' => $tipoHabitacion
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
  

        $habitacion=new Habitacion;

        $habitacion->numero = $request->numero;
        $habitacion->vigencia = $request->vigencia;
        $habitacion->estado = $request->estado;
        $habitacion->descripcion = $request->descripcion;
        $habitacion->tipohabitacion_id = $request->tipoh;

       

        if($habitacion->save()){
            //  dd($habitacion);
            return redirect("/habitacions");
        }else{
            //  dd($habitacion);
            return view("/habitacions.create",["habitacion" => $habitacion]);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
