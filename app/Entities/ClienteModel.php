<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class ClienteModel extends Model
{
    protected $primaryKey = 'idCliente';
   // protected $foreingKey = 'idProducto';
    protected $table = 'clientes';
    protected $fillable = [
             'nombre',
             'apellidoPaterno',
             'apellidoMaterno',
             'rfc',
             'telefono',
             'correo',
             'direccion',
             //'idProducto',
        
    ];
    //public function producto(){
      //  return $this->belongsTo('App\Entities\ProductoModel','idProducto','idProducto');
//}
}