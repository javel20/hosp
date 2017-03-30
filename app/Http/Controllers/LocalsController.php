<?php

namespace hosp\Http\Controllers;

use Illuminate\Http\Request;

class LocalsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals = Local::All();
        return view("locals.index", ["locals"=> $locals]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $local=new Local;
        return view("locals.create",["local"=>$local]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $local = new local;

        $local->nombre = $request->nombre;
        $local->direccion = $request->direccion;
        $local->telefono = $request->telefono;
        $local->estado = $request->estado;

        if($local->save()){
            return redirect("/locals");
        }else{
            return view("/locals.create",["local" => $local]);
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
        $local= Local::find($id);
        return view("locals.edit",["local"=>$local]);
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
        $local= Local::find($id);

        $local->nombre = $request->nombre;
        $local->direccion = $request->direccion;
        $local->telefono = $request->telefono;
        $local->estado = $request->estado;

        if($local->save()){
            return redirect("/locals");
        }else{
            return view("/locals.create",["local" => $local]);
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
        Local::Destroy($id);
        return redirect('/locals');    
    }
}
