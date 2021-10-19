<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        return 'No estas logueado';
    }
}

