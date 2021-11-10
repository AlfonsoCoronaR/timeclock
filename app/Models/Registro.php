<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $table = 'registros';
    protected $primaryKey = 'id';

    protected $fillable = [
        'fecha',
        'entrada',
        'comida',
        'comida_regreso',
        'salida',
        'vacaciones',
        'fin_vacaciones',
        'enfermedad',
        'ip',
        'id_usuario',
    ];

    protected $casts = [
        'datetime' => 'datetime',
    ];

    protected $attributes = [
        'ip' => '127.0.0.1',
    ];

    public function User() {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
