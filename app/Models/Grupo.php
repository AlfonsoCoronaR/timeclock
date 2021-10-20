<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table = 'grupos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'grupo',
        'id_area',
    ];

    protected $casts = [
        'datetime' => 'datetime',
    ];

    public function Area() {
        return $this->belongsTo(Area::class, 'id_area');
    }

    public function User(){
        return $this->hasMany(User::class, 'id_grupo');
    }
}
