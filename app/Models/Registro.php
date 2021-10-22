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
        'entrada',
        'comida',
        'comida_regreso',
        'salida',
        'vacaciones',
        'enfermedad',
        'id_usuario',
    ];

    protected $casts = [
        'datetime' => 'datetime',
    ];

    public function User() {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
