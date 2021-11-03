@extends('layouts.app')
@section('content')

<div class="card mt-3"> 
<div class ="card-header d-inline-flex">
    <b>CONSULTAR PRODUCTO</b>
    <a href="{{ route('productos.index') }}" class= "btn btn-info ml-auto">
    <i class="fas fa-arrow-circle-left"></i>
    Volver
    </a>
    </div>
    </div>    

    <div class="card-body">
    <p><b>Id Producto: </b>{{ $producto->idProducto }}</p>
    <p><b>Nombre: </b>{{ $producto->nombre }}</p>
    <p><b>Descripcion: </b>{{ $producto->descripcion }}</p>
    <p><b>Precio: </b>{{ $producto->precio }}</p>
    <p><b>Expiracion: </b>{{ $producto->expiracion }}</p>
    <p><b>Stock: </b>{{ $producto->stock }}</p>
    <p><b>Proveedor: </b>{{ $producto->idProveedor}}.{{ optional($producto->proveedor)->razonSocial ?? 'No tiene Razon Social'}}</b></p>
    </div>
    

    <div class="card-footer">
    <a  class="btn btn-info" href="{{ route('productos.edit',$producto->idProducto) }}" form="create">
    <i class="fa fa-edit"></i>
    Editar
    </a>
    </div>
    </div>
    
    
@endsection