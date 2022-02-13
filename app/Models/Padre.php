<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padre extends Model
{
    use HasFactory;
    protected $fillable = [
        'ci','apellidos', 'nombres', 'celtel', 
        'direccion', 'parentesco','distrito'
    ];
}
