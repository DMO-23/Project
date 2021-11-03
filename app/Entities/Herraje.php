<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Herraje extends Model
{
    protected $table = 'herraje';
    protected $fillable = [
    'nombre',
    'texto',
    'precio',
    'clave',
    //'empresa'
    ];
}
