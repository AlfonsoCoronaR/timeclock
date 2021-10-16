<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $table = 'areas';
    protected $primaryKey = 'id';

    protected $fillable = [
        'area',
        'created_at',
        'updated_at',
    ];

    public function Grupo() {
        return $this->hasMany(Grupo::class, 'id_area');
    }
}
