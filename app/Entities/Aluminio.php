<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Aluminio extends Model
{
    protected $table = 'aluminio';
    protected $fillable = [
    'nombre',
    'texto',
    'precio',
    'clave',
    ];
}
