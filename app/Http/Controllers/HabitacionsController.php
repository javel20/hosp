<?php

namespace hosp\Http\Controllers;
use Illuminate\Support\Facades\DB;
use hosp\Http\Controllers\Controller;

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
    public function index(Request $request)
    {
        // $habitacions = Habitacion::All();

        // foreach($habitacions as $hab){
        //     $hab->tipohabitacion;
        // }
        // // dd($habitacions);
        // return view("habitacions.index")->with([
        //     'habitaciones' => $habitacions
        // ]);
// dd($request);
        $habitacions = Habitacion::habitacions($request);
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

        $this->validate($request,[
            'numero' => 'required|integer|unique:habitacions',
            'vigencia' => 'required',
            'estado' => 'required',
            'tipohabitacion' => 'required',
            'descripcion' => 'max:100'

        ]);  

        $habitacion=new Habitacion;

        $habitacion->numero = $request->numero;
        $habitacion->vigencia = $request->vigencia;
        $habitacion->estado = $request->estado;
        $habitacion->descripcion = $request->descripcion;
        $habitacion->tipohabitacion_id = $request->tipohabitacion;

       

        if($habitacion->save()){
            //  dd($habitacion);
            return redirect("/habitacions");
        }else{
            //  dd($habitacion);
            return view("/habitacions.create");
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
        $habitacion= Habitacion::find($id);
        $tipoHabitacion= Tipohabitacion::All();
        return view("habitacions.edit")->with([
             'habitacion' => $habitacion, 
             'tipos' => $tipoHabitacion
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
            'numero' => 'required|integer|unique:habitacions',
            'vigencia' => 'required',
            'estado' => 'required',
            'tipohabitacion' => 'required',
            'descripcion' => 'max:100'

        ]);
       

        $habitacion= Habitacion::find($id);

        $habitacion->numero = $request->numero;
        $habitacion->vigencia = $request->vigencia;
        $habitacion->estado = $request->estado;
        $habitacion->descripcion = $request->descripcion;
        $habitacion->tipohabitacion_id = $request->tipohabitacion;

        if($habitacion->save()){
            return redirect("/habitacions");
        }else{
            return view("/habitacions.edit",["habitacion" => $habitacion]);
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
        Habitacion::Destroy($id);
        return redirect('/habitacions');
    }
}
