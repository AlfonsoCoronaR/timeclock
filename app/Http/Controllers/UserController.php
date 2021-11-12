<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grupo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = DB::table('grupos')->join('users', 'users.id_grupo', 'grupos.id')
                                        ->where('users.id', '<>', 1)
                                        ->where('grupos.disable', '<>', 1)
                                        ->where('users.disable', '<>', 1)
                                        ->select('*')
                                        ->get();

        return view('tablas.usuariosT')->with(['usuarios'=>$usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grupos = DB::table('grupos')->where('id', '<>', 1)
                                     ->where('disable', '<>', 1)
                                     ->get();

        return view('formularios.usuarios')->with(['grupos'=>$grupos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'user' => 'required',
            'email' => 'required | email | unique:users',
            'grupo' => 'required',
            'password' => 'required | confirmed',
            'password_confirmation' => 'required',
        ]);

        $usuarios = new User();

        $usuarios->name = $request->get('name');
        $usuarios->usuario = $request->get('user');
        $usuarios->email = $request->get('email');
        $usuarios->id_grupo = $request->get('grupo');
        $usuarios->password = Hash::make($request->password);

        $usuarios->save();

        return redirect()->to('/usuarios');
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
        $usuario = User::find($id);

        $grupos = DB::table('grupos')->where('disable', '<>', 1)
                                     ->where('id', '<>', 1)
                                     ->get();

        return view('editar.usuarioEdit')->with(['usuario'=>$usuario, 'grupos'=>$grupos]);
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
        $usuario = User::find($id);

        $this->validate($request, [
            'name' => 'required',
            'user' => 'required',
            'email' => 'required | email',
            'grupo' => 'required',
            'password' => 'required | confirmed',
            'password_confirmation' => 'required',
        ]);

        $usuario->name = $request->get('name');
        $usuario->usuario = $request->get('user');
        $usuario->email = $request->get('email');
        $usuario->id_grupo = $request->get('grupo');
        $usuario->password = Hash::make($request->password);

        $usuario->save();

        return redirect()->to('/usuarios');

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
