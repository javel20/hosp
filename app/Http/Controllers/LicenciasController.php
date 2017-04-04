<?php

namespace hosp\Http\Controllers;

use Illuminate\Http\Request;

use hosp\Http\Requests;

use hosp\Licencia;
use hosp\Trabajador;

class LicenciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $licencias = Licencia::all();
        // dd($licencias);
        return view("licencias.index")->with([
             'licencias' => $licencias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $licencia = new Licencia;
        $trabajadors = Trabajador::all();
        return view("licencias.create")->with([
             'licencia' => $licencia, 
             'trabajadors' => $trabajadors
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

                
            $fechar = $_POST['fechai'];
            $array = explode('/', $fechar);
            $fecha_php =  $array[2] ."-". $array[1] ."-". $array[0];
            // die($fecha_php);
            // $date=date('Y-m-d H:i:s', strtotime($fecha_php));
            
            $this->fechai    =  strval(trim($fecha_php));

            $fechai=strftime( "%Y-%m-%d", time() );
            $this->FechaRegistro    =  $fechai;

            $fechar = $_POST['fechaf'];
            $array = explode('/', $fechar);
            $fecha_php =  $array[2] ."-". $array[1] ."-". $array[0];
            // die($fecha_php);
            // $date=date('Y-m-d H:i:s', strtotime($fecha_php));
            
            $this->fechaf    =  strval(trim($fecha_php));

            $fechaf=strftime( "%Y-%m-%d", time() );
            $this->FechaRegistro    =  $fechaf;



        $licencia = new Licencia;

        $licencia->nombre = $request->nombre;
        $licencia->fechai = $fechai;
        $licencia->fechaf = $fechaf;
        $licencia->estado = $request->estado;
        $licencia->descripcion = $request->descripcion;
        $licencia->trabajador_id = $request->trabajador;

       

        if($licencia->save()){
            //  dd($licencia);
            return redirect("/licencias");
        }else{
            //  dd($licencia);
            return view("/licencias.create");
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
        $licencias = Licencia::find($id);
        $trabajadors = Trabajador::all();
        return view("licencias.edit")->with([
             'licencias' => $licencias, 
             'trabajadors' => $trabajadors
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

        $licencias = Licencia::find($id);

        $fechai = $_POST['fechai'];
        $pos = preg_match('/[\/]+/',$fechai);
        if($pos == true){
                $array = explode('/', $fechai);
                $fecha_phpi =  $array[2] ."-". $array[1] ."-". $array[0];

        } else{
                $fecha_phpi = $fechai; 
        }

        $fechaf = $_POST['fechaf'];
        $pos = preg_match('/[\/]+/',$fechaf);
        if($pos == true){
                $array = explode('/', $fechaf);
                $fecha_phpf =  $array[2] ."-". $array[1] ."-". $array[0];

        } else{
                $fecha_phpf = $fechaf; 
        }

        
        $licencia->nombre = $request->nombre;
        $licencia->fechai = strval(trim($fecha_phpi));
        $licencia->fechaf = strval(trim($fecha_phpf));
        $licencia->estado = $request->estado;
        $licencia->descripcion = $request->descripcion;
        $licencia->trabajador_id = $request->trabajador;

       

        if($licencia->save()){
            //  dd($licencia);
            return redirect("/licencias");
        }else{
            //  dd($licencia);
            return view("/licencias.edit");
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
        Licencia::Destroy($id);
        return redirect('/licencias');
    }
}

