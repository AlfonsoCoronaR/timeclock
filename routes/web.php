<?php

use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::resource('/areas', AreaController::class);

Route::view('/login', 'login')->name('login')->middleware('guest');

Route::post('/principal', [LoginController::class, 'verificar']);

Route::get('/registros', [LoginController::class, 'inicio'])->middleware('auth');

Route::post('/salir', [LoginController::class, 'salir']);

Route::view('/grupos', 'formularios.grupos');

Route::view('/usuarios', 'formularios.usuarios');


