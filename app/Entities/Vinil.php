<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Vinil extends Model
{
    protected $table = 'vinil';
    protected $fillable = [
    'nombre',
    'texto',
    'precio',
    'clave',
    'empresa',
    'expiracion'

    ];
}
