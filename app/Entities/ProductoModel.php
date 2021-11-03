<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ProductoModel extends Model
{
    protected $primaryKey = 'idProducto';
   // protected $foreignKey = 'idProveedores';
    protected $table='productos';
    protected $fillable= [
        'idProducto',
        'nombre',
        'descripcion',
        'precio',
        'expiracion',
        'stock',
        //'idProveedor',
    ];
   // public function proveedor(){
     //   return $this->belongsTo('App\Entities\ProveedorModel','idProveedor','idProveedor');
    //}
} 