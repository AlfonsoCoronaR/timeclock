<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro;
use Carbon\Carbon;
use PHPUnit\Util\Test;

class RegistroController extends Controller
{
    public function entrada(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->entrada = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoIn');
    }
    
    public function comida(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->comida = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoBreak');
    }

    public function regreso(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->comida_regreso = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoReturn');
    }

    public function salida(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->salida = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoOut');
    }

    public function vacaciones(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->vacaciones = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoVacation');
    }

    public function finvacaciones(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->fin_vacaciones = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoEndVacation');
    }

    public function enfermedad(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->enfermedad = $request->get('fecha');
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoSend');
    }
}
