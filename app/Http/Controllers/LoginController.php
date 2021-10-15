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
        $credenciales = request()->only('usuario', 'password');

        if(Auth::attempt($credenciales)){
            return 'Estas logueado';
        }
        return 'No estas logueado';
    }
}

