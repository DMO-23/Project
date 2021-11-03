@extends('layouts.app')
@section('content')

<div class="card mt-3"> 
<div class ="card-header d-inline-flex">
    <b>CONSULTAR CLIENTE</b>
    <a href="{{ route('clientes.index') }}" class= "btn btn-info ml-auto">
    <i class="fas fa-arrow-circle-left"></i>
    Volver
    </a>
    </div>
    </div>    

<div class ="card-body">
    <p> <b>Id:</b>{{($clientes->idCliente)}}</p>
    <p> <b>Nombre:</b>{{($clientes->nombre)}}</p>
    <p> <b>ApellidoPaterno:</b>{{($clientes->apellidoPaterno)}}</p>
    <p> <b>ApellidoMaterno:</b>{{($clientes->apellidoMaterno)}}</p>
    <p> <b>RFC</b>{{($clientes->rfc)}}</p>
    <p> <b>Telefono:</b>{{($clientes->telefono)}}</p>
    <p> <b>Direccion:</b>{{($clientes->direccion)}}</p>
   


</div>

<div class="card-footer">
        <A class="btn btn-info" href="{{ route('clientes.edit',$clientes->idCliente) }}" form="create">
 <i class="fa fa-edit"></i>
    Editar
    </a>
    </div>
    </div>
    
    
@endsection