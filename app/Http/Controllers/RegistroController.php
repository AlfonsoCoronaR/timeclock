<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Notificacion;
use Illuminate\Http\Request;
use App\Models\Registro;
use App\Exports\RegistrosExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use PHPUnit\Util\Test;

class RegistroController extends Controller
{
    public function entrada(Request $request)
    {
        $id = auth()->user()->id;

        $notificacion = new Notificacion();

        $notificacion->notificacion = $request->get('registrar');

        $notificacion->id_usuario = $id;

        $notificacion->save();

        $registro = new Registro();

        $registro->fecha = now();
        $registro->entrada = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoIn');
    }
    
    public function comida(Request $request)
    {
        $id = auth()->user()->id;

        $notificacion = new Notificacion();

        $notificacion->notificacion = $request->get('registrar');

        $notificacion->id_usuario = $id;

        $notificacion->save();

        $registro = new Registro();

        $registro->fecha = now();
        $registro->comida = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoBreak');
    }

    public function regreso(Request $request)
    {
        $id = auth()->user()->id;

        $notificacion = new Notificacion();

        $notificacion->notificacion = $request->get('registrar');

        $notificacion->id_usuario = $id;

        $notificacion->save();

        $registro = new Registro();

        $registro->fecha = now();
        $registro->comida_regreso = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoReturn');
    }

    public function salida(Request $request)
    {
        $id = auth()->user()->id;

        $notificacion = new Notificacion();

        $notificacion->notificacion = $request->get('registrar');

        $notificacion->id_usuario = $id;

        $notificacion->save();

        $registro = new Registro();

        $registro->fecha = now();
        $registro->salida = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoOut');
    }

    public function vacaciones(Request $request)
    {
        $id = auth()->user()->id;

        $notificacion = new Notificacion();

        $notificacion->notificacion = $request->get('registrar');

        $notificacion->id_usuario = $id;

        $notificacion->save();

        $registro = new Registro();

        $registro->fecha = now();
        $registro->vacaciones = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoVacation');
    }

    public function finvacaciones(Request $request)
    {
        $id = auth()->user()->id;

        $notificacion = new Notificacion();

        $notificacion->notificacion = $request->get('registrar');

        $notificacion->id_usuario = $id;

        $notificacion->save();

        $registro = new Registro();

        $registro->fecha = now();
        $registro->fin_vacaciones = now();
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoEndVacation');
    }

    public function enfermedad(Request $request)
    {
        $id = auth()->user()->id;

        $notificacion = new Notificacion();

        $notificacion->notificacion = $request->get('registrar');

        $notificacion->id_usuario = $id;

        $notificacion->save();
        
        $registro = new Registro();

        $registro->fecha = now();
        $registro->enfermedad = $request->get('fecha');
        $registro->id_usuario = auth()->id();

        $registro->save();

        return redirect()->to('/correoSend');
    }

    public function exportExcel()
    {
        return Excel::download(new RegistrosExport, 'registrosUsuarios.xlsx');
    }
}
