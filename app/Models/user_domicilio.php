<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_domicilio extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'domicilio',
        'numero_exterior',
        'colonia',
        'CP', 'ciudad',
        'fecha_nacimiento'
    ];
}
