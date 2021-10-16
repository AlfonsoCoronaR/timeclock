<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notificacion extends Model
{
    use HasFactory;

    protected $table = 'notificaciones';
    protected $primaryKey = 'id';

    protected $fillable = [
        'notificacion',
        'id_usuario',
        'created_at',
        'updated_at',
    ];

    public function User() {
        return $this->belongsTo(User::class, 'id_usuario');
    }
}
