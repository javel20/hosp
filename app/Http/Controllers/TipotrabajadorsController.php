<?php

namespace hosp\Http\Controllers;

use Illuminate\Http\Request;

use hosp\Http\Requests;

use hosp\Tipotrabajador;

class TipotrabajadorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipotrabajadors = Tipotrabajador::All();
        return view("tipotrabajadors.index")->with([
            'tipotrabajadors'=> $tipotrabajadors
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipotrabajador=new Tipotrabajador;
        return view("tipotrabajadors.create")->with([
            'tipotrabajador'=>$tipotrabajador
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
        $tipotrabajador = new Tipotrabajador;

        $tipotrabajador->nombre = $request->nombre;
        $tipotrabajador->descripcion = $request->descripcion;

        if($tipotrabajador->save()){
            return redirect("/tipotrabajadors");
        }else{
            return view("/tipotrabajadors.create",["tipotrabajador" => $tipotrabajador]);
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
        $tipotrabajador= Tipotrabajador::find($id);
        return view("tipotrabajadors.edit")->with([
            'tipotrabajador'=>$tipotrabajador
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

        $tipotrabajador= Tipotrabajador::find($id);
        $tipotrabajador->nombre = $request->nombre;
        $tipotrabajador->descripcion = $request->descripcion;

        if($tipotrabajador->save()){
            return redirect("/tipotrabajadors");
        }else{
            return view("/tipotrabajadors.create",["tipotrabajador" => $tipotrabajador]);
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
        Tipotrabajador::Destroy($id);
        return redirect('/tipotrabajadors');    
    }
}
