<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Correo;
use Illuminate\Http\Request;

class CorreoController extends Controller
{
    public function sendIn()
    {
        $fecha = now();
        $email = auth()->user()->email;
        $user = auth()->user()->name;

        $details=[
            'title' => "$user ha realizado su registro exitosamente.",
            'body' => "Tu registro de ENTRADA fue $fecha"
        ];

        Mail::to('marmolejoximena4@gmail.com')->send(new Correo($details));
        Mail::to($email)->send(new Correo($details));

        return redirect()->to('/usuario');
    }

    public function sendBreak()
    {
        $fecha = now();
        $email = auth()->user()->email;
        $user = auth()->user()->name;

        $details=[
            'title' => "$user ha realizado su registro exitosamente.",
            'body' => "Tu hora de COMIDA inicio $fecha"
        ];

        Mail::to('marmolejoximena4@gmail.com')->send(new Correo($details));
        Mail::to($email)->send(new Correo($details));

        return redirect()->to('/usuario');
    }

    public function sendReturn()
    {
        $fecha = now();
        $email = auth()->user()->email;
        $user = auth()->user()->name;

        $details=[
            'title' => "$user ha realizado su registro exitosamente.",
            'body' => "Tu REGRESO de comida fue $fecha"
        ];

        Mail::to('marmolejoximena4@gmail.com')->send(new Correo($details));
        Mail::to($email)->send(new Correo($details));

        return redirect()->to('/usuario');
    }

    public function sendOut()
    {
        $fecha = now();
        $email = auth()->user()->email;
        $user = auth()->user()->name;

        $details=[
            'title' => "$user ha realizado su registro exitosamente.",
            'body' => "Tu registro de SALIDA fue $fecha"
        ];

        Mail::to('marmolejoximena4@gmail.com')->send(new Correo($details));
        Mail::to($email)->send(new Correo($details));

        return redirect()->to('/usuario');
    }

    public function sendVacation()
    {
        $fecha = now();
        $email = auth()->user()->email;
        $user = auth()->user()->name;

        $details=[
            'title' => "$user ha realizado su registro exitosamente.",
            'body' => "Tus VACACIONES empezaron $fecha"
        ];

        Mail::to('marmolejoximena4@gmail.com')->send(new Correo($details));
        Mail::to($email)->send(new Correo($details));

        return redirect()->to('/usuario');
    }

    public function sendEndVacation()
    {
        $fecha = now();
        $email = auth()->user()->email;
        $user = auth()->user()->name;

        $details=[
            'title' => "$user ha realizado su registro exitosamente.",
            'body' => "Tus vacaciones FINALIZARON el $fecha"
        ];

        Mail::to('marmolejoximena4@gmail.com')->send(new Correo($details));
        Mail::to($email)->send(new Correo($details));

        return redirect()->to('/usuario');
    }

    public function send()
    {
        $fecha = now();
        $email = auth()->user()->email;
        $user = auth()->user()->name;

        $details=[
            'title' => "$user ha realizado su registro exitosamente.",
            'body' => "Tu día inhábil se regristró $fecha por ENFERMEDAD"
        ];

        Mail::to('marmolejoximena4@gmail.com')->send(new Correo($details));
        Mail::to($email)->send(new Correo($details));

        return redirect()->to('/usuario');
    }

}
