<?php

namespace App\Exports;

use App\Models\Registro;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Contracts\View\View;

/* class RegistrosExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    
    public function collection()
    {
        return Resgistro::all();
    }
} */

class RegistrosExport implements FromView
{
    public function view(): View
    {
        $consultas = DB::table('users')->join('registros', 'registros.id_usuario', '=', 'users.id')
                                      ->where('id_usuario', '<>', 1)
                                      ->select('*')
                                      ->get();

        return view('tablas.registrosT', [
            'consultas' => $consultas,
        ]);
    }
}
