<?php


namespace hosp\Http\Controllers;

use Illuminate\Http\Request;
use hosp\Http\Requests;
use hosp\User;
use hosp\Trabajador;
use hosp\Acceso;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::Users();
        // $trabajadors = Trabajador::ListaTrabajador();
        // dd($trabajadors);
        return view("users.index")->with([
            'users' => $users,
            // 'trabajador' => $trabajador

        ]);
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
        $accesos = Acceso::All();

        return view("auth.register")->with([
            'users' => $users,
            'trabajador' => $trabajador,
            'accesos' => $accesos

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
            $user->accesos()->attach($request->accesos);
            // dd($user);
            return redirect("/users");
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
