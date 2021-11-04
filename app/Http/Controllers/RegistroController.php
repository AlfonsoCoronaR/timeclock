<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Registro;
use Carbon\Carbon;

class RegistroController extends Controller
{
    public function entrada(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->entrada = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/usuario');
    }
    
    public function comida(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->comida = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/usuario');
    }

    public function regreso(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->comida_regreso = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/usuario');
    }

    public function salida(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->salida = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/usuario');
    }

    public function vacaciones(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->vacaciones = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/usuario');
    }

    public function finvacaciones(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->fin_vacaciones = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/usuario');
    }

    public function enfermedad(Request $request)
    {
        $registro = new Registro();

        $registro->fecha = now();
        $registro->enfermedad = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/usuario');
    }
}
