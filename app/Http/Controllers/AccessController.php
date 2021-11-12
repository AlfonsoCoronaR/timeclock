<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Registro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;


class AccessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $fecha = now();
        $fecha->format('Y-m-d');

        /* var_dump($fecha); */

        $id_usuario = auth()->id();
        $user = auth()->user()->name;
        
        $tabla = DB::table('registros')
                    ->select('*')
                    ->where('id_usuario', $id_usuario)
                    ->whereDate('fecha', $fecha)
                    ->get();


        /* $ip = $request->ip();
        dd($ip); */

        return view('vistas.user')->with(['registros' => $tabla, 'user' => $user]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* $fecha = Carbon::now();

        $registro = new Registro();

        $registro->fecha = now();
        $registro->entrada = $fecha;
        $registro->comida = $fecha;
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/usuario'); */
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
