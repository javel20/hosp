<?php

namespace hosp\Http\Controllers;

use Illuminate\Http\Request;

use hosp\Http\Requests;

use hosp\Cliente;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::All();
        return view("clientes.index", ["clientes"=> $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cliente=new Cliente;
        return view("clientes.create",["cliente"=>$cliente]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cliente = new Cliente;

        $cliente->dniC = $request->dniC;
        $cliente->nombreC = $request->nombreC;
        $cliente->apePatC = $request->apePatC;
        $cliente->apeMatC = $request->apeMatC;
        $cliente->direccionC = $request->direccionC;
        $cliente->telefonoC = $request->telefonoC;
        $cliente->correoC = $request->correoC;
        $cliente->descripcionC = $request->descripcionC;

        if($cliente->save()){
            return redirect("/clientes");
        }else{
            return view("/clientes.create",["cliente" => $cliente]);
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
        $cliente = Cliente::find($id);
        return view('clientes.show',['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente= Cliente::find($id);
        return view("clientes.edit",["cliente"=>$cliente]);
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
        $cliente= Cliente::find($id);

        $cliente->dniC = $request->dniC;
        $cliente->nombreC = $request->nombreC;
        $cliente->apePatC = $request->apePatC;
        $cliente->apeMatC = $request->apeMatC;
        $cliente->direccionC = $request->direccionC;
        $cliente->telefonoC = $request->telefonoC;
        $cliente->correoC = $request->correoC;
        $cliente->descripcionC = $request->descripcionC;

        if($cliente->save()){
            return redirect("/clientes");
        }else{
            return view("/clientes.edit",["cliente" => $cliente]);
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
        Cliente::Destroy($id);
        return redirect('/clientes');
    }
}
