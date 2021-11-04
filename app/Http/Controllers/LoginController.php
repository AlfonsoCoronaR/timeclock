<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\Registro;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function verificar(Redirector $redirect){
        $credenciales = request()->validate([
            'email' => ['required', 'email', 'string'], 
            'password' => ['required', 'string']
        ]);

        if(Auth::attempt($credenciales)){
            //request()->session()->regenerate();
            return $redirect->to('/registros');
        }
        return back()->withErrors([
            'email' => 'El correo o la contraseña no son correctos.',
        ]);
    }

    public function inicio(){
        //dd('Estyo aki');
        $registros = Registro::all();
        $usuarios = User::all();
        //dd($registros);
        return view('vistas.inicio')->with(['registros'=>$registros, 'usuarios'=>$usuarios]);
    }

    public function salir(Request $request, Redirector $redirect){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect->to('/login');
    }
}

