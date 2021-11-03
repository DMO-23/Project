<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Vidrio extends Model
{
    protected $table = 'vidrio';
    protected $fillable = [
    'nombre',
    'texto',
    'precio',
    'clave',
    ];
}
