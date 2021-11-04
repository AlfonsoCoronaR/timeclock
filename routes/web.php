<?php

use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Http\Controllers\AccessController;
use App\Http\Controllers\RegistroController;
use App\Models\Registro;

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


Route::view('/login', 'login')->name('login')->middleware('guest');

Route::post('/principal', [LoginController::class, 'verificar']);

Route::get('/registros', [LoginController::class, 'inicio'])->middleware(['auth', 'access']);

Route::post('/salir', [LoginController::class, 'salir']);

Route::resource('/areas', AreaController::class)->middleware(['auth', 'access']);

Route::resource('/grupos', GrupoController::class)->middleware(['auth', 'access']);

Route::resource('/usuarios', UserController::class)->middleware(['auth', 'access']);

Route::resource('/usuario', AccessController::class)->middleware('auth');

Route::post('/usuario_entrada', [RegistroController::class, 'entrada']);

Route::post('/usuario_comida', [RegistroController::class, 'comida']);

Route::post('/usuario_regreso', [RegistroController::class, 'regreso']);

Route::post('/usuario_salida', [RegistroController::class, 'salida']);

Route::post('/usuario_vacaciones', [RegistroController::class, 'vacaciones']);

Route::post('/usuario_finvacaciones', [RegistroController::class, 'finvacaciones']);

Route::post('/usuario_enfermedad', [RegistroController::class, 'enfermedad']);


