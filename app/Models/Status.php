<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    
    protected $table = 'status';
    protected $primaryKey = 'id';

    protected $fillable = [
        'status',
    ];

    public function User() {
        return $this->hasMany(User::class, 'id_status');
    }
}
