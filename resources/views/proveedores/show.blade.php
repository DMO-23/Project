@extends('layouts.app')
@section('content')


<div class="card mt-3">

     <div class="card-header d-inline-flex">
        <b>CONSULTAR PROVEEDOR</b>
        <a href="{{route('proveedores.index') }}" class="btn btn-info ml-auto">
        <i class="fas fa-arrow-left"></i>
        Volver
        </a>
    </div>
<div>
<div class ="card-body">
    <p> <b>Id:</b>{{($proveedor->idProveedor)}}</p>
    <p> <b>Razon Social:</b>{{($proveedor->razonSocial)}}</p>
    <p> <b>Nombre Completo:</b>{{($proveedor->nombreCompleto)}}</p>
    <p> <b>Direccion</b>{{($proveedor->direccion)}}</p>
    <p> <b>Telefono</b>{{($proveedor->telefono)}}</p>
    <p> <b>Correo:</b>{{($proveedor->correo)}}</p>
    <p> <b>RFC:</b>{{($proveedor->rfc)}}</p>


</div>

<div class="card-footer">
        <A class="btn btn-info" href="{{ route('proveedores.edit',$proveedor->idProveedor) }}" >
        <i class="far fa-plus-square"></i>
        Editar</A>
        </div>
</div>

@endsection 