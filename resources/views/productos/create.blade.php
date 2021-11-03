@extends('layouts.app')
@section('content')


<div class="card mt-3"> 
<!--DIV PARA BOTON VOLVERE -->
 <div class ="card-header d-inline-flex">
    <b>CREAR PRODUCTO</b>
    <a href="{{ route('productos.index') }}" class= "btn btn-info ml-auto">
    <i class="fas fa-arrow-circle-left"></i>
    Volver
    </a>
 </div>
 </div>
 
 
 

<!--CUERPO DEL CUADRO CONTIENE EL FORMULARIO -->

 <div class ="card-body">
    <form action="{{ route('productos.store') }}" method="POST" enctype="multipart/form-data" id="create">
    @include('productos.partials.form')

    </form>
 </div>

<!--Boton para crear el nuevo registro -->
 <div class="card-footer">
    <button type="submit" class="btn btn-info" form="create">
    <i class="fas fa-plus-circle"></i>
    Agregar
    </button>
 </div>
 </div>
 </div>

@endsection