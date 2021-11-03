<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Plastico extends Model
{
    protected $table = 'plastico';
    protected $fillable = [
    'nombre',
    'texto',
    'precio',
    'clave',
    //'empresa'
    ];
}
