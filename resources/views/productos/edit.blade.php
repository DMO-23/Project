@extends('layouts.app')
@section('content')


<div class="card mt-3"> 
<!--DIV PARA BOTON VOLVER -->
<div class="card  mb-3">
<div class ="card-header d-inline-flex">
    <b>EDITAR PRODUCTO</b>
    <a href="{{ route('productos.index') }}" class= "btn btn-info ml-auto">
    <i class="fas fa-arrow-circle-left"></i>
    Regresar
    </a>
    </div>
    </div>

    <div class ="card-body">
    <form action="{{ route('productos.update', $producto->idProducto) }}" method="POST" enctype="multipart/form-data" id="create">
    @method('PUT')
    @include('productos.partials.form')
    </form>
    </div>

    
    <div class="card-footer">
    <button type="submit" class="btn btn-info" form="create">
    <i class="fas fa-save"></i>
    Guardar cambios
    </button>

    <button type="btn btn-danger" class="btn btn-danger" form="delete_{{ $producto->idProducto }}"
    onclick="return confirm ('¿Esta seguro de eliminar el registro?')">
    <i class="fas fa-trash"></i>
    
    Eliminar
    </button>
    <form action="{{ route('productos.destroy', $producto->idProducto) }}" 
    id="delete_{{ $producto->idProducto }}" method="post" enctype="multipart/form-data" hidden>
    @csrf
    @method('DELETE')
    </form>
    </div>
    </div>

@endsection