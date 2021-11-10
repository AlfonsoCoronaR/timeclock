<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Grupo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Area;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grupos = DB::table('areas')->join('grupos', 'grupos.id_area', 'areas.id')
                                    ->where('areas.id', '<>', 1)
                                    ->where('grupos.disable', '<>', 1)
                                    ->select('*')
                                    ->get();

        return view('tablas.gruposT')->with(['grupos'=>$grupos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $areas = DB::table('areas')->where('id', '<>', 1)
                                    ->where('disable', '<>', 1)
                                    ->get();

        return view('formularios.grupos')->with(['areas'=>$areas]);
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
            'grupo' => 'required',
            'area' => 'required',
        ]);

        $grupos = new Grupo();

        $grupos->grupo = $request->get('grupo');
        $grupos->id_area = $request->get('area');
        
        $grupos->save();

        return redirect()->to('/grupos');
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
        $grupo = Grupo::find($id);

        $areas = DB::table('areas')->where('id', '<>', 1)
                                    ->where('disable', '<>', 1)
                                    ->get();

        return view('editar.grupoEdit')->with(['grupo'=>$grupo, 'areas'=>$areas]);
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
        $grupo = Grupo::find($id);

        $this->validate($request, [
            'grupo' => 'required',
            'area' => 'required',
        ]);

        $grupo->grupo = $request->get('grupo');
        $grupo->id_area = $request->get('area');

        $grupo->save();

        return redirect()->to('/grupos');
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
