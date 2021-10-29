<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'usuario',
        'password',
        'email',
        'tipo_usuario',
        'ip',
        'disable',
        'id_grupo',
        'id_status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'datetime' => 'datetime',
    ];

    protected $attributes = [
        'tipo_usuario' => 0,
        'ip' => '127.0.0.1',
        'disable' => 0,
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */

     public function Status() {
         return $this->belongsTo(Status::class, 'id_status');
     }

     public function Grupo() {
         return $this->belongsTo(Grupo::class, 'id_grupo');
     }

     public function Registro() {
         return $this->hasMany(Registro::class, 'id_usuario');
     }

     public function Notificacion() {
        return $this->hasMany(Notificacion::class, 'id_usuario'); 
     }
}
