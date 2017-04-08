<?php


namespace hosp\Http\Controllers;

use Illuminate\Http\Request;
use hosp\Http\Requests;
use hosp\User;
use hosp\Trabajador;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadors = Trabajador::ListaTrabajador();
        // dd($trabajadors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = new User;
        $trabajador = Trabajador::ListaTrabajador();

        return view("auth.register")->with([
            'users' => $users,
            'trabajador' => $trabajador

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
        $user = new User;
        // dd($request);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->trabajador_id = $request->trabajador;

        if($user->save()){
            //  dd($user);
            return redirect("/users.create");
        }else{
            //  dd($user);
            return view("/users.create");
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
