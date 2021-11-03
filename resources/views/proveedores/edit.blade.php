@extends('layouts.app')
@section('content')

<div class="card mt-3">
     <div class="card-header d-inline-flex">
     <b>Editar Proveedor</b>
     <a href="{{route('proveedores.create')}}" class="btn btn-info ml-auto">
     <i class="fas fa-arrow-left"></i>
     volver
     </a>
     </div>
     </div>

         
         <div class="card-body">
         <form action="{{route('proveedores.update', $proveedor->idProveedor)}}"method="POST" enctype="multupart/form-data" id="create">
         @method('PUT')
         @include('proveedores.partials.form')
         </form>
         </div>

         <div class="card-footer">
         <button type="submit" class="btn btn-info ml-auto" form="create"><i class="fas fa-save"></i>
        Guardar Cambios</button>

        </div>
        
         <div class="card-footer">
         <button type="submit" class="btn btn-danger" form="delete_{{$proveedor->idProveedor}}"
         onclick="return confirm('¿Estas seguro de eliminar el registro?')">
         <i class="fas fa-trash"></i>Eliminar</button>


         <form action="{{route('proveedores.destroy', $proveedor->idProveedor)}}"
         id="delete_{{ $proveedor->idProveedor }}" method="post" enctype="multipart/form-data" hidden> 
          @csrf 
          @method('DELETE')
          </form> 
         </div>
     </div> 
     @endsection