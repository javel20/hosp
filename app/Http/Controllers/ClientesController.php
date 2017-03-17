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

        $this->validate($request,[
            'dni' => 'required|integer|digits:8',
            'nombre' => 'required|min:3|max:60|regex:/^[óáéíúña-z-\s]+$/i',
            'apellidopaterno' => 'required|min:3|max:30|regex:/^[óáéíúña-z]+$/i',
            'apellidomaterno' => 'required|min:3|max:30|regex:/^[óáéíúña-z]+$/i',
            'direccion' => 'min:3|max:50',
            'telefono' => 'integer|digits:9',
            'correo' => 'max:60|email',
            'descripcion' => 'max:100'

        ]);

        $cliente = new Cliente;

        $cliente->dni = $request->dni;
        $cliente->nombre = $request->nombre;
        $cliente->apellidopaterno = $request->apellidopaterno;
        $cliente->apellidomaterno = $request->apellidomaterno;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->correo = $request->correo;
        $cliente->descripcion = $request->descripcion;

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

        $this->validate($request,[
            'dni' => 'required|integer|digits:8',
            'nombre' => 'required|min:3|max:60|regex:/^[óáéíúña-z-\s]+$/i',
            'apellidopaterno' => 'required|min:3|max:30|regex:/^[óáéíúña-z]+$/i',
            'apellidomaterno' => 'required|min:3|max:30|regex:/^[óáéíúña-z]+$/i',
            'direccion' => 'min:3|max:50',
            'telefono' => 'integer|digits:9',
            'correo' => 'max:60|email',
            'descripcion' => 'max:100'

        ]);

        
        $cliente= Cliente::find($id);

        $cliente->dni = $request->dni;
        $cliente->nombre = $request->nombre;
        $cliente->apellidopaterno = $request->apellidopaterno;
        $cliente->apellidomaterno = $request->apellidomaterno;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->correo = $request->correo;
        $cliente->descripcion = $request->descripcion;

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
