@extends('layouts.app')
@section('content')


<div class="card mt-3"> 
<!--DIV PARA BOTON VOLVER -->
<div class="card  mb-3">
<div class ="card-header d-inline-flex">
     <b>EDITAR CLIENTE</b>
     <a href="{{route('clientes.create')}}" class="btn btn-info ml-auto">
     <i class="fas fa-arrow-left"></i>
     volver
     </a>
     </div>
     </div>

         
         <div class="card-body">
         <form action="{{route('clientes.update', $clientes->idCliente)}}"method="POST" enctype="multupart/form-data" id="create">
         @method('PUT')
         @include('clientes.partials.form')
         </form>
         </div>

         <div class="card-footer">
         <button type="submit" class="btn btn-info" form="create">
         <i class="fas fa-save"></i>
        Guardar Cambios</button>

        </div>
        
         <div class="card-footer">
         <button type="submit" class="btn btn-danger" form="delete_{{$clientes->idCliente}}"
         onclick="return confirm('¿Estas seguro de eliminar el registro?')">
         <i class="fas fa-trash"></i>
         
         
         Eliminar
         </button>
         <form action="{{route('clientes.destroy', $clientes->idCliente)}}"
         id="delete_{{ $clientes->idCliente }}" method="post" enctype="multipart/form-data" hidden> 
          @csrf 
          @method('DELETE')
          </form> 
         </div>
     </div> 
     @endsection