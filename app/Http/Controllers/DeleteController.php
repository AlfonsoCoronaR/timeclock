<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Grupo;
use App\Models\User;

class DeleteController extends Controller
{
    public function areas(Request $request, $id){

        $area = Area::find($id);

        $area->disable = 1;

        $area->save();

        return redirect()->to('/areas');
    }

    public function grupos(Request $request, $id){

        $grupo = Grupo::find($id);

        $grupo->disable = 1;

        $grupo->save();

        return redirect()->to('/grupos');
    }

    public function usuario(Request $request, $id){

        $usuario = User::find($id);

        $usuario->disable = 1;

        $usuario->save();

        return redirect()->to('/usuarios');
    }
}
