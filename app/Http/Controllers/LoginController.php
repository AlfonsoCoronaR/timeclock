<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\Registro;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function verificar(){
        $credenciales = request()->validate([
            'email' => ['required', 'email', 'string'], 
            'password' => ['required', 'string']
        ]);

        if(Auth::attempt($credenciales)){
            //request()->session()->regenerate();
            return view('vistas.inicio');
        }
        return back()->withErrors([
            'email' => 'El correo o la contraseña no son correctas.',
        ]);
    }

    public function inicio(){

        $registros = Registro::all();
        var_dump($registros);
        return view('vistas.inicio')->with(['regristros'=>$registros]);
    }

    public function salir(Request $request, Redirector $redirect){

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect->to('/login');
    }
}

