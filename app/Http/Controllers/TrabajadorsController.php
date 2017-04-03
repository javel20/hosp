<?php

namespace hosp\Http\Controllers;

use Illuminate\Http\Request;

use hosp\Http\Requests;

use hosp\Trabajador;
use hosp\Tipotrabajador;
use hosp\Local;
use hosp\User;

class TrabajadorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadors = Trabajador::trabajadors();
        // dd($trabajadors);
        return view("trabajadors.index")->with([
             'trabajadors' => $trabajadors
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trabajador=new Trabajador;
        $tipotrabajadors = Tipotrabajador::all();
        $locals = Local::all();
        $users = User::all();

        return view("trabajadors.create")->with([
             'trabajador' => $trabajador, 
             'tipotrabajadors' => $tipotrabajadors,
             'locals' => $locals,
             'users' => $users
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
        $trabajador=new Trabajador;

        $trabajador->nombre = $request->nombre;
        $trabajador->apellidopaterno = $request->apellidopaterno;
        $trabajador->apellidomaterno = $request->apellidomaterno;
        $trabajador->direccion = $request->direccion;
        $trabajador->celular = $request->celular;
        $trabajador->operador = $request->operador;
        $trabajador->estado = $request->estado;
        $trabajador->tipotrabajador_id = $request->tipotrab;
        $trabajador->local_id = $request->local;
        $trabajador->user_id = $request->user;

       

        if($trabajador->save()){
            //  dd($trabajador);
            return redirect("/trabajadors");
        }else{
            //  dd($trabajador);
            return view("/trabajadors.create");
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
        $trabajador= Trabajador::find($id);
        $tipotrabajadors = Tipotrabajador::all();
        $locals = Local::all();
        $users = User::all();
        // dd($trabajador);

        return view("trabajadors.edit")->with([
             'trabajador' => $trabajador, 
             'tipotrabajadors' => $tipotrabajadors,
             'locals' => $locals,
             'users' => $users
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
        $trabajador= Trabajador::find($id);

        $trabajador->nombre = $request->nombre;
        $trabajador->apellidopaterno = $request->apellidopaterno;
        $trabajador->apellidomaterno = $request->apellidomaterno;
        $trabajador->direccion = $request->direccion;
        $trabajador->celular = $request->celular;
        $trabajador->operador = $request->operador;
        $trabajador->estado = $request->estado;
        $trabajador->tipotrabajador_id = $request->tipotrab;
        $trabajador->local_id = $request->local;
        $trabajador->user_id = $request->user;
       

        if($trabajador->save()){
            //  dd($trabajador);
            return redirect("/trabajadors");
        }else{
            //  dd($trabajador);
            return view("/trabajadors.edit",["trabajador" => $trabajador]);
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
        Trabajador::Destroy($id);
        return redirect('/trabajadors');
    }
}
