<?php

namespace hosp\Http\Controllers;

use Illuminate\Http\Request;

use hosp\Http\Requests;

use hosp\Tipohabitacion;

class TipoHabitacionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipohabitacions = Tipohabitacion::All();
        return view("tipohabitacions.index")->with([
            'tipohabitacions'=> $tipohabitacions
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipohabitacion=new Tipohabitacion;
        return view("tipohabitacions.create")->with([
            'tipohabitacion'=>$tipohabitacion
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

            'nombre' => 'required|min:3|max:30|regex:/^[óáéíúña-z-\s]+$/i',  
            'precio' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'descripcion' => 'max:100'

        ]);

        $tipohabitacion = new Tipohabitacion;

        $tipohabitacion->nombre = $request->nombre;
        $tipohabitacion->precio = $request->precio;
        $tipohabitacion->descripcion = $request->descripcion;

        if($tipohabitacion->save()){
            return redirect("/tipohabitacions");
        }else{
            return view("/tipohabitacions.create",["tipohabitacion" => $tipohabitacion]);
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
        $tipohabitacion= Tipohabitacion::find($id);
        return view("tipohabitacions.edit")->with([
            'tipohabitacion'=>$tipohabitacion
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

            'nombre' => 'required|min:3|max:30|regex:/^[óáéíúña-z-\s]+$/i',  
            'precio' => 'required|regex:/^[0-9]+(\.[0-9][0-9]?)?$/',
            'descripcion' => 'max:100'

        ]);

        $tipohabitacion= Tipohabitacion::find($id);

        $tipohabitacion->nombre = $request->nombre;
        $tipohabitacion->precio = $request->precio;
        $tipohabitacion->descripcion = $request->descripcion;

        if($tipohabitacion->save()){
            return redirect("/tipohabitacions");
        }else{
            return view("/tipohabitacions.create",["tipohabitacion" => $tipohabitacion]);
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
        Tipohabitacion::Destroy($id);
        return redirect('/tipohabitacions');    
    }
}
