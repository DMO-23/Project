<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ProveedorModel extends Model
{
    protected $primaryKey = 'idProveedor';
    protected $table= 'proveedores';
    protected $fillable = [ 
        'idProveedor',
        'razonSocial',
        'nombreCompleto',
        'direccion',
        'telefono',
        'correo',
        'rfc',
    ];
}